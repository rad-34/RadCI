<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_CI extends CI_Controller {
    public function index(){
        $this->load->view('login_view');
    }

    public function login_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run()){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('Schedule_model');
            if($this->Schedule_model->can_login($username, $password)){
                //if login successful
                $session_data = array(
                    'username'=> $username
                );
                $this->session->set_userdata($session_data);
                //if admin
                // if($username == 'admin')
                //else user
                redirect(base_url().'index.php/Schedule_CI');
            }
            else{
                //if wrong login
                $this->session->set_flashdata('error', 'Invalid Username or Password');
                redirect(base_url().'index.php/login_CI');
            }
        }
        else{
            $this->index();
        }
    }

    public function logout(){
        $this->session->unset_userdata('username');
        redirect(base_url().'index.php/login_CI');
    }
}