<?php

class ProfilePicUpload extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        
    }

    public function do_upload($nic,$id)
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 0;
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $config['file_name'] = $nic.'.jpg';
        $config['overwrite'] = true;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            redirect(base_url('index.php/peopledetails/view_by_id/'.$id));
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            redirect(base_url('index.php/peopledetails/view_by_id/'.$id));
        }
    }
}
?>