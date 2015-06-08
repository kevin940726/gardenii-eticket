<?php

class Event_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_event($data) {
        $this->db->insert('event', $data);
        return true;
    }
}