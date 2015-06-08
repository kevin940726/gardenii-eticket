<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('member_model');
    }

	public function index() {
		$this->load->view('/main/main');
	}
	public function register() {
		$this->load->view('/main/register');
	}
	public function register_handler(){
		//post
		$account=$_POST['account'];
		$password = $_POST['password'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$res = $this->member_model->register($account,$password,$name,$email);
		if (!$res){
			$this->output->set_output("no");
		}
		else{
			$this->output->set_output("YES");
		}
		//$this->output->set_output(json_encode());
		
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
