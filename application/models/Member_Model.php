<?php
        class Member_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }

        public function register($account,$password,$name,$email)
        {
                $sql = "SELECT account FROM `a5576332_sa`.`membership` WHERE account=".$this->db->escape($account);
                $query = $this->db->query($sql);
                if($query->num_rows() <= 0) {
                        $sql = "INSERT INTO `membership`(`name`, `password`, `e-mail`, `account`) VALUES (".$this->db->escape($name).",".$this->db->escape($password).",".$this->db->escape($email).",".$this->db->escape($account).");";
                        $query = $this->db->query($sql);
                        return true;
                }
                else{
                        return false;
                }
        }
        //如果登入成功則回傳userID 登入失敗則回傳0
        public function login($account,$password)
        {
                $sql = "SELECT user_id,name,account,password,auth FROM `a5576332_sa`.`membership` WHERE account=".$this->db->escape($account);
                $query = $this->db->query($sql);
                if($query->num_rows() > 0) {
                        $row = $query->row();
                        if ( hash_equals($row->password, crypt($password, $row->password)) ) {
                                $data['user_id'] = $row->user_id;
                                $data['name'] = $row->name;
                                $data['account'] = $row->account;
                                $data['auth'] = $row->auth;
                                return $data;
                        }
                        else
                                return 0;

                }
                else{
                        return 0;
                }
        }

        public function fb_login($name,$email,$facebook_id){
                $sql = "SELECT user_id FROM `a5576332_sa`.`membership` WHERE facebook_id=".$this->db->escape($facebook_id);
                $query = $this->db->query($sql);
                
                if($query->num_rows() <= 0) {
                        $sql = "INSERT INTO `membership`(`name`, `password`, `e-mail`, `account`,`facebook_id`) VALUES (".$this->db->escape($name).",".$this->db->escape("yoooooA____A").",".$this->db->escape($email).",".$this->db->escape($email).",".$this->db->escape($facebook_id).");";
                        $query = $this->db->query($sql);                       
                }
            

                $sql = "SELECT user_id,name,account,password,auth FROM `a5576332_sa`.`membership` WHERE facebook_id=".$this->db->escape($facebook_id);
                $query = $this->db->query($sql);
                if($query->num_rows() > 0) {
                        $row = $query->row();
                
                        $data['user_id'] = $row->user_id;
                        $data['name'] = $row->name;
                        $data['account'] = $row->account;
                        $data['auth'] = $row->auth;
                        return $data;
                }
                else{
                        return 0;
                }

        }

}       

?>