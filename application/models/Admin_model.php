<?php

class Admin_model extends CI_model
{

 public function __cunstruct()
 {
    parent::__cunstruct(); 
 }
 
 // user_type = advisor or user or branch
 
 public function all_users($userid=null,$user_type)
 {
	 if(!empty($userid)) $this->db->where('m50_id',$userid);
	 
	 if(!empty($user_type)) $this->db->where('m50_type',$user_type);
     
	 return $this->db->get('view_users')->result();
 }
 

}