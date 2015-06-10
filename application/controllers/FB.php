<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FB extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->driver('session');
        $this->load->model('member_model');
        $this->load->helper('url');

        $fb_config = $this->load->config('facebook');

        $this->load->library('facebook',$fb_config);
    }

	public function index() {
		$result["fburl"]=$this->facebook->login_url();
		$this->load->view('/test',$result);
	}

	public function login() {
		$fburl=$this->facebook->login_url();
		header("Location: $fburl");
	}

	public function login_handler() {
		
		$facebook_user = $this->facebook->get_user();
		
		$name  = $facebook_user['name'];	
		$email = $facebook_user['email'];
		$facebook_id = $facebook_user['id'];
		
		$res = $this->member_model->fb_login($name,$email,$facebook_id);

		if ( $res == 0){
			echo "<script>alert('登入失敗，帳號或密碼錯誤');</script>";	
			redirect('/main','refresh');		
		}
		else{
			//$this->output->set_output("登入成功");
			$newdata = array(
				'user_id' => $res['user_id'],
				'auth' => $res['auth'],
				'name' => $res['name'],
				'account' => $res['account'],
				'logged_in' => TRUE
			);
			$this->session->set_userdata('user', $newdata);
			redirect('/main','refresh');
		}
	}
}
