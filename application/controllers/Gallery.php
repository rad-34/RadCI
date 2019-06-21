<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	function _construct()
	{
		parent::_construct;
		$this->load->helper('form');
	}
	public function openAddImage()
	{
			
 			if(isset($_POST['submit']))
 		{
 			if(getimagesize($_FILES['image']['tmp_name'])==FALSE) //check the image selected
 			{
 				echo "Please select an image.";
 			}
 			else
 			{
 				$image=addslashes($_FILES['image']['tmp_name']);
 				$name=addslashes($_FILES['image']['name']);
 				$image=file_get_contents($image);
				$image=base64_encode($image);
				$data1['photo']=$image;
				$data1['name']=$name;
				$this->load->model('GalleryModel');
				$this->GalleryModel->saveImage($data1); 
				}
				}
				$this->load->model('GalleryModel');
			$data['datas']=$this->GalleryModel->getImage(); 
			$this->load->view('showGallery',$data);
				
	}
	
	public function openEditImage()
	{
		
 			if(isset($_POST['submit']))
 		{
 			if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
 			{
 				echo "Please select an image.";
 			}
 			else
 			{
 				$iddddd=$_POST['iddd'];
 				$image=addslashes($_FILES['image']['tmp_name']);
 				$name=addslashes($_FILES['image']['name']);
 				$image=file_get_contents($image);
				 $image=base64_encode($image);
				 $data1['id']=$iddddd;
				 $data1['photo']=$image;
				 $data1['name']=$name;
				 $this->load->model('GalleryModel');
				 $result=$this->GalleryModel->updateImage($data1); 
				 
 			}
 		}
 	
		$this->load->view('editGallery');
	}
	public function openDeleteImage()
	{
		$this->load->model('GalleryModel');
		$data['datas']=$this->GalleryModel->getImage(); 
    	$this->load->view('deleteGallery',$data);
	}
	public function openUpdateImage()
	{
		$this->load->model('GalleryModel');
		$data['datas']=$this->GalleryModel->getImage(); 
    	$this->load->view('updateGallery',$data);
	}
	public function updateImage()
	{
		
	}
	public function deleteImage()
	{
		if(isset($_POST['submit']))
 			{

				 $tagId= $_POST['id'];
				 $this->load->model('GalleryModel');
 				$result=$this->GalleryModel->deleteImage($tagId); 
			 }
		$this->load->model('GalleryModel');
		$data['datas']=$this->GalleryModel->getImage(); 
    	$this->load->view('deleteGallery',$data);
	}
	public function loadImage()
	{
		$this->load->model('GalleryModel');
		$data['datas']=$this->GalleryModel->getImage(); 
    	$this->load->view('gallery',$data);
	}

	
}
