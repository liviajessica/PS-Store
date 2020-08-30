<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Games extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('games_model');
        }
        
    	public function index(){
    	    $data['games1'] = $this->games_model->get_games();
    	    if($this->session->has_userdata('t1') || $this->session->t1 >= 0){
    	        $data['session1'] = $this->session->t1;
    	    }
    	    else{
    	        $data['session1'] = -1;
    	    }
    		$this->load->view('games.php', $data);
    	}
    }
?>