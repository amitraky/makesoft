<?php

class Master_model extends CI_model
{

 public function __cunstruct()
 {
    parent::__cunstruct(); 
 }
 
 
 public function state()
	{
		$res = $this->db->get_where('m03_location',array('m03_parent'=>1))->result();	
		return $res;
	}
	
	public function city()
	{  
	    $res = $this->db->get_where('m03_location',array('m03_parent > '=>1))->result();
	    return $res;
	}
	
	public function account_head($act=null,$data=null,$id=null)
	{  
	   //insert
	  if($act == 1)
	  {
	    $res = $this->db->insert('m05_management',$data);
		return $res;
	  }
	  
	  //update
	  if($act == 2)
	  {
	    $res = $this->db->where('m05_id',$id)->update('m05_management',$data);
		return $res;
	  }
	  
	
	 $res = $this->db->get_where('m03_location',array('m03_parent > '=>1))->result();
	 return $res;
	}
	
	
}