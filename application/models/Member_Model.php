<?php
        class Member_Model extends CI_Model {

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
        public function login($account,$password)
        {
                $sql = "SELECT account,password FROM `a5576332_sa`.`membership` WHERE account=".$this->db->escape($account);
                $query = $this->db->query($sql);
                if($query->num_rows() > 0) {
                        $row = $query->row();
                        if($row->password==$password)
                                return true;
                        else
                                return false;

                }
                else{
                        return false;
                }
        }

}       

?>