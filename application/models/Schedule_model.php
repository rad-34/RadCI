<?php
class Schedule_model extends CI_Model{
    public function display(){
        // return $this->db->get('schedule')->result_array();
        return $this->db->get('schedule');
    }
    public function insertNew($data){
        $this->db->insert('schedule',$data);
    }
    public function deleteRow($id){
        $this->db->select('SID',$id);
        $this->db->delete('schedule',array('SID'=>$id));
        
    }

    public function getRow($id){
        $query =  $this->db->get_where('schedule',array('SID' => $id))->row();
        return $query;
    }
    public function updateRow($id,$data){
        $this->db->where('SID',$id);
        $this->db->update('Schedule',$data);
    }

    public function can_login($username, $password){
        $this->db->where('Name', $username);
        $this->db->where('Password', $password);
        $query = $this->db->get('users');

        if($query->num_rows() > 0){
           return true; 
        }
        else{
            return false;
        }
    }
}

?>