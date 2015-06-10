<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public $user;

	public function __construct() {
        parent::__construct();
        $this->load->model('member_model');
        
        $this->load->driver('session');

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

		$this->load->view('/main/bookticket',$data);
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
