<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('My_model');
        $this->load->model('My_about');
        $this->load->model('Solar_water_heater_model');
        $this->load->model('Solar_water_pump_model');
		 $this->load->database();
    }

    /* ================= HOME ================= */
    public function index()
    {
        $this->load->view("user/navbar");

    $data['hero_list'] = $this->db->where('status',1)->order_by('id','DESC')->get('hero_banner')->result();
    $data['about'] = $this->db->get('about_us')->row();
    $data['products'] = $this->db->get('products_section')->row();
    $data['service'] = $this->db->limit(1)->get('home_services')->row();
    $data['blogs'] = $this->db->order_by('id','DESC')->get('blogs_home')->result();
    $data['leading']   = $this->db->get('leading_section')->row();
    $data['faqs'] = $this->db->order_by('id','DESC')->get('faqs')->result();

        $this->load->view("user/index",$data);
        $this->load->view("user/footer");
    }

    /* ================= ABOUT ================= */
    public function about()
    {
        $data['brand']     = $this->My_about->get_brand();
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
        $data['heaters'] = $this->Solar_water_heater_model->get_all();
		
        $this->load->view("user/navbar");
        $this->load->view("user/solar_water_heater", $data);
        $this->load->view("user/footer");
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
    $this->load->model('Commercial_model');

    $data['about']    = $this->Commercial_model->commercial_about();
    $data['points']   = $this->Commercial_model->commercial_points();
    $data['suitable'] = $this->Commercial_model->commercial_suitable();
    $data['benefits'] = $this->Commercial_model->commercial_benefits();

    $this->load->view("user/navbar");
    $this->load->view("user/commercial", $data);
    $this->load->view("user/footer");
}


public function industrial()
{
    $this->load->model('Industrial_model');

    $data['about']        = $this->Industrial_model->about();
    $data['points']       = $this->Industrial_model->points();
    $data['capabilities'] = $this->Industrial_model->capabilities();
    $data['why']          = $this->Industrial_model->why_choose();

    $this->load->view("user/navbar");
    $this->load->view("user/industrial", $data);
    $this->load->view("user/footer");
}



   public function residential()
{
    $this->load->model('Residential_model');

    $data['about']    = $this->Residential_model->residential_about();
    $data['points']   = $this->Residential_model->residential_points();
    $data['benefits'] = $this->Residential_model->residential_benefits();

    $this->load->view("user/navbar");
    $this->load->view("user/residential", $data);
    $this->load->view("user/footer");
}

    /* ================= BLOG ================= */

/* ================= BLOG ================= */

public function blogs()
{
    $data['blogs'] = $this->db
                            ->where('status',1)
                            ->order_by('id','DESC')
                            ->get('blogs')
                            ->result();

    $this->load->view("user/navbar");
    $this->load->view("user/blogs", $data);
    $this->load->view("user/footer");
}


public function blog_details($id)
{
    $data['blog'] = $this->db
                            ->where('id',$id)
                            ->where('status',1)
                            ->get('blogs')
                            ->row();

    if(!$data['blog']){
        show_404();
    }

    $this->load->view("user/navbar");
    $this->load->view("user/blog_details", $data);
    $this->load->view("user/footer");
}

    /* ================= CONTACT ================= */
    public function contact()
    {
        $this->load->view("user/navbar");
        $this->load->view("user/contact");
        $this->load->view("user/footer");
    }

}
