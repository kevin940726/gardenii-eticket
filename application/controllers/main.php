<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public $user;

	public function __construct() {
        parent::__construct();
        $this->load->model('member_model');
        $this->load->model('event_model');
        $this->load->helper('url');
        $this->load->driver('session');

        date_default_timezone_set("Asia/Taipei");

        //處理user登入問題
        if($this->session->has_userdata('user')){
			$this->user = $this->session->userdata('user');
		}
		else{
			$this->user['logged_in'] = false;
			$this->user['auth'] = false;
		}
    }

    //主頁
	public function index() {
		$data = array();
		$data['user'] = $this->user;

		$this->load->view('/main/main',$data);
	}

	//活動訂票
	public function event($event_id="") {
		$data = array();
		$data['user'] = $this->user;

		$data['event'] = $this->event_model->get_event_info($event_id);

		var_dump($data['event']);

		$this->load->view('/main/bookticket',$data);
	}

	public function bookticket_handler($event_id='') {
		$this->load->helper('string');
		$this->load->helper('date');

		$data = array();
		$data['user'] = $this->user;

		$post = $this->input->post();
		$post['seat'] = explode(',', $post['seat']);
		$transaction_time = date('Y-m-d H:i:s',now());

		$order_array = array();
		foreach ($post['seat'] as $index=>$value) {
			$temp['order_id'] = 'A'.random_string('numeric',9);
			$temp['event_id'] = $event_id;
			$temp['buyer_id'] = $data['user']['user_id'];
			$temp['buyer_name'] = $post['buyer_name'];
			$temp['buyer_email'] = $post['buyer_email'];
			$temp['buyer_phone'] = $post['buyer_phone'];
			$temp['seat'] = $value;
			$temp['transaction_time'] = $transaction_time;
			$temp['donate_way'] = $post['donate_way'];

			array_push($order_array, $temp);
		}

		var_dump($post);
		var_dump($order_array);
		exit(0);
	}

	public function check() {
		$data = array();
		$data['user'] = $this->user;

		$this->load->view('/main/check_qrcode',$data);
	}
	public function test() {
		
		$this->output->set_output($result['id'].$result['account']);
	}

}
