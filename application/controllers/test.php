<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->driver('session');
        $fb_config = $this->load->config('facebook');
        var_dump($fb_config);
        // $this->load->library('/facebook/Facebook',$fb_config);
    }

	public function index() {
		$this->load->view('/test');
	}

	public function fb() {
		echo "aaaaa";
		exit(0);
	}
}
