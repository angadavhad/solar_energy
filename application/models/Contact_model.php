<?php
class Contact_model extends CI_Model {

    public function insert($data){
        return $this->db->insert('contact_messages', $data);
    }

    public function get_all(){
        return $this->db->order_by('id','DESC')->get('contact_messages')->result();
    }

    public function delete($id){
        return $this->db->where('id',$id)->delete('contact_messages');
    }
}
