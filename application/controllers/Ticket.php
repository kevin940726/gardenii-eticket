<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ticket extends CI_Controller {

	public $user;

	public function __construct() {
        parent::__construct();
        $this->load->model('Event_model');
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

		$this->load->view('/ticket/distribute',$data);
	}

	//管理票券
	public function manage_ticket() {
		$data = array();
		$data['user'] = $this->user;

		$this->load->view('/ticket/ticketrecord',$data);
	}

}
