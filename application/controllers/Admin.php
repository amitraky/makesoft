<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	/**
	 * Version 1.0
	 * Author:Amit Prajapati
	 * Admin can access only
	 * @see 
	 */
	 
	 
	 
	 public function __construct()
	 {
	    parent::__construct();
		$this->load->model('admin_model','admin');
	 }

	 
######################################### Public #################################################	 
	public function index($page=null,$data=null)
	{ 
	
	    $data['menus'] = $this->get_menu();
		 
	    if ($page === null )
		{
		   $data['page'] = 'Admin/Dashboard';
		   $this->load->view('index',$data);
		}
		else
		{
		  $data['page'] = 'Admin/'.$page;	
		  
		  $this->load->view('index',$data);
		  
		}
		
	}
	
	
	
	
	public function dashboard()
	{
		  $this->index('Dashboard');
	}
	
	public function penal_setting()
	{
        $data['rows'] = $this->db->get_where('m01_setting')->result();
		$act = $this->post('act');
		if( $act == 2 )
		{
		  $this->post('data');
		}
		
		$this->index('Panel_settings',$data);
	}
	
	public function profile()
	{
		    $this->index('Profile');
	}
	
	public function menu()
	{
			
		     $this->index('Menu');
	}
	
	public function modules()
	{
			
		       $this->index('Modules');
	}
	
	public function statics()
	{
			
		  $this->index('Statics');
	}
	
	public function dynamics()
	{
			
		      $this->index('Dynamics');
	}
	
	public function datagride()
	{
			
		      $this->index('Datagride');
	}
	
	public function branch()
	{
			
		     $this->index('Branch');
	}
	
	
	public function update_branch()
	{
		      $this->index('update_branch');
	}
	
	public function details_branch()
	{
		     $this->index('details_branch');
	}
	


	
	
	
/*********************************** Mail Mangement********************************/		
	
	
	
	
	

	
	
	
	public function datagrides()
	{
			
		       $this->index('datagride');
	}
	
	public function wizard()
	{
			
		    $this->index('wizard');
	}
	
	
	public function editor()
	{  
		   $this->load->view('admin/editor');
	}
	
	public function coming()
	{  
		   $this->index('comming_soon');
	}
	
	//////////////////////////////////////////finaly
	
	
	
	public function all_branch()
	{	  	
	  $data['rows'] = $this->get_all_branch();
	  $this->index('Branch',$data);
	}
	
	
	
	
	
	
	
	
}
