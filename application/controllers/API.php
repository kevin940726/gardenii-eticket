<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class API extends CI_Controller {

	public $user;

	public function __construct() {
        parent::__construct();
        $this->load->model('member_model');
        
        $this->load->driver('session');

        //處理user登入問題
        if($this->session->has_userdata('user')){
			$this->user = $this->session->userdata('user');
		}
		else{
			$this->user['logged_in'] = false;
		}
    }

    //主頁
	public function event($event_id) {
	
		if( $event_id == null ){

		}
		elseif(strtoupper($event_id) == 'ALL'){
		
		}
		else{

			
		}

	}

}
