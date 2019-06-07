<?php
class GalleryModel extends CI_Model {

	
	public function index()
	{
		
	}

	public function insertImage()
	{
		$this->load->view('gallery');
		$query=$this->db->get('gallery');
		$data=$query->result();
		return $data;
	}

	public function getImage()
	{
		$query=$this->db->get('gallery');
		$data=$query->result();
		return $data;
	}
	public function saveImage($data)
	{
		$result=$this->db->insert('gallery',$data);
 		return $result;
 		}
	
}