<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Event_model');
        $this->load->model('member_model');
        $this->load->driver('session');
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

	public function login(){

		$account=$_POST["account"];
		$password=$_POST["password"];
		$newdata = array(
			'account' => $account,
			'logged_in' => TRUE
		);
		
		$res = $this->member_model->login($account,$password);
		if (!$res){
			$this->output->set_output("登入失敗");
		}
		else{
			$this->output->set_output("登入成功");
			$this->session->set_userdata('user', $newdata);
		}
	}

	public function test_session(){
		$this->output->set_output(json_encode($this->session->userdata('user')));
	}

}
