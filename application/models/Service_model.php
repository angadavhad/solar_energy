<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends CI_Model {

    // ================= SERVICES =================

    public function get_services()
    {
        return $this->db->get('services')->result();
    }

    public function update_service($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('services', $data);
    }

    // ================= SERVICE DETAILS =================

    public function get_details()
    {
        $this->db->select('service_details.*, services.title');
        $this->db->from('service_details');
        $this->db->join('services', 'services.id = service_details.service_id');
        return $this->db->get()->result();
    }

    public function insert_detail($data)
    {
        return $this->db->insert('service_details', $data);
    }

    public function get_single_detail($id)
    {
        return $this->db->get_where('service_details', ['id' => $id])->row();
    }

    public function update_detail($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('service_details', $data);
    }

    public function delete_detail($id)
    {
        return $this->db->delete('service_details', ['id' => $id]);
    }
}
