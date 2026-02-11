<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solar_water_heater_model extends CI_Model {

    private $table = 'solar_water_heater';

    // Insert
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // Get all data
    public function get_all()
    {
        return $this->db
            ->order_by('id', 'DESC')
            ->get($this->table)
            ->result();
    }

    // Get single
    public function get_by_id($id)
    {
        return $this->db
            ->where('id', $id)
            ->get($this->table)
            ->row();
    }

    // Delete
    public function delete($id)
    {
        return $this->db
            ->where('id', $id)
            ->delete($this->table);
    }
	public function update($id, $data)
	{
		return $this->db
			->where('id', $id)
			->update($this->table, $data);
	}
}
?>
