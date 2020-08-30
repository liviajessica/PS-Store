<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Updatestock extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('updatestock_model');
        }
        
    	public function index(){
    	    $data['updatestock1'] = $this->home_model->get_product();
    		$this->load->view('updatestock.php', $data);
    	}
    }
?>