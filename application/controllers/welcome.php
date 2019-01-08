<?php
class Welcome  extends CI_Controller {

	public function index(){
		 $this->load->library('email');
  $this->email->from('lathiyajdp@gmail.com', 'jaydeep');
  $this->email->to('rabadiyadivyesh37@gmail.com');
  $this->email->subject('This is my subject');
  $this->email->message('hello divyesh');
  $this->email->send();
     echo "message gone";
	}
}