<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends MY_Controller {

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
	
	public function mass_mail()
	{
			
		   $this->index('mass_mail');
	}
	
	public function news()
	{
			
		   $this->index('News');
	}
	
	public function update_news()
	{
		$this->index('Update_news');
	}
	
	public function detials_news()
	{
	   $this->index('detials_news');
	}
	
	public function add_mail_templates()
	{
	   $this->index('add_mail_templates');
	}
	
	public function mail_templates()
	{
		$this->index('mail_templates');
	}
	public function details_mail()
	{
		$this->index('Details_mail');
	}
	
	
	public function system_log()
	{
			
		       $this->index('system_log');
	}
	
	public function system_log_details()
	{
			
		       $this->index('system_log_details');
	}
	public function timer_counter()
	{
			
		       $this->index('Timer');
	}
	
	
	
	
	
}
