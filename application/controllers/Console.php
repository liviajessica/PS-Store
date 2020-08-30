<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Console extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('console_model');
        }
        
    	public function index(){
    	    $data['console1'] = $this->console_model->get_console();
    	    if($this->session->has_userdata('t1') || $this->session->t1 >= 0){
    	        $data['session1'] = $this->session->t1;
    	    }
    	    else{
    	        $data['session1'] = -1;
    	    }
    		$this->load->view('console.php', $data);
    	}
    }
?>