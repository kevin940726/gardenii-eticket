<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->driver('session');
        $this->load->helper('url');
        $fb_config = $this->load->config('facebook');

        var_dump($fb_config);
        $this->load->library('facebook',$fb_config);
    }

	public function index() {
		$result["fburl"]=$this->facebook->login_url();
		$this->load->view('/test',$result);
	}

	public function fb() {
		echo "aaaaa";
		$facebook_user_id = $this->facebook->get_user();
		var_dump($facebook_user_id);
	}
}
