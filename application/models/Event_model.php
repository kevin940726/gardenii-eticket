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
        $this->db->insert('event', $data);
        
        $this->db->select('event_id')
                ->from('event')
                ->where('create_time', $data['create_time']);

        $query = $this->db->get();
        $query = $query->row();

        return $query;
    }

    public function set_seat_info($data) {
        $this->db->insert_batch('site_info',$data);
        $event_id = $data[0]['event_id'];
        $this->db->set('complete',1)
                ->where('event_id',$event_id)
                ->update('event');

        return true;
    }

    public function get_event_info($event_id) {
        $this->db->from('event')
                ->where('event_id',$event_id);

        $query = $this->db->get();
        $query = $query->row();

        return $query;
    }
}
