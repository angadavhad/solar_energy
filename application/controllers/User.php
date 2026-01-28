<?php
class User extends CI_Controller {

   public function __construct()
	{
		parent::__construct();
		$this->load->model('My_model');
	}
    public function index()
{
    $this->load->view("user/navbar");
    $this->load->view("user/index");
    $this->load->view("user/footer");
}

public function about(){
    $this->load->view("user/navbar");
    $this->load->view("user/about");
    $this->load->view("user/footer");

}
public function services(){
    $this->load->view("user/navbar");
    $this->load->view("user/services");
    $this->load->view("user/footer");

}

}
