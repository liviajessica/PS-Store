<?php
    class Games_model extends CI_Model{
        function get_games(){
            $query = $this->db->query("SELECT * FROM products WHERE producttype='Games'");
            return $query->result_array();
        }
    }
?>