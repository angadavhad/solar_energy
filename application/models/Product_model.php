<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    public function save_product($data)
    {
        $this->db->insert('product', $data);
    }
	 public function get_all_products()
    {
        return $this->db->get('product')->result();

    }
	public function delete_product($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('product');
	}
	public function edit_product($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('product', $data);
	}
	public function update_product($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('product', $data);
	}
	public function get_product_by_id($id)
	{
		return $this->db->get_where('product', ['id' => $id])->row();
	}
	public function solar_water_heater()
    {
        $data['heaters'] = $this->Solar_water_heater_model->get_all();
        $this->load->view('admin/solar_water_heater', $data);
    }

    // Save data
    public function save_solar_water_heater()
    {
        // Image upload config
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['file_name']     = time();

        $this->upload->initialize($config);

        if(!$this->upload->do_upload('heater_image')){
            echo $this->upload->display_errors();
            return;
        }

        $img = $this->upload->data('file_name');

        $data = [
            'heater_title'    => $this->input->post('heater_title'),
            'heater_details'  => $this->input->post('heater_details'),
            'heater_capacity' => $this->input->post('heater_capacity'),
            'heater_image'    => $img
        ];

        $this->Solar_water_heater_model->insert($data);

        redirect('product/solar_water_heater');
    }

    // Delete
    public function delete($id)
    {
        $this->Solar_water_heater_model->delete($id);
        redirect('product/solar_water_heater');
    }


	
}
