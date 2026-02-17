<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    /* ================= LOGIN ================= */

    public function login()
    {
        $this->load->view('admin/login');
    }

    public function login_process()
    {
        $email = trim($this->input->post('email'));
        $password = trim($this->input->post('password'));

        $admin = $this->db->get_where('admin_users', [
            'email' => $email
        ])->row();

        if($admin && $password === $admin->password)
{

            $this->session->set_userdata([
                'admin_id' => $admin->id,
                'admin_name' => $admin->name,
                'logged_in' => TRUE
            ]);

            redirect('admin');

        } else {
            $this->session->set_flashdata('error','Invalid Email or Password');
            redirect('admin/login');
        }
    }




    
    /* ================= DASHBOARD ================= */

    public function index()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
        }

        // Total
        $data['total_quotes'] = $this->db->count_all('quotes');

        // Today
        $this->db->where('DATE(created_at)', date('Y-m-d'));
        $data['today_quotes'] = $this->db->count_all_results('quotes');

        // New
        $this->db->where('status', 'New');
        $data['new_quotes'] = $this->db->count_all_results('quotes');

        // Approved
        $this->db->where('status', 'Approved');
        $data['approved_quotes'] = $this->db->count_all_results('quotes');

        // Rejected
        $this->db->where('status', 'Rejected');
        $data['rejected_quotes'] = $this->db->count_all_results('quotes');

        // Monthly Chart
        $this->db->select("MONTH(created_at) as month, COUNT(id) as total");
        $this->db->where("YEAR(created_at)", date('Y'));
        $this->db->group_by("MONTH(created_at)");
        $result = $this->db->get("quotes")->result();

        $months = [];
        $totals = [];

        for ($i = 1; $i <= 12; $i++) {
            $months[] = date("M", mktime(0, 0, 0, $i, 10));
            $totals[$i] = 0;
        }

        foreach ($result as $row) {
            $totals[$row->month] = (int)$row->total;
        }

        $data['months'] = json_encode($months);
        $data['totals'] = json_encode(array_values($totals));

        $this->load->view('admin/navbar');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('admin/footer');
    }

    /* ================= QUOTES ================= */

    public function quotes()
    {
        $this->load->view('admin/navbar');

        $data['quotes'] = $this->db
            ->order_by('id','DESC')
            ->get('quotes')
            ->result();

        $this->load->view('admin/quotes_list',$data);
        $this->load->view('admin/footer');
    }

    public function approve_quote($id)
    {
        $this->db->where('id',$id);
        $this->db->update('quotes',['status'=>'Approved']);
        redirect('admin/quotes');
    }

    public function reject_quote($id)
    {
        $this->db->where('id',$id);
        $this->db->update('quotes',['status'=>'Rejected']);
        redirect('admin/quotes');
    }

    public function delete_quote($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('quotes');
        redirect('admin/quotes');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
