<?php

class Usermodel extends CI_Model {

	public function getusers()
	{
		$this->load->database();
		


		$this->db->where('id',1);
		$q = $this->db->get("useraccount");
		return $q->result();



		
	}
	
}