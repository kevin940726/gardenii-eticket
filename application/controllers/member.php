<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Event_model');
    }

	public function index() {
		$this->load->view('/member/memberinfo');
	}

	public function apply() {
		$this->load->view('/member/contract');

	}

	public function distribute($event_id = "") {
		$this->load->view('/member/distribute');
	}

	public function launch() {
		$this->load->view('/member/launch');
	}

	public function publish_event() {
		$post = $this->input->post();

		var_dump($post);
		exit(0);
	}

	public function manage_event() {
		$this->load->view('/member/ticketrecord');///temp view
	}

	public function manage_ticket() {
		$this->load->view('/member/ticketrecord');
	}

}
