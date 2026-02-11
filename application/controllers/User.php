<?php
class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('My_model');
        $this->load->model('My_about');
		$this->load->model('Solar_water_heater_model');
		$this->load->model('Solar_water_pump_model');
		$this->load->database();

		$this->load->model('Solar_water_heater_model');
		$this->load->model('Solar_water_pump_model');
		$this->load->database();
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
    $data['brand']     = $this->My_about->get_brand(); // ✅ SINGLE ROW
    $data['vision']    = $this->My_about->get_vision();
    $data['team']      = $this->My_about->get_team();
    $data['verticals'] = $this->My_about->get_verticals();

    $this->load->view('user/navbar');
    $this->load->view('user/about', $data);
    $this->load->view('user/footer');
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
    $data['heaters'] = $this->Solar_water_heater_model->get_all(); // ✅ DATA FETCH

    $this->load->view("user/navbar");
    $this->load->view("user/solar_water_heater", $data); // ✅ DATA PASS
    $this->load->view("user/footer");
}

    public function solar_water_pump(){

    $data['pumps'] = $this->Solar_water_pump_model->get_all();

    $this->load->view('user/navbar');
    $this->load->view('user/solar_water_pump',$data);
    $this->load->view('user/footer');
}


    public function solar_water_pump()
    {
		$data['pumps'] = $this->Solar_water_pump_model->get_all();
        $this->load->view("user/navbar");
        $this->load->view("user/solar_water_pump", $data);
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
public function blog_details()
{
    $this->load->view("user/navbar");
    $this->load->view("user/blog_details");
    $this->load->view("user/footer");
}

public function blog_details1()
{
    $this->load->view('user/navbar');
    $this->load->view('user/blog_details1');
    $this->load->view('user/footer');
}

public function  blog_details2()
{
     $this->load->view('user/navbar');
     $this->load->view('user/blog_details2');
     $this->load->view('user/footer');
}

public function  blog_details3()
{
     $this->load->view('user/navbar');
     $this->load->view('user/blog_details3');
     $this->load->view('user/footer');
}

public function blog_details4()
{
     $this->load->view('user/navbar');
     $this->load->view('user/blog_details4');
     $this->load->view('user/footer');

}

public function blog_details5()
{
     $this->load->view('user/navbar');
     $this->load->view('user/blog_details5');
     $this->load->view('user/footer');

}




public function contact(){
    $this->load->view("user/navbar");
    $this->load->view("user/contact");
    $this->load->view("user/footer");
}  





}
