<?php
    class Accessories_model extends CI_Model{
        function get_accessories(){
            $query = $this->db->query("SELECT * FROM products WHERE producttype='Accessories'");
            return $query->result_array();
        }
    }
?>