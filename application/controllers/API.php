<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	public $user;

	public function __construct() {
        parent::__construct();
        
        $this->load->model('Api_model');
        
        $this->load->driver('session');

        //處理user登入問題
        if($this->session->has_userdata('user')){
			$this->user = $this->session->userdata('user');
		}
		else{
			$this->user['logged_in'] = false;
		}
    }

    //
	public function event($event_id = "ALL") {
		$event_id = strtoupper($event_id);
		
		if( $event_id == null ){

		}
		elseif(strtoupper($event_id) == 'ALL'){
			$events = $this->Api_model->get_event('ALL');
		}
		else{
			//
			
		}
		$data=array();
		$data['events'] = $events;
		$this->output->set_content_type('application/json')->set_output(json_encode((object)$data));

	}

	public function event_hold() {
		$user_id = 0;
		if($this->user['logged_in']){
			$user_id = $this->user['user_id'];
		}

		$events = $this->Api_model->get_event_hold($user_id);

		$data=array();
		$data['events'] = $events;
		$this->output->set_content_type('application/json')->set_output(json_encode((object)$data));
	}

	public function order_event(){
		$user_id = 0;
		if($this->user['logged_in']){
			$user_id = $this->user['user_id'];
		}

		$events = $this->Api_model->get_order_event($user_id);
		
		$data=array();
		$data['events'] = $events;
		$this->output->set_content_type('application/json')->set_output(json_encode((object)$data));

	}

	public function delete_event($event_id){


	}
}
