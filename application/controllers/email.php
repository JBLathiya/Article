<?php

class Email extends CI_controller 
{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
  $this->load->library('Email'); 
  $this->email->set_newline("\r\n");
  $this->email->from('lathiyajdp@gmail.com', 'Name');
  $this->email->to('lathiyajdp@gmail.com');
  $this->email->subject(' My mail through codeigniter from localhost '); 
  $this->email->message('Hello World…');
  if (!$this->email->send()) {
    show_error($this->email->print_debugger()); }
  else {
    echo 'Your e-mail has been sent!';
  }
}   
}
?>