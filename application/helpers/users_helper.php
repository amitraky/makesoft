<?php 

    // remove all blank value in array
	function array_filterssss($data=array())
	{
	 
		$CI =& get_instance();
		$query=$CI->db->get_where('t1_2_users_detail',array('t1_1_userid'=>$id ));
		$row = $query->row();
		if($query->num_rows()==1)
		{	
			return $row->t1_2_name;	
		}
		else
		{
			return "false";		// RETURN ARRAY WITH ERROR
		}   
	}
	
	// search user by reg id
	function get_userdata($reg_id)
	{
	  $CI =& get_instance();
	  $data =  $CI->db->get_where('view_users',array('t1_1_userid'=>$reg_id))->row(); 
	  return($data);
	}
	
	// search user by user_id id
	function get_userdata_by_username($user_id)
	{
	  $CI =& get_instance();
	  $data =  $CI->db->get_where('view_users',array('t1_1_login_id'=>$user_id))->row(); 
	  return($data);
	}
	
	function get_user_bal($user_id)
	{
	 $CI = &get_instance();
	 return $CI->db->query("SELECT fn_user_bal($user_id,1) as balance")->row()->balance;
	 
	}
	
	function upliner($user_id)
	{ 
	  $CI = &get_instance();
	  $user = array('loginid'=>'Unknown','name'=>'Unknown');
	  $row =  $CI->db->get_where('view_users',array('t1_1_userid'=>$user_id))->row(); 
	  if(($row))
	   $user =  array('loginid'=>$row->t1_1_login_id,'name'=>$row->t1_2_name);
	   
	  return $user;
	}
	
	function countries()
	{
		$CI = &get_instance();
		
		$rows = $CI->db->get_where('m1_1_countries',array('m1_1_status'=>1))->result();
	  foreach($rows as $row)
	    $countries[$row->m1_1_id] = $row->m1_1_name; 
	  return $countries;
	  
	}
	
	function states($id=NULL)
	{
	  $CI = &get_instance();
	  $states = 'States Not Found';
	  
	  if($id)
	    $CI->db->where('m1_1_country_id',$id);
		
	  $rows = $CI->db->get_where('m1_2_states',array('m1_2_status'=>1))->result();
	  if(!empty($rows)){ $states='';
	  foreach($rows as $row)
	    $states[$row->m1_2_id] = $row->m1_2_name; 
	  
	  }
	  return $states;
	}
	
	
	
	function cities($id=NULL)
	{
	  $CI = &get_instance();
	  $cities = 'Cities Not Found';
	  if($id)
	    $CI->db->where('m1_2_state_id',$id);
	 
	  
	  $rows = $CI->db->get_where('m1_3_cities',array('m1_3_status'=>1))->result();
	  if(!empty($rows)){$cities='';
	     foreach($rows as $row)
	        $cities[$row->m1_3_id] = $row->m1_3_name; 
	  }
	  return $cities;
	}
	
	
	function banks()
	{
		$CI = &get_instance();
		
		$rows = $CI->db->get_where('m2_1_banks',array('m2_1_status'=>1))->result();
	  foreach($rows as $row)
	    $banks[$row->m2_1_id] = $row->m2_1_name; 
	  return $banks;
	  
	}
	
	
	
	
	
	
	
	
	
	
		