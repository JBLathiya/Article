<?php

class Sendmail1 extends CI_controller 
{
	public function __construct(){
		parent::__construct();
	}
	function Mail()
{
    $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'ssl://smtp.gmail.com',
  'smtp_port' => 25,
  'smtp_user' => 'lathiyajdp@gmail.com', // change it to yours
  'smtp_pass' => 'jaydip789', // change it to yours
  'mailtype' => 'html'
  
);

        $message = 'hello';
        $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('lathiyajdp@gmail.com'); // change it to yours
      $this->email->to('lathiyajdp@gmail.com');// change it to yours
      $this->email->subject('Resume from JobsBuddy for your Job posting');
      $this->email->message($message);
      if($this->email->send())
     {
      echo 'Email sent.';
     }
     else
    {
     show_error($this->email->print_debugger());
    }

}
}
?>