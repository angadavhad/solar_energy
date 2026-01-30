<?php
class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('My_model');
    }

    /* ================= HOME ================= */
    public function index()
    {
        $this->load->view("user/navbar");
        $this->load->view("user/index");
        $this->load->view("user/footer");
    }

    /* ================= ABOUT ================= */
    public function about()
    {
        $this->load->view("user/navbar");
        $this->load->view("user/about");
        $this->load->view("user/footer");
    }

    /* ================= PRODUCTS ================= */
    public function product()
    {
        $this->load->view("user/navbar");
        $this->load->view("user/product");
        $this->load->view("user/footer");
    }

    public function solar_water_heater()
    {
        $this->load->view("user/navbar");
        $this->load->view("user/solar_water_heater");
        $this->load->view("user/footer");
    }

    public function solar_water_pump()
    {
        $this->load->view("user/navbar");
        $this->load->view("user/solar_water_pump");
        $this->load->view("user/footer");
    }

    public function on_grid_solar()
    {
        $this->load->view("user/navbar");
        $this->load->view("user/on_grid_solar");
        $this->load->view("user/footer");
    }

    public function solar_street_light()
    {
        $this->load->view("user/navbar");
        $this->load->view("user/solar_street_light");
        $this->load->view("user/footer");
    }

    /* ================= SERVICES ================= */
    public function services()
    {
        $this->load->view("user/navbar");
        $this->load->view("user/services");
        $this->load->view("user/footer");
    }

 
    public function commercial()
    {
        $this->load->view("user/navbar");
        $this->load->view("user/commercial");
        $this->load->view("user/footer");
    }

    public function industrial()
    {
        $this->load->view("user/navbar");
        $this->load->view("user/industrial");
        $this->load->view("user/footer");
    }
    public function residential(){
    $this->load->view("user/navbar");
    $this->load->view("user/residential");
    $this->load->view("user/footer");

}

public function blogs(){
    $this->load->view("user/navbar");
    $this->load->view("user/blogs");
    $this->load->view("user/footer");
}
public function contact(){
    $this->load->view("user/navbar");
    $this->load->view("user/contact");
    $this->load->view("user/footer");
}


public function blogs_details($id){
    // $data['blog']=$this->My_model->get_blog_details($id);
    $this->load->view("user/navbar");
    $this->load->view("user/blogs_details",$id);
    $this->load->view("user/footer");

}

}
