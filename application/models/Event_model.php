<?php

class Event_model extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_event() {
        
    }
}