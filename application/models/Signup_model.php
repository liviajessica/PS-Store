<?php
    class Signup_model extends CI_Model{
        function get_signupdata(){
            $query = $this->db->query("SELECT * FROM users");
            return $query->result_array();
        }
    }
?>