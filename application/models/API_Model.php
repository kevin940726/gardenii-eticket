<?php

class Event_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_event($event_id) {
        $this->db
            ->select('*')
            ->from('mytable')
            ->where('id', $id)

        $query = $this->db->get();
        
    }
}
