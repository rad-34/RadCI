<?php
class PeopleModel extends CI_Model
{
    function __construct()
    {

        parent::__construct();
    }

    public function people_select()
    {

        $query = $this->db->get('people_details');
        return $query;
    }


    public function people_add($data)
    {
        $this->db->insert('people_details', $data);
        return $this->db->insert_id();
    }

    public function people_update($where, $data)
    {
        $this->db->update('people_details', $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id)
    {
        $this->db->where('nic', $id);
        $this->db->delete('people_details');
    }
}
?>