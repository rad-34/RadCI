<?php
class GalleryModel extends CI_Model {

	
	public function index()
	{
		
	}

	public function insertImage()
	{
		$this->load->view('gallery');
	}

	public function getImage()
	{
		$query=$this->db->get('gallery');
		$data=$query->result();
		return $data;
	}
}