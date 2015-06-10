<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ticket extends CI_Controller {

	public $user;

	public function __construct() {
        parent::__construct();
        $this->load->model('event_model');
        $this->load->model('member_model');
        $this->load->driver('session');
        $this->load->helper('url');

        date_default_timezone_set("Asia/Taipei");

        if($this->session->has_userdata('user')){
			$this->user = $this->session->userdata('user');
		}
		else{
			$this->user['logged_in'] = false;
		}
    }

	//分票
	public function distribute($event_id = "") {
		if ($event_id ==="") {
			redirect('/member','refresh');
		}
		$data = array();
		$data['user'] = $this->user;

		$blocks = $this->event_model->get_order_by_eventid_userid($event_id, $data['user']['user_id']);

		$temp_blocks_info = array();
		foreach ($blocks as $key => $block) {
			$temp = $this->event_model->get_siteinfo_by_eventid_blockname($block['event_id'], $block['seat']);

			$email_count = $this->event_model->count_email_by_orderid($block['order_id']);

			$temp->available_seat = $temp->block_max_seat - $email_count;
			array_push($temp_blocks_info, $temp);
		}
		var_dump($temp_blocks_info);

		$data['blocks_info'] = json_encode($temp_blocks_info);
		$data['event_id'] = $event_id;
		$this->load->view('/ticket/distribute',$data);
	}

	public function distribute_handler($event_id="") {
		$this->load->helper('date');

		$data = array();
		$data['user'] = $this->user;

		$post = $this->input->post();
		$create_time = date('Y-m-d H:i:s',now());

		// var_dump($post);
		$emails = array();
		foreach ($post as $block_name => $email_for_block) {
			$order_id = $this->event_model->get_order_by_eventid_userid_block($event_id, $data['user']['user_id'], $block_name);
			foreach ($email_for_block as $key => $email) {
				if ($email != "") {
					$temp['order_num'] = $order_id;
					$temp['email'] = $email;
					$temp['status'] = 0;
					$temp['donate_way'] = 0;
					$temp['qrcode'] = 0;
					$temp['create_time'] = $create_time;
					$temp['qrcode_status'] = 0;
					array_push($emails, $temp);
				}
			}
		}

		$res = $this->event_model->insert_guest_list($emails);

		if ($res) {
			redirect('/ticket/distribute/'.$event_id);
		}

	}

	//管理票券
	public function manage_ticket($event_id = "") {	
		$data = array();
		$data['user'] = $this->user;

		$this->load->view('/ticket/ticketrecord',$data);
	}

}
