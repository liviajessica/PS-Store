<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Addproduct extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('addproduct_model');
        }
        
    	public function index(){
    		$this->load->view('addproduct.php', null);
    	}
    	
    	public function insert_action(){
    	    $name = $_FILES['file']['name'];
              $target_dir = "../../uploads_image/";
              $target_file = $target_dir . basename($_FILES["file"]["name"]);
            
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
              $extensions_arr = array("jpg","jpeg","png","gif");
        
              if(in_array($imageFileType,$extensions_arr) ){
                 move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
              }
              $imagetmp=addslashes (file_get_contents($_FILES['file']['tmp_name']));

    	    
			$values = array(
				'name' => $this->input->post('name'),
				'namedesc' => $this->input->post('namedesc'),
				'longdesc' => $this->input->post('longdesc'),
				'stock' => $this->input->post('stock'),
				'price' => $this->input->post('price'),
				'weight' => $this->input->post('weight'),
				'producttype' => $this->input->post('producttype'),
				'image' => $imagetmp
			);

			$this->addproduct_model->insert($values);
			redirect('home');
		}
    }
?>