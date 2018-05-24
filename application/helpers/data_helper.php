<?php 

    // remove all blank value in array
	function array_filters($data=array())
	{
	  return array_filter($data);  
	}
	
	// remove all dublicacy
	function array_uniques($data=array())
	{
	  return array_unique($data);	
	}
	
	function home_page()
	{
	  
	 redirect(base_url()); 
	
	}
	
	function login_page()
	{
	  redirect('Auth/login'); 
	}
	
	
	function b_encode($value)
	{
	  return base64_encode($value); 
	}
	
	function b_decode($value)
	{
	  return base64_decode($value); 
	}

	
	
	//set session data here 
	function set_session($key,$value)
	{
	   $CI =& get_instance();	
	   $CI->session->set_userdata($key,$value);
	}
	
	//set session data here 
	function get_session($key)
	{
	   $CI =& get_instance();		
	   return $CI->session->userdata($key);
	}
	
	

	
	function view($page,$data=null)
	{
	
	   $CI =& get_instance();
	   $CI->load->view($page,$data);	
	
	}
	
	function uri($segment)
	{
	   $CI =& get_instance();
	   return  $CI->uri->segment($segment);
	}
	
	function baseurl($url=null)
	{
	   echo  base_url($url);
	}
	
	
	function post($name)
	{    
	    $CI =& get_instance();
	    return ($CI->input->post($name));
	}
	
	function user_status($status)
	{
	 
	  if($status == 'Active')
		 button('success',$status);
	  if($status == 'Deactive')
		   button('default',$status);
	  if($status == 'Pending')
		  button('warning',$status);
	  if($status == 'Reject')
		 button('danger',$status);	
	}
	
	// t1_1_userid = 1,$field = t1_1_email
	function get_user_field($field,$where)
	{
	  $CI = &get_instance();
	  $res = $CI->db->query("select $field from view_users where $where ");
	  if($res->num_rows()>0)
	  {
	   return $res->row();
	  }
	  else
	  {
	    return 0;
	  }
	
	}
	
	function news_status($id)
	{ 
	  $CI =  &get_instance();
	     $CI->db->where('to', $id); 
	  
	 
	  $res = $CI->db->get_where("tr100_inbox",array('read_status'=>'Pending'))->num_rows();
	  return $res;
	  
	}
	
	function get_tot_users()
	{
	    $CI=&get_instance();
		$nums = $CI->db->get('view_users')->num_rows();
		return $nums;
	}
	
	
/***********************************************VIEW PART**********************************************************/	
	//set flashdata message
	function set_msg($key,$value)
	{
	   $CI =& get_instance();	
	   $msg = 'Plz set message';
	   
	   if($key == 'error')
	   {
		   $msg =  '<div class="m_error">'.$value.'  </div></div>' ;
	   }
	   
	   if($key == 'success')
	   {
	      $msg =  '<div class="m_success">'.$value.'  </div></div>' ;  
	   }
	   
	   
	   if($key == 'warning')
	   {
	      $msg =  '<div class="m_warning">'.$value.'  </div></div>';
                                        
	   }
		
        if($key == 'info')
	    {
		   $msg =  '<div class="m_info">'.$value.'  </div></div>' ;;
	     }	
		 
		 		  
	  	
	   $CI->session->set_flashdata($key, '<div class="messages_wrapper">'.$msg);
	}
	
	
	function strpad($number)
	{
	  return str_pad($number,2,0,STR_PAD_LEFT);
	}
	
	
    function get_msg()
	{
	   $CI =& get_instance();
	   	
	    if($CI->session->flashdata('error'))
		{
		  echo $CI->session->flashdata('error') ;
		}
		if($CI->session->flashdata('success'))
		{
		  echo $CI->session->flashdata('success') ;
		}
		if($CI->session->flashdata('info'))
		{
		  echo $CI->session->flashdata('info') ;
		}
		
	}
	
	
	function button($type,$value)// default ,primary ,success, info,warning, danger
	{
	 echo '<button type="button" class="btn btn-round btn-'.$type.'">'.$value.'</button>';
	
	}
	
	function action($link=null,$type,$title=null)
	{
	  echo "<a href='$link' class='btn btn4 btn_$type' title='$title'></a>";
	}
	
	
	
	function status($status)
	{
	  
	  if($status == '0' )
	  {	
	   echo '<span class="label label-pending">Pending</span>';
	  }
	  
	  if($status == '1' )
	  {	
	     echo '<span class="label label-active">&nbsp; Active &nbsp;</span>';
	  }
	  
	  
	  if($status == '2')
	  {	
	     echo '<span class="label label-inactive">Inactive</span>';
	  }
	  
	  
	  if($status == '3')
	  {	
	   echo '<span class="label label-reject">Rejected</span>';
	  }
	  
	}
	
	
	
	function get_banks($id=null)
	{
	    $CI =& get_instance();
		$banks = $CI->db->get('m01_bank')->result();
		 $option = '';
		foreach($banks as $bank)
		{
		 if($id == $bank->m_bank_id)		 	
	       $option.= '<option value="'.$bank->m_bank_id.'" selected>'.$bank->m_bank_name.'</option>';
		 else
		    $option.= '<option value="'.$bank->m_bank_id.'">'.$bank->m_bank_name.'</option>';
		}
		echo $option;
		
	}
	
	function get_country($id=null)
	{
	    $CI =& get_instance();
		$locations = $CI->db->where('m1_1_status',1)->get('m1_1_countries')->result();
		$option = '';
		$selected='';
		foreach($locations as $location)
		{
		 if($id == $location->m1_1_id)		 	
	       $option = '<option value="'.$location->m1_1_id.'" selected>'.$location->m1_1_name.'</option>';
		 else
		    $option.= '<option value="'.$location->m1_1_id.' '.$selected.'">'.$location->m1_1_name.'</option>';
		}
		echo $option;
		
	}
	
	function get_state($id=null)
	{
	    $CI =& get_instance();
		$locations = $CI->db->where('m1_2_status',1)->get('m02_location')->result();
		$option = '';
		$selected='';
		foreach($locations as $location)
		{
		 if($id == $location->m1_2_id)		 	
	       $option = '<option value="'.$location->m1_2_id.'" selected>'.$location->m1_2_name.'</option>';
		 else
		    $option.= '<option value="'.$location->m1_2_id.' '.$selected.'">'.$location->m1_2_name.'</option>';
		}
		echo $option;
		
	}
	
	function get_city($id=null)
	{
	    $CI =& get_instance();
		$locations = $CI->db->where('m1_2_status >',1)->get('m1_3_cities')->result();
		$option = '';
		$selected='';
		foreach($locations as $location)
		{
		 if($id == $location->m1_3_id)		 	
	       $option = '<option value="'.$location->m1_3_id.'" selected>'.$location->m_loc_name.'</option>';
		 else
		    $option.= '<option value="'.$location->m1_3_id.' '.$selected.'">'.$location->m_loc_name.'</option>';
		}
		echo $option;
		
	}
	
	
	
	
	function submit($name)
	{
		 echo '<p class="stdformbutton"><button class="submit radius2">'.$name.'</button></p>';
	}
	
	//  category get
	function get_category()
	{
	    $CI =& get_instance();
		$cats = $CI->db->get_where('m50_1_category',array('m50_1_status'=>1,'m50_1_sub_cat'=>0))->result();
		$category[0]= '-----Select  Category------';
		foreach($cats as $cat)
		{
	       $category[$cat->m50_1_id] = $cat->m50_1_english_name;
		}
		return $category;
		
	}
	//  sub category get
	function get_s_category($id=null)
	{
	    $CI =& get_instance();
		$scats = $CI->db->get_where('m50_1_category',array('m50_1_status'=>1,'m50_1_sub_cat'=>$id))->result();
		$scategory[0]= '-----Select Sub Category------';
		foreach($scats as $scat)
		{
		   $scategory[$scat->m50_1_id] = $scat->m50_1_english_name;
		}
		return $scategory;
		
	}
	// sub sub category get
	function get_ss_category($id=null)
	{
	    $CI =& get_instance();
		$sscats = $CI->db->get_where('m50_1_category',array('m50_1_status'=>1,'m50_1_sub_cat'=>$id))->result();
		$sscategory[0]= '-----Select SS Category------';
		foreach($sscats as $sscat)
		{
		   $sscategory[$sscat->m50_1_id] = $sscat->m50_1_english_name;
		}
		return $sscategory;
		
	}

	
	
	function getToken($length)
{
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet); // edited

    for ($i=0; $i < $length; $i++) 
	{
        $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
    }
    echo $token;
}

function crypto_rand_secure($min, $max)
{
    $range = $max - $min;
    if ($range < 1) return $min; // not so random...
    $log = ceil(log($range, 2));
    $bytes = (int) ($log / 8) + 1; // length in bytes
    $bits = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    } while ($rnd > $range);
    return $min + $rnd;
}


function open_li($name,$id)
{
 $icon = base_url().'assets/tree/images/folderopened.gif';
 	
  return $html = ' <li  class="tmSingle">
          <div class="tmNoChildren" id="tmtree_'.$id.'"><span id="spantree_'.$id.'" class="tmNode" onclick="__tmPostBack(&quot;tree_'.$id.'&quot;)"><span id="texttree_'.$id.'" class="tmRegular" onclick="category_details('.$id.')">'.$name.'</span></span></div>
        </li>';
  
}

function open_li_last($name,$id)
{
 $icon = base_url().'assets/tree/images/folderopened.gif';
 	
  return $html = ' <li  class="tmLast" >
          <div class="tmNoChildren" id="tmtree_'.$id.'"><span id="spantree_'.$id.'" class="tmNode" onclick="__tmPostBack(&quot;tree_'.$id.'&quot;)"><span id="texttree_'.$id.'" class="tmRegular" onclick="category_details('.$id.')">'.$name.'</span></span></div>
        </li>';
  
}



function open_chield_li($name,$id)
{
 $folderopened = base_url().'assets/tree/images/folderopened.gif';
  $plus = base_url().'assets/tree/images/minus.gif';
 	
  return $html = '<li class="tmFirst" >
  <div class="tmExpanded" id="tmtree_'.$id.'"><img id="imgetree_'.$id.'" class="tmImage" alt="icon" name="tmImage" src="'.$plus.'" onclick="__tmSwitch(&quot;tree_'.$id.'&quot;,&quot;&quot;)"><span id="spantree_'.$id.'" class="tmNode" onclick="__tmPostBack(&quot;tree_'.$id.'&quot;)"><img id="pictree_'.$id.'" class="tmIcon" src="'.$folderopened.'" alt="icon"><span id="texttree_'.$id.'" class="tmRegular" onclick="category_details('.$id.')">'.$name.'</span></span>
    <input type="hidden" id="nodetree_'.$id.'" name="nodetree_'.$id.'" value="e">
    <br>
    <ul class="tmSubTree">';
  
}




