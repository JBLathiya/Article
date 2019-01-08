<?php 

class Signupmodel extends CI_Model {
      public function signup_valid($array)
      {
      	return $this->db->insert('users',$array);
      }
  }