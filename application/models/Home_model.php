<?php
    class Home_model extends CI_Model{
        function get_product(){
            $query = $this->db->query("SELECT * FROM products");
            return $query->result_array();
        }
    }
?>