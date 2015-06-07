<?php
    class helloworld extends CI_Controller{
        function index()
        {
            $this->load->model('helloworld_model');
 		  
			$data['todo'] = $this->helloworld_model->getData();
 
            $data['page_title'] = "hola diego!!!!!";
  
             $this->load->view('helloworld_view',$data);
        }
    }
?>