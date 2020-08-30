<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('home_model');
        }
        
    	public function index(){
    	    $data['product1'] = $this->home_model->get_product();
    	    if($this->session->has_userdata('t1')){
    	        $data['session1'] = $this->session->t1;
    	    }
    	    else{
    	        $data['session1'] = -1;
    	    }
    		$this->load->view('home.php', $data);
    	}
    }
?>