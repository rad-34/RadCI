<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PeopleDetails extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PeopleModel');

        if (isset($_POST['btnInsert'])) {
            
            //Insert to data to database
            $this->people_add();    
            
        } else if (isset($_POST['btnUpdate'])) {
    
            //Update a record in a database
            $this->people_update();
            
        }else if(isset($_POST['btnDelete'])){
            $nic = $_POST['nic'];
            echo "$nic";
    
            //Delete a record in a database
            $this->people_delete($nic);
        
        }

    }


    public function index()
    {       
        $this->load->database();
        $data['h']=$this->PeopleModel->people_select();        
        $this->load->view('people_view', $data);        
    }

    public function people_add()
    {
        $data = array(
            'nic' => $this->input->post('nic'),
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'phone_no' => $this->input->post('phone_no'),
            'status' => $this->input->post('status')            
        );

        var_dump($data);
        $insert = $this->PeopleModel->people_add($data);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/peopledetails'));
    }


    public function people_update()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'phone_no' => $this->input->post('phone_no'),
            'status' => $this->input->post('status')
        );
        $this->PeopleModel->people_update(array('nic'=> $this->input->post('nic')),$data);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/peopledetails'));

    }

    public function people_delete($id)
    {
        $this->PeopleModel->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/peopledetails'));
    }


}