<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Detail extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('detail_model');
        }
        
    	public function index(){
    	    $data['product1'] = $this->detail_model->get_detail();
    	    if($this->session->has_userdata('t1')){
    	        $data['session1'] = $this->session->t1;
    	    }
    	    else{
    	        $data['session1'] = -1;
    	    }
    		$this->load->view('detail.php', $data);
    	}
    }
?>