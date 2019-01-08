<?php
class Login extends MY_controller {
	public function index()
	{
		if($this->session->userdata('user_id'))
		return redirect('admin/dashboard');
	
     $this->load->helper('form');
	$this->load->view('public/admin_login'); 
    }

	public function admin_login()
	{
		$this->load->library('form_validation');
		//$this->form_validation->set_rules('username','User name','required|alpha|trim');
		//$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<p class="text-danger")>',"</p>");
		if ($this->form_validation->run('admin_login')) {
			//form success
			$username=$this->input->post('username');
			$password=$this->input->post('password');
	      
			$this->load->model('Loginmodel');
			$login_id = $this->Loginmodel->login_valid($username,$password);
			if($login_id)
			{
				$this->session->set_userdata('user_id',$login_id );
				return redirect('admin/dashboard');
				// credential valid login user..
	        }else{
		     $this->session->set_flashdata('login_failed','Invalid Username/Password');
			return redirect('login');
			//echo "password do not match";
		    }
		}else {
		 	//Failed.
		 	$this->load->view('public/admin_login');
		}
	}

	public function logout()
	{   
		$this->session->unset_userdata('user_id');
		return redirect('login');
	}
	public function signup()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger")>',"</p>");
    
		 if ($this->form_validation->run('signup')){
		 	
			 $post = $this->input->post();
			  unset($post['submit']);
		   $pass=$this->input->post('pword');
		   $rpass=$this->input->post('rpword');
		if($pass==$rpass){

                 $this->load->model('signupmodel','signup');
			 
				 $this->signup->signup_valid($post);
				   $this->session->set_flashdata('sign_upfailed','successfully submitted');
				 $this->load->view('public/admin_login');
	           }else{
	           	 $this->session->set_flashdata('sign_upfailed','password does not match');
	           	$this->load->view('public/admin_signup');
	           }

	           


	   }else {
	   
		$this->load->view('public/admin_signup');
	 }
}
}