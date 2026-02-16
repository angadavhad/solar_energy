<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Service_model');
    }

    /* ================= FRONT PAGE ================= */

    public function index(){

        $services = $this->Service_model->get_services();

        foreach($services as $s){
            $s->detail = $this->Service_model->get_detail($s->id);
        }

        $data['services'] = $services;

        $this->load->view('user/navbar');
        $this->load->view('user/services_page', $data);
        $this->load->view('user/footer');
    }

    /* ================= ADMIN CARD ================= */

    public function service_card(){

        $data['services'] = $this->Service_model->get_services();

        $this->load->view('admin/navbar');
        $this->load->view('admin/service/service_card', $data);
        $this->load->view('admin/footer');
    }

    public function update_card($id){

        if($this->input->post()){

            $data = [
                'title'      => $this->input->post('title', TRUE),
                'short_desc' => $this->input->post('short_desc', TRUE)
            ];

            if(!empty($_FILES['image']['name'])){

                $config['upload_path']   = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|webp';
                $config['encrypt_name']  = TRUE;

                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')){
                    $upload = $this->upload->data();
                    $data['image'] = $upload['file_name'];
                }
            }

            $this->Service_model->update_service($id,$data);
            redirect('service/service_card');
        }
    }

    public function delete_card($id){
        $this->Service_model->delete_service($id);
        redirect('service/service_card');
    }

    /* ================= ADMIN DETAILS ================= */

    public function service_details(){

        $services = $this->Service_model->get_services();

        foreach($services as $s){
            $s->detail = $this->Service_model->get_detail($s->id);
        }

        $data['services'] = $services;

        $this->load->view('admin/navbar');
        $this->load->view('admin/service/service_details', $data);
        $this->load->view('admin/footer');
    }

    public function update_detail($service_id){

        if($this->input->post()){

            $data = [
                'long_desc' => $this->input->post('long_desc', TRUE),
                'point1'    => $this->input->post('point1', TRUE),
                'point2'    => $this->input->post('point2', TRUE),
                'point3'    => $this->input->post('point3', TRUE)
            ];

            if(!empty($_FILES['detail_image']['name'])){

                $config['upload_path']   = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|webp';
                $config['encrypt_name']  = TRUE;

                $this->load->library('upload', $config);

                if($this->upload->do_upload('detail_image')){
                    $upload = $this->upload->data();
                    $data['detail_image'] = $upload['file_name'];
                }
            }

            $this->Service_model->save_detail($service_id,$data);
            redirect('service/service_details');
        }
    }

    public function delete_detail($service_id){
        $this->Service_model->delete_detail($service_id);
        redirect('service/service_details');
    }
}
