<?php
    class Login_model extends CI_Model{
        function get_logindata(){
            $query = $this->db->query("SELECT * FROM users");
            return $query->result_array();
        }
    }
?>