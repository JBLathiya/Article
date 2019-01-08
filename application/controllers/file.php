<?php
class file extends MY_controller {
public function download()
	{
		
         
        


		$this->load->helper('download');
		
	
		

		 
		$mytext = "sd";

		$filename = "jaydeep.jpg";
		 force_download(APPPATH.'../uploads/JB.jpg',NULL);
		
		

	}
}
