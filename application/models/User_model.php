<?php

class User_model extends CI_Model {

    

    public function kyc_info($userid)
    {
        $row = $this->db->select('*')
                ->from('users')
                ->join('users_address', 'users_address.userid = users.id')
                ->join('users_banks', 'users_banks.userid = users.id')               
				->join('users_identity', 'users_passport.userid = users.id')
                ->where("id", $userid)
                ->get()
                ->row();
        return $row;
    }

    public function user_full_info($field, $id)
    {
        $row = $this->db->select('*')
                ->from('users')
                ->join('users_address', 'users_address.userid = users.id')
                ->join('users_banks', 'users_banks.userid = users.id')
                ->join('users_pancard', 'users_pancard.userid = users.id')
                ->join('users_aadharcard', 'users_aadharcard.userid = users.id')
        ->join('users_passport', 'users_passport.userid = users.id')
                ->where($field, $id)
                ->get()
                ->row();
        return $row;
    }

    public function change_password($userid, $old_pass, $new_pass, $field)
    {

        $row = $this->read_user_information($userid);

        if ($row == false)
        {
            return 'Something went wrong';
        }

        if ($row->$field != $old_pass)
        {
            return 'Invalid old password';
        }

        return $this->db->where('id', $userid)->update('users', array("$field" => $new_pass));
    }


	 public function read_user_information($userid)
    {
		$condition = "id =" . "'" . $userid . "'";


        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

}
