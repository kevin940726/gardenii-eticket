<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class API extends CI_Controller {

	public $user;

	public function __construct() {
        parent::__construct();
        //$this->load->model('API_Model');
        $this->load->model('api_model');
        
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
	public function event($event_id = "ALL") {
		$event_id = strtoupper($event_id);
		
		if( $event_id == null ){

		}
		elseif(strtoupper($event_id) == 'ALL'){
			$events = $this->api_model->get_event('ALL');
		}
		else{
			//
			
		}
		$data=array();
		$data['events'] = $events;
		$this->output->set_output(json_encode($data,JSON_FORCE_OBJECT));

	}

}
