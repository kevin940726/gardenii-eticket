<?php

class Event_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function sign_contract($user_id) {
        $this->db->set('auth', 1)
                ->where('user_id',$user_id)
                ->update('membership');
        return true;
    }

    public function insert_event($data) {
        // $this->db->insert('event', $data);

        var_dump($data);

        // $query = $this->db->get('membership');
        $sql = "SELECT account FROM `a5576332_sa`.`membership` WHERE true";
        $query = $this->db->query($sql);
        // var_dump($this->db->_error_message());

        var_dump($query);
        exit(0);
        return true;
    }

    public function set_seat_info($data) {

    }

    public function get_event_info() {

    }
}