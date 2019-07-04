<!--This is the main controller. --> 


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Controller extends CI_Controller{


    //This is the functin that load the defult view, homeview.php to front end.
    public function add(){

        $this->load->view("homeview"); 

      }

    //shows the submit form in front page.
    public function addpost(){

        
        $this->load->model("Main_Model");

        //Associative array that send data to database.

        $data= array (
            
            "title"=> $this->input->post("title"),
            "post"=> $this->input->post("post"),
            //"date"=> $this->input->post("date"),
            "sender"=>$this->input->post("sender")
        ); 
        
        $this->Main_Model->save($data); 

        redirect(base_url()."index.php/Main_Controller/saved");

    }

    //shows all existing in table "post".
    public function saved(){
        
        $this->index();

    }


    // retrive data from database.
    public function index(){

        $this->load->model('Main_Model');
        $data['display'] =$this->Main_Model->display();
        $this->load->view('show',$data);
        


    }

    //delete data
    public function deletedata($id){
       
        $this->load->model('Main_Model');
        $this->Main_Model->delete($id);   
        
        redirect('Main_Controller/saved');
       
    }

    public function deleted(){
       
        $this->load->view('d');

        
    } 


   
    

    

    public function edit($id){
        $this->load->model('Main_Model');
        $data['post']=$this->Main_Model->editpost($id);
        $this->load->view('editpost',$data);

    }

    public function update(){

        $id=$this->input->post('id');
        echo ('id');
        $data= array (
            
            "title"=> $this->input->post("title"),
            "post"=> $this->input->post("post"),
            //"date"=> $this->input->post("date"),
            "sender"=>$this->input->post("sender")
        ); 
        $this->load->model('Main_Model');
        $this->Main_Model->updatepost($data,$id);
      
       

      redirect('Main_Controller/saved');
	
		
    }






}
