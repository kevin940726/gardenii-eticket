<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
        parent::__construct();
        // $this->load->model('test');
    }

	public function index() {
		$this->load->view('/main/main');
	}

	public function event($event_id="") {
		$this->load->view('/main/bookticket');
	}

	public function check() {
		$this->load->view('/main/check_qrcode');
	}
	public function test() {
		$this->output->set_output($result['id'].$result['account']);
	}

}
