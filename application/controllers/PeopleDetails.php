<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PeopleDetails extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PeopleModel');

    }

    public function pdf()
	{
		$this->load->database();
		$data['h']=$this->PeopleModel->people_select(); 		
		$this->load->library('Pdf');
		$this->load->view('pdf',$data);
	}
    public function index()
    {       
        $this->load->database();
        $data['h']=$this->PeopleModel->people_select();   
        // var_dump($data);     
        $this->load->view('people_view', $data);        
    }

    public function people_add()
    {
        $data = array(
            'NIC' => $this->input->post('insert_nic'),
            'full_name' => $this->input->post('insert_name'),
            'address' => $this->input->post('insert_address'),
            'phone_number' => $this->input->post('insert_phone_no'),
            'status' => $this->input->post('insert_status'),
            'job' => $this->input->post('insert_job'),
            'role' => $this->input->post('insert_role'),
            'password' => $this->input->post('insert_password')               
        );

        // var_dump($data);
        $insert = $this->PeopleModel->people_add($data);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/peopledetails'));
    }


    public function people_update()
    {
        
        $data = array(
            'full_name' => $this->input->post('edit_name'),
            'address' => $this->input->post('edit_address'),
            'phone_number' => $this->input->post('edit_phone_no'),
            'status' => $this->input->post('edit_status'),
            'job' => $this->input->post('edit_job'),
            'role' => $this->input->post('edit_role')
        );

        // var_dump($data);
        $this->PeopleModel->people_update(array('NIC'=> $this->input->post('edit_nic')),$data);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/peopledetails'));

    }

    public function people_delete($id)
    {
        $this->PeopleModel->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/peopledetails'));
    }

    public function view_by_id($id){
        $h = $this->PeopleModel->view_by_id($id);
        $f = $this->PeopleModel->get_family_details($id);
        $data['h']=$h;
        $data['f']=$f;
        // var_dump($data);
        $this->load->view('people_details_user_view', $data);

    }

    public function family_member_add()
    {
        $hid = $this->input->post('insert_house_holder');
        $data = array(
            'name' => $this->input->post('insert_name'),
            'relationship' => $this->input->post('insert_relationship'),
            'job' => $this->input->post('insert_job'),
            'house_holder_id' => $this->input->post('insert_house_holder'),               
        );

        // var_dump($data);
        $insert = $this->PeopleModel->family_member_add($data);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/peopledetails/view_by_id/'.$hid));
    }

    public function family_member_update()
    {  
        $hid = $this->input->post('edit_house_holder');
        $data = array(
            'name' => $this->input->post('edit_name'),
            'job' => $this->input->post('edit_job'),
            'relationship' => $this->input->post('edit_relationship'),
            'house_holder_id' => $this->input->post('edit_house_holder')            
        );

        // var_dump($data);
        $this->PeopleModel->family_member_update(array('id'=> $this->input->post('edit_id')),$data);
        // echo json_encode(array("status" => TRUE));
        // $url = base_url().'index.php/peopledetails/view_by_id/'.$hid;
        redirect(base_url('index.php/peopledetails/view_by_id/'.$hid));

    }

    public function family_member_delete($id)
    {
        $this->PeopleModel->family_member_delete($id);
        echo json_encode(array("status" => TRUE));
        redirect(base_url('index.php/peopledetails'));
    }


}

?>