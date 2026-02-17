<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Service_model');
    }

    // ================= SERVICE CARD =================

    public function service_card()
    {
        $data['services'] = $this->Service_model->get_services();
        $this->load->view('admin/service_card', $data);
    }

    public function update_service($id)
    {
        $data = [
            'title' => $this->input->post('title'),
            'short_desc' => $this->input->post('short_desc')
        ];

        $this->Service_model->update_service($id, $data);
        redirect('service/service_card');   // ✅ FIX
    }

    // ================= SERVICE DETAILS =================

    public function service_details()
    {
        $data['details']  = $this->Service_model->get_details();
        $data['services'] = $this->Service_model->get_services();

        $this->load->view('admin/service_details', $data);
    }

    public function add_detail()
    {
        $data = [
            'service_id' => $this->input->post('service_id'),
            'long_desc'  => $this->input->post('long_desc'),
            'point1'     => $this->input->post('point1'),
            'point2'     => $this->input->post('point2'),
            'point3'     => $this->input->post('point3'),
        ];

        $this->Service_model->insert_detail($data);
        redirect('service/service_details');   // ✅ FIX
    }

    public function update_detail($id)
    {
        $data = [
            'service_id' => $this->input->post('service_id'),
            'long_desc'  => $this->input->post('long_desc'),
            'point1'     => $this->input->post('point1'),
            'point2'     => $this->input->post('point2'),
            'point3'     => $this->input->post('point3'),
        ];

        $this->Service_model->update_detail($id, $data);
        redirect('service/service_details');   // ✅ FIX
    }

    public function delete_detail($id)
    {
        $this->Service_model->delete_detail($id);
        redirect('service/service_details');   // ✅ FIX
    }
}
