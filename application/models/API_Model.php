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
                $temp = array();
                foreach ($row as $key => $value){
                    if(
                        $key=='event_title' || 
                        $key=='event_description' ||
                        $key=='event_location' ||
                        $key=='event_host'     
                    ){
                        $temp[$key] = urlencode($value);
                    }
                    else{

                        $temp[$key] = $value;
                    }
                }
                array_push($result, $temp);
            }
        }
        return $result;
        
    }
}
