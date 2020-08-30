<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Signup extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('signup_model');
        }
        
    	public function index(){
    	    $data['signup1'] = $this->signup_model->get_signupdata();
    		$this->load->view('signup.php', $data);
    	}
    }
?>