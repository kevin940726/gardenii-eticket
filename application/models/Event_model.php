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
        $row = $query->row();

        return $row->event_id;
    }

    public function set_seat_info($data) {
        $this->db->insert_batch('site_info',$data);
        $event_id = $data[0]['event_id'];
        $this->db->set('complete',1)
                ->where('event_id',$event_id)
                ->update('event');

        return true;
    }

    public function get_seat_info($event_id) {
        $this->db->from('site_info')
                ->where('event_id', $event_id);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_event_info($event_id) {
        $this->db->from('event')
                ->where('event_id',$event_id);

        $query = $this->db->get();
        
        return $query->row();
    }

    public function get_order_by_eventid_userid($event_id, $user_id="") {
        $this->db->select('*')
                ->from('order')
                ->join('event','event.event_id = order.event_id');
        if ($user_id =="") {
            $this->db->where(array('event.event_id'=> $event_id, 'buyer_id' => $user_id));
        } else {
            $this->db->where('event_id',$event_id);
        }
                
        $query = $this->db->get();
        $query = $query->result_array();

        if (sizeof($query)) {
            return $query;
        }
        else {
            return false;
        }
    }

    public function order_ticket($data) {
        $this->db->insert_batch('order',$data);

        return true;
    }

    public function get_siteinfo_by_eventid_blockname($event_id, $block_name) {
        $this->db->select()
                ->from('site_info')
                ->where(array('event_id' => $event_id, 'block_name' => $block_name));
        $query = $this->db->get();
        $query = $query->row();

        return $query;
    }

    public function count_email_by_orderid($order_id) {
        $this->db->select()
                ->from('guest_list')
                ->where('order_num', $order_id);
        $query = $this->db->count_all_results();
        return $query;
    }
}
