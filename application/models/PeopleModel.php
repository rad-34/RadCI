<?php
class PeopleModel extends CI_Model
{
    function __construct()
    {

        parent::__construct();
    }

    public function people_select()
    {

        $query = $this->db->get('house-holder');
        return $query;
    }


    public function people_add($data)
    {
        $this->db->insert('house-holder', $data);
        return $this->db->insert_id();
    }

    public function people_update($where, $data)
    {
        $this->db->update('house-holder', $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id)
    {
        $this->db->where('NIC', $id);
        $this->db->delete('house-holder');
    }

    public function view_by_id($id)
    {
        $query = $this->db->get_where('house-holder',array('id' => $id));
        return $query->row();
    }

    public function get_family_details($id){
        $query = $this->db->get_where('family-details',array('house_holder_id' => $id));
        return $query;
    }

    public function family_member_add($data)
    {
        $this->db->insert('family-details', $data);
        return $this->db->insert_id();
    }

    public function family_member_update($where, $data)
    {
        $this->db->update('family-details', $data, $where);
        return $this->db->affected_rows();
    }
    
}
?>