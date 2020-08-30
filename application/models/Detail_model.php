<?php
    class Detail_model extends CI_Model{
        function get_detail(){
            $query = $this->db->query("SELECT * FROM products");
            return $query->result_array();
        }
    }
?>