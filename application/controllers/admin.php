<?php
class Admin extends CI_Controller 
{
      public  function navbar()
      {
          $this->load->view('admin/navbar');
      }
      public function footer()
      {
        $this->load->view('admin/footer');
      }
       public function index()
        {
            $this->navbar();
            $this->load->view('admin/dashboard');
            $this->footer();
        }

}





?>
