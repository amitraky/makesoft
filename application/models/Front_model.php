<?php

class Front_model extends CI_Model {

    

   public function add_user($users_data,$users_address=null,$users_banks=null,$users_identity=null)
    { 
       // $this->db->trans_start(); // Starting Transaction

        $data['users']['unique'] = time();

        $this->db->insert('users',$users_data);
        $userid = $this->db->insert_id();
		$users_address['userid']=$userid;
		$users_banks['userid']=$userid;
		$users_identity['userid']=$userid;
        $this->db->insert('users_address',$users_address);    
        $this->db->insert('users_banks',$users_banks);
        $this->db->insert('users_identity',$users_identity); 
        $this->db->trans_complete(); # Completing transaction
        if ($this->db->trans_status() === FALSE) {
            # Something went wrong.
            $this->db->trans_rollback();
            $status = 0;
        }
        else {
            # Everything is Perfect.
            # Committing data to the database.
            $this->db->trans_commit();
            $status = $userid;
        }
		
        return $status;
    }

}
