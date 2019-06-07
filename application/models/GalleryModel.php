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

	public function updateImage($data)
	{
		$this->db->where('id', $data['id']);
        $result=$this->db->update('gallery', $data);
		return $result;
	}
	public function deleteImage($data)
	{
		$this->db->where('id', $data);
        $result=$this->db->delete('gallery');
		return $result;
	}
	
}