<?php
    class Console_model extends CI_Model{
        function get_console(){
            $query = $this->db->query("SELECT * FROM products WHERE producttype='Console'");
            return $query->result_array();
        }
    }
?>