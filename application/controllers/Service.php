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
        $this->load->view('admin/navbar');
        $data['services'] = $this->Service_model->get_services();
        $this->load->view('admin/service_card', $data);
    }

   public function update_service($id)
{
    $data = [
        'title' => $this->input->post('title'),
        'short_desc' => $this->input->post('short_desc')
    ];

    // Image Upload
    if(!empty($_FILES['image']['name'])){
        $config['upload_path'] = './assets/image/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if($this->upload->do_upload('image')){
            $upload_data = $this->upload->data();
            $data['image'] = $upload_data['file_name'];
        }
    }

    $this->Service_model->update_service($id, $data);
    redirect('service/service_card');
}

public function add_service()
{
    $data = [
        'type' => $this->input->post('type'),
        'title' => $this->input->post('title'),
        'short_desc' => $this->input->post('short_desc')
    ];

    if(!empty($_FILES['image']['name'])){
        $config['upload_path'] = './assets/image/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $this->load->library('upload', $config);

        if($this->upload->do_upload('image')){
            $upload_data = $this->upload->data();
            $data['image'] = $upload_data['file_name'];
        }
    }

    $this->Service_model->insert_service($data);
    redirect('service/service_card');
}

public function delete_service($id)
{
    $this->db->where('id',$id);
    $this->db->delete('services');
    redirect('service/service_card');
}


    // ================= SERVICE DETAILS =================
// ================= SERVICE DETAILS =================

public function service_details()
{
    $data['details']  = $this->Service_model->get_details();
    $data['services'] = $this->Service_model->get_services();

    $this->load->view('admin/navbar');
    $this->load->view('admin/service_details', $data);
}


// ADD DETAIL
public function add_detail()
{
    $data = [
        'service_id' => $this->input->post('service_id'),
        'long_desc'  => $this->input->post('long_desc'),
        'point1'     => $this->input->post('point1'),
        'point2'     => $this->input->post('point2'),
        'point3'     => $this->input->post('point3'),
    ];

    // IMAGE UPLOAD
    if(!empty($_FILES['detail_image']['name'])){
        $config['upload_path']   = './assets/image/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['max_size']      = 2048;

        $this->load->library('upload', $config);

        if($this->upload->do_upload('detail_image')){
            $upload_data = $this->upload->data();
            $data['detail_image'] = $upload_data['file_name'];
        }
    }

    $this->Service_model->insert_detail($data);
    redirect('service/service_details');
}

public function update_detail($id)
{
    // First get old image
    $old = $this->Service_model->get_single_detail($id);

    $data = [
        'service_id' => $this->input->post('service_id'),
        'long_desc'  => $this->input->post('long_desc'),
        'point1'     => $this->input->post('point1'),
        'point2'     => $this->input->post('point2'),
        'point3'     => $this->input->post('point3'),
    ];

    // IMAGE UPDATE
    if(!empty($_FILES['detail_image']['name']))
    {
        $config['upload_path']   = FCPATH.'assets/image/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['max_size']      = 49096;
        $config['encrypt_name']  = TRUE; // unique name

        $this->load->library('upload', $config);

        if($this->upload->do_upload('detail_image'))
        {
            $upload_data = $this->upload->data();
            $data['detail_image'] = $upload_data['file_name'];

            // DELETE OLD IMAGE
            if(!empty($old->detail_image))
            {
                $old_path = FCPATH.'assets/image/'.$old->detail_image;
                if(file_exists($old_path))
                {
                    unlink($old_path);
                }
            }
        }
        else
        {
            echo $this->upload->display_errors();
            die;
        }
    }

    $this->Service_model->update_detail($id, $data);

    redirect('service/service_details');
}


// DELETE DETAIL
public function delete_detail($id)
{
    $this->Service_model->delete_detail($id);
    redirect('service/service_details');
}
}