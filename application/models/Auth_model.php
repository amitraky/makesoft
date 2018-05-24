<?php
class Auth_model extends CI_Model
{
    
    
    // Insert registration data in database
    public function registration_insert($data)
    {
        
        // Query to check whether username already exist or not
        $condition = "m50_username =" . "'" . $data['user_name'] . "'";
        $this->db->select('*');
        $this->db->from('m50_users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            
            // Query to insert data in database
            $this->db->insert('user_login', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }
    
    // Read data using username and password
    public function login($data)
    {
        
        $condition = "m50_username =" . "'" . $data['username'] . "' AND " . "m50_password =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('m50_users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    
    // Read data from database to show data in admin page
    public function read_user_information($username)
    {
        
        $condition = "m50_username =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('m50_users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
	
	
	public function email_check($email){
 
	  $this->db->select('*');
	  $this->db->from('user');
	  $this->db->where('user_email',$email);
	  $query=$this->db->get();
	 
	  if($query->num_rows()>0){
		return false;
	  }else{
		return true;
	  }
      
    }
	  

  public function country()
  {
   return $this->db->get_where('m02_location',array('m_parent_id'=>0))->result();
   }
	
	
    
    
}