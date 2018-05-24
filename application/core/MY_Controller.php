<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

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

    public function master_model($fx, $data = null, $param1 = null, $param2 = null, $param3 = null)
    {
        $this->load->model('Master_model', 'Master');
        return $this->Master->$fx($data, $param1, $param2, $param3);
    }

    private function user_model($fx, $data = null, $param1 = null, $param2 = null, $param3 = null)
    {
        $this->load->model('User_model');
        return $this->User_model->$fx($data, $param1, $param2, $param3);
    }

    public function post($name)
    {
        return $this->input->post($name);
    }

    public function get_mail_template()
    {
        return $this->get_where('m30_email_template`', array('m30_status' => 1));
    }

    protected function form_validation($name, $c_name)
    {
        return $this->form_validation->set_rules($name, $c_name, 'trim|required|xss_clean');
    }

    // do upload images
    protected function upload_image($file_name, $height = null, $width = null, $path = null, $i = null)
    {
        //  upload an image options
        if (empty($path))
        {
            $path = 'raw/';
        }


        if (!isset($_FILES[$file_name]))
        {
            return false;
        }
        $fileNname = null;

        $file = $_FILES[$file_name]['name'];
        $exe = @end(explode('.', $file));
        $config = array();
        $config['upload_path'] = 'assets/uploaded/raw/';
        $config['allowed_types'] = 'jpg|gif|png|jpeg|JPG|PNG';
        $config['max_size'] = "5000";
        $config['file_name'] = time() . rand(1000, 9999) . '.' . $exe;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload($file_name))
        {
            $this->upload->display_errors();
            return false;
        }
        else
        {
            $file = $this->upload->data();


            $f = $this->resize_image($file['file_name'], $height, $width, $path);

            if ($f == true)
            {
                $fileNname = $file['file_name'];
            }
            unlink($config['upload_path'] . $file['file_name']);
            return $fileNname;
        }
    }

    // resize image here
    protected function resize_image($file, $height = 300, $width = 300, $path)
    {

        $config1['image_library'] = 'gd2';
        $config1['source_image'] = 'assets/uploaded/raw/' . $file;
        $config1['new_image'] = 'assets/uploaded/' . $path;
        $config['create_thumb'] = TRUE;
        $config1['width'] = $width;
        $config1['height'] = $height;
        $this->load->library('image_lib', $config1);
        $this->image_lib->initialize($config1);
        $res = $this->image_lib->resize();
        $this->image_lib->clear();
        return $res;
    }

    protected function form_submit($redirect)
    {
        if ($this->form_validation->run() == FALSE)
        {
            set_msg('error', validation_errors());
            redirect($redirect);
        }
    }

    public function send_email($mobile, $name, $email)
    {
        $message = null;
        $email_code = md5('MD5' . $mobile);
        $message .= '<p> Dear ' . $name . ',</p>';
        $message .= '<p> Please confirm your email by  <a href="' . base_url() . 'auth/email_verify/' . $mobile . '/' . $email_code . '">clicking here</a></p>';

        $message .= '<p> Thanks</p>';
        $to = $email;
        $subject = 'Hello! ';
        $headers = 'From: no-reply@blockage.io' . "\r\n" .
                'X-Mailer: tik/' . phpversion();
        @mail($to, $subject, $message, $headers);
    }

    public function is_empty($value, $name)
    {
        if (empty($value))
        {
            $this->error("The $name field is required");
        }
    }

    public function get_user_details()
    {
        $member_code = $this->post('member_code');
        $row = $this->user_model('get_user_details', $member_code);
        echo json_encode($row);
    }

}
