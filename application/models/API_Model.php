<?php

class API_model extends CI_Model {

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
                ->from('event')
                ->where('complete',"1");

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
    public function get_event_hold($user_id){

        $result = array();

        $this->db
            ->select('*')
            ->from('event')
            ->where('creater_id',$user_id)
            ->where('complete',"1");

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

        return $result;   
    }

    public function get_order_event($user_id){
        $result = array();

        $this->db
            ->select('event_id')
            ->from('`order`')
            ->where('buyer_id',$user_id);

        $query1 = $this->db->get();

        $events = array();

        foreach($query1->result_array() as $row1){
            $event_id = $row1['event_id'];

            array_push($events, $event_id);
        }
        $events = array_unique($events);

        foreach($events as $event_id){

            $this->db
                ->select('*')
                ->from('event')
                ->where('event_id',$event_id)
                ->where('complete',"1");

            $query2 = $this->db->get();

            foreach( $query2->result_array() as $row2 ){

                $temp = array();
                foreach ($row2 as $key => $value){
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
