<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
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
        $this->load->model('Front_model', 'front');
    }

	private function post($name)
    {
        return $this->input->post($name, true);
    }
	
    private function form_submit($redirect)
    {
        if ($this->form_validation->run() == FALSE)
        {  
            echo validation_errors();
            die;
            redirect($redirect);
        }
		
    }
    private function form_validation($name, $c_name)
    {
        return $this->form_validation->set_rules($name, $c_name, 'trim|required|xss_clean');
    }

    
    

    public function index()
    {
        $this->load->view('Front/Registration');
    }

    public function registration()
    {
            //$this->form_validation('full_name', 'Full_name');
			$this->form_validation('email', 'Email');
			//$this->form_validation('username', 'Username');
			//$this->form_validation('password', 'Password');
			//$this->form_validation('mobile', 'Mobile');
         
		 
		 $this->form_submit('front');
         
		 $users_data['name'] = $this->post('last-name').$this->post('first-name');
		 $users_data['email'] = $this->post('email');
		 $users_data['mobile'] = $this->post('phone');
		 $address_data['address1'] = $this->post('address1');
		 $address_data['address2'] = $this->post('address2');
		 $bank_data['account_holder'] = $this->post('account_holder');
		 $bank_identity['name'] = $this->post('card_type');
		  
		
        $userid = $this->front->add_user($users_data,$address_data,$bank_data,$bank_identity);
        var_dump($userid);
    }

}
