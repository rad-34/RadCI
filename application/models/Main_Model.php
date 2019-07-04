<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Model extends CI_Model{

    public function save($data){

        $this->db->insert("post",$data);
           }



    public function display(){

        $this->db->order_by('id','desc');
        $query= $this->db->get("post");
        return $query;
    
     }


     public function delete($id){
         //return $this->db->delete('post',array('post_id'=>$post_id));
        $this->db->where('id', $id);
        $this->db->delete('post');

    }

    public function displaybyid($id){
    

        $this->load->database();
        $this->db->where('id', $id);
        
        $query=$this->db->get('post') ;
        return $query; 
    
     }

     public function getpostbyid($id){
        $this->load->database();
        $this->db->where('id', $id);
        
        $query=$this->db->get("post") ;
        return $query; 
    


     }

     
    

    public function getpost()
	{
		$query=$this->db->get('post');
		$data=$query->result();
		return $data;
    }
    
    public function editpost($id){
        $this->db->from('post');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->row();

    }

    public function updatepost($data,$id){
        
        $this->db->where('id',$id);
        $this->db->update('post',$data);
        }
    


    
}










?>