<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
	    parent::__construct();
		$this->load->model('Auth_model','Auth');
	}
	 
	 
	public function index($page=null,$data=null)
	{ 
	    if ( $page === null )
		{
		   $data['page'] = 'Auth/Login';
		   $this->load->view('Auth/index',$data);
		}
		else
		{
		   $data['page'] = 'Auth/'.$page;
		   $this->load->view('Auth/index',$data);
		
		}
	}
	
	
	
	public function login()
	{ 
		  $this->index('Login');
	}
	
	public function login_process()
    {
		 
		 
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        $res = $this->form_validation->run();
		
		
        if ($this->form_validation->run() == FALSE) { 
            if (isset($this->session->userdata['logged_in'])) {
				set_msg('error','Invalid session Request');
                 redirect("Auth");
            } else {
				set_msg('error','Invalid Username or Password');
                redirect("Auth");
            }
        } else {
            $data   = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $result = $this->Auth->login($data);
			
			
                if ($result == TRUE) 
				{
               
                   $username = $this->input->post('username');
                   $row   = $this->Auth->read_user_information($username);
				
				   if($row  == false)
				   {
				     set_msg('error','This ID is Blocked');
				     redirect('Auth');
				   }
				 
                  if ($row != false) {
                    $session_data = array(
					    'userid' =>$row->m50_id,
                        'logid' => $row->m50_username,
                        'email' => $row->m50_email,
						'name' => $row->m50_name,
						'user_type' => $row->m50_type,
                        'photo' => $row->m50_avatar
                    );
					
					
					if($row->m50_type == 1)
					{
					   $dashboard = 'Admin/dashboard';
					}
					elseif($row->m50_type == 2)
					{
					   $dashboard = 'Branch/dashboard';
					}
					elseif($row->m50_type >= 3)
					{
					   $dashboard = 'Employee/dashboard';
					}
					else
					{
						 set_msg('error','Invalid User');  
						 redirect("Auth/index");	
					} 
					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
                    redirect($dashboard); 
                }
            } else {                
				set_msg('error','Invalid feilds value');
               redirect("Auth");
            }
        }
        
    }
	
	
	
	public function forget_password()
	{ 
		 $this->index('Forget_pass');
	}
	
	public function registration()
	{ 
	
		 $this->index('Registration');
	}
	
	// Logout from admin page
    public function logout()
    {
        
        // Removing session data
        $sess_array = array(
            'username' => ''
        );
		
        $this->session->unset_userdata('logged_in');
		set_msg('success','Successfully Logout');
		redirect('Auth');
    }
	
	
	
}