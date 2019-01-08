 
<?php
  public function find($id)
	{
		$q=$this->db->from('articles')
		         ->where(['id'=>$id])
		         ->get();
		  if($q->num_rows())
		    return $q->row();
		  return false;       
		
	}