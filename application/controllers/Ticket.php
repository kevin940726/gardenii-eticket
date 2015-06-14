<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ticket extends CI_Controller {

	public $user;

	public function __construct() {
        parent::__construct();
        $this->load->model('Event_model');
        $this->load->model('Member_model');
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

		$blocks = $this->Event_model->get_order_by_eventid_userid($event_id, $data['user']['user_id']);

		$temp_blocks_info = array();
		$temp_existed_emails = array();
		foreach ($blocks as $key => $block) {
			$temp = $this->Event_model->get_siteinfo_by_eventid_blockname($block['event_id'], $block['seat']);
			
			$temp->existed_email = $this->Event_model->get_email_by_order_id($block['order_id']);

			$email_count = sizeof($temp->existed_email);
			$temp->available_seat = $temp->block_max_seat - $email_count;
			array_push($temp_blocks_info, $temp);
		}
		

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
			$order_id = $this->Event_model->get_order_by_eventid_userid_block($event_id, $data['user']['user_id'], $block_name);
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

		if(count($emails)!=0){
			$res = $this->Event_model->insert_guest_list($emails);
		}
		
		redirect('/ticket/distribute/'.$event_id);
		

	}

	//管理票券
	public function manage_ticket($event_id = "") {	
		$data = array();
		$data['user'] = $this->user;

		$orders = $this->Event_model->get_order_by_eventid_userid($event_id);

		$data['orders'] = json_encode($orders);

		$this->load->view('/ticket/ticketrecord',$data);
	}

}
