<?php
class Contact extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Contact_model');
    }

	

    // User Form Submit
    public function submit(){

    // 🔥 LOCALHOST CHECK (development only)
    if($_SERVER['SERVER_NAME'] == 'localhost'){
        $captchaSuccess = true;
    }else{
        $hcaptcha = $this->input->post('h-captcha-response');

        if(!$hcaptcha){
            $this->session->set_flashdata('error','Please verify captcha');
            redirect('user/contact');
            return;
        }

        $secret = 'YOUR_SECRET_KEY';

        $verifyResponse = file_get_contents(
            "https://hcaptcha.com/siteverify?secret=$secret&response=$hcaptcha"
        );

        $responseData = json_decode($verifyResponse);
        $captchaSuccess = $responseData->success;
    }

    if(!$captchaSuccess){
        $this->session->set_flashdata('error','Captcha verification failed!');
        redirect('user/contact');
        return;
    }

    // ✅ Insert
    $data = [
        'name'    => $this->input->post('name'),
        'phone'   => $this->input->post('phone'),
        'email'   => $this->input->post('email'),
        'message' => $this->input->post('message')
    ];

    $this->Contact_model->insert($data);
    $this->session->set_flashdata('success','Form submitted successfully!');
    redirect('user/contact');
}



    // Admin Panel Table
    public function admin(){
        $data['contacts'] = $this->Contact_model->get_all();

        $this->load->view('admin/navbar');
        $this->load->view('admin/contact_list', $data);
        $this->load->view('admin/footer');
    }

    // Delete Only
    public function delete($id){
        $this->Contact_model->delete($id);
        redirect('contact/admin');
    }
}
