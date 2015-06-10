<?php

class API_Model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_event($event_id) {
        $result = array();
        if($event_id=='ALL'){
            

            $this->db
                ->select('*')
                ->from('event');

            $query = $this->db->get();
            foreach( $query->result_array() as $row ){

                array_push($result, $row);
            }
        }
        return $result;
        
    }
}
