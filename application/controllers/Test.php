<?php 
   class Test extends CI_Controller {  
	
      public function index() { 
      	  $this->load->model('authenticate','Facebook');
      	 $data=$this->Facebook->getdata();
         print_r($data);
        echo "<br>";
          $this->load->view('test'); 
      } 
        public function add() {

        	echo "hello string";
        }
  
     
   } 
?>