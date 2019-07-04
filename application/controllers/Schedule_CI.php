<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_CI extends CI_Controller {

	public function index()
	{
		//loading the table library
		// $this->load->library('table');
		//loading the model
		$this->load->model('Schedule_model');
		//Storing the return values of the display function in data array 
		$data['tbl'] = $this->Schedule_model->display();
		//passing the data array to the view 
		$this->load->view('Schedule_view',$data);
	}
	public function enterNew(){
		$this->load->view('new_view');
	}
	public function submit(){
		$this->load->model('Schedule_model');
		$newdata = array('Date' => $this->input->post('inputDate'),
						'Time' => $this->input->post('inputTime'),
						'Place' => $this->input->post('inputPlc'),
						'Description' => $this->input->post('inputDesc'));
		$this->Schedule_model->insertNew($newdata);
		redirect(base_url('index.php/Schedule_CI'));
	}
	public function delete($id){
		$this->load->model('Schedule_model');
		$this->Schedule_model->deleteRow($id);
		$this->index();
		redirect(base_url('index.php/Schedule_CI'));
	}
	public function edit($id){
		$this->load->model('Schedule_model');
		$this->load->library('table');
		$data['rw']=$this->Schedule_model->getRow($id);
		// echo $data['rw'];
		// echo $this->table->generate($data['rw']);
		$this->load->view('edit_view',$data);
	}
	public function update($id){
		// echo "Hello";
		$this->load->model('Schedule_model');
		$data = array(	'Date' => $this->input->post('inptDate'),
						'Time' => $this->input->post('inptTime'),
						'Place' => $this->input->post('inptPlc'),
						'Description' => $this->input->post('inptDesc'));
		$this->Schedule_model->updateRow($id,$data);
		redirect(base_url('index.php/Schedule_CI'));
	}
}

?>