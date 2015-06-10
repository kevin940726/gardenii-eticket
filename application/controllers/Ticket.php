<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ticket extends CI_Controller {

	public $user;

	public function __construct() {
        parent::__construct();
        $this->load->model('event_model');
        $this->load->model('member_model');
        $this->load->driver('session');

        if($this->session->has_userdata('user')){
			$this->user = $this->session->userdata('user');
		}
		else{
			$this->user['logged_in'] = false;
		}
    }

	//分票
	public function distribute($event_id = "") {
		$data = array();
		$data['user'] = $this->user;

		$blocks = $this->event_model->get_order_by_eventid_userid($event_id, $data['user']['user_id']);

		$data['blocks_info'] = array();
		foreach ($blocks as $key => $block) {
			$temp = $this->event_model->get_siteinfo_by_eventid_blockname($block['event_id'], $block['seat']);

			$email_count = $this->event_model->count_email_by_orderid($block['order_id']);
			$temp->available_seat = $temp->block_max_seat - $email_count;
			array_push($data['blocks_info'], $temp);
		}

		$this->load->view('/ticket/distribute',$data);
	}

	//管理票券
	public function manage_ticket($event_id = "") {	
		$data = array();
		$data['user'] = $this->user;

		$this->load->view('/ticket/ticketrecord',$data);
	}

}
