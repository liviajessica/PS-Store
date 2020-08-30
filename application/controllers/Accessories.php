<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Accessories extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('accessories_model');
        }
        
    	public function index(){
    	    $data['accessories1'] = $this->accessories_model->get_accessories();
    	    if($this->session->has_userdata('t1') || $this->session->t1 >= 0){
    	        $data['session1'] = $this->session->t1;
    	    }
    	    else{
    	        $data['session1'] = -1;
    	    }
    		$this->load->view('accessories.php', $data);
    	}
    }
?>