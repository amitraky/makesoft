<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	/**
	 * Version 1.0
	 * Author:Amit Prajapati
	 * Admin can access only
	 * @see 
	 */
	 
	 
	 
	 public function __construct()
	 {
	    parent::__construct();
	 }
	 
################################################# Private #######################################
	 
	 private function post($name)
	 {
	   return $this->input->post($name);	
	 }
	 
	 private function ajax_model($fx,$data=null,$param1=null,$param2=null,$param3=null)
	 {
	    $this->load->model('Ajax_model');	 
	   return $this->Ajax_model->$fx($data,$param1,$param2,$param3);	
	 }
	 
	 
	 
######################################### Public #################################################	 
	
	
	
	public function branch_details()
	{
	  $id = $this->post('branch_id');
	  if(empty($id))
	  {
	    echo false;
	  }
	  sleep(2);
	  $res =  $this->ajax_model('branch_details',$id);
	  echo json_encode($res);
	 
	}
	
	
	
	public function category_details()
	{
	  $id = $this->post('cat_id');
	  if(empty($id))
	  {
	    echo false;
	  }
	 // sleep(2);
	  $res =  $this->ajax_model('category_details',$id);
	  echo json_encode($res);
	 
	}
	
	
	
	
}
