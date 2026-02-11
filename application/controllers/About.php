<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('My_about');
    }

    /* ================= COMMON PAGE LOADER ================= */

    private function page($view, $data = [])
    {
        $this->load->view('admin/navbar');
        $this->load->view('admin/'.$view, $data);
        $this->load->view('admin/footer');
    }

    /* ================= UPLOAD HELPER ================= */
    private function upload_files($fields)
{
    $config['upload_path']   = FCPATH.'uploads/';
    $config['allowed_types'] = 'jpg|jpeg|png'; // 🔥 ALLOWED TYPES
    $config['max_size']      = 5120; // 5MB
    $config['encrypt_name']  = TRUE;

    $this->load->library('upload');

    $uploaded = [];

    foreach ($fields as $field) {
        if (!empty($_FILES[$field]['name'])) {

            $this->upload->initialize($config);

            if (!$this->upload->do_upload($field)) {
                echo "<h3>UPLOAD ERROR</h3>";
                echo $this->upload->display_errors();
                exit;
            }

            $data = $this->upload->data();
            $uploaded[$field] = $data['file_name'];
        }
    }

    return $uploaded;
}

    /* ================= LIST PAGES ================= */

public function home_brand()
{
    $data['brand'] = $this->My_about->get_brands(); // ✅ MANY
    $this->page('home_brand', $data);
}

public function home_vision()
{
    $data['vision'] = $this->My_about->get_visions(); // ✅ ARRAY
    $this->page('home_vision', $data);
}


    public function home_team()
    {
        $data['team'] = $this->My_about->get_team();
        $this->page('home_team', $data);
    }

    public function home_verticals()
    {
        $data['verticals'] = $this->My_about->get_verticals();
        $this->page('home_verticals', $data);
    }

    /* ================= ADD ================= */

    public function add_brand()
    {
        $data = [
            'title'       => $this->input->post('title'),
            'description' => $this->input->post('description'),
        ];

        if (!empty($_FILES['image']['name'])) {
            $file = $this->upload_files(['image']);
            $data['image'] = $file['image'];
        }

        $this->My_about->insert_brand($data);
        redirect('about/home_brand');
    }

    public function add_vision()
    {
        $data = [
            'title'       => $this->input->post('title'),
            'description' => $this->input->post('description'),
        ];

        if (!empty($_FILES['image']['name'])) {
            $file = $this->upload_files(['image']);
            $data['image'] = $file['image'];
        }

        $this->My_about->insert_vision($data);
        redirect('about/home_vision');
    }

    public function add_team()
    {
        $data = [
            'name'       => $this->input->post('name'),
            'role'       => $this->input->post('role'),
            'experience' => $this->input->post('experience'),
        ];

        if (!empty($_FILES['image']['name'])) {
            $file = $this->upload_files(['image']);
            $data['image'] = $file['image'];
        }

        $this->My_about->insert_team($data);
        redirect('about/home_team');
    }

    public function add_vertical()
    {
        $data = [
            'title'       => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'color'       => $this->input->post('color'),
        ];

        $files = $this->upload_files(['image1']);
        if (!empty($files['image1'])) {
            $data['image1'] = $files['image1'];
        }

        $this->My_about->insert_vertical($data);
        redirect('about/home_verticals');
    }

    /* ================= EDIT ================= */

    public function edit($table, $id, $view)
    {
        $data['row'] = $this->My_about->get_by_id($table, $id);
        if (!$data['row']) {
            redirect('about/home_brand');
        }
        $this->page($view, $data);
    }

    /* ================= UPDATE ================= */

    public function update_brand($id)
    {
        $data = [
            'title'       => $this->input->post('title'),
            'description' => $this->input->post('description'),
        ];

        if (!empty($_FILES['image']['name'])) {
            $file = $this->upload_files(['image']);
            $data['image'] = $file['image'];
        }

        $this->My_about->update_by_id('about_brand', $id, $data);
        redirect('about/home_brand');
    }

    public function update_vision($id)
    {
        $data = [
            'title'       => $this->input->post('title'),
            'description' => $this->input->post('description'),
        ];

        if (!empty($_FILES['image']['name'])) {
            $file = $this->upload_files(['image']);
            $data['image'] = $file['image'];
        }

        $this->My_about->update_by_id('about_vision', $id, $data);
        redirect('about/home_vision');
    }
public function update_team($id)
{
    $data = [
        'name'       => $this->input->post('name'),
        'role'       => $this->input->post('role'),
        'experience' => $this->input->post('experience'),
    ];

    if (!empty($_FILES['image']['name'])) {
        $file = $this->upload_files(['image']);
        $data['image'] = $file['image'];
    }

    $this->My_about->update_by_id('team_members', $id, $data);
    redirect('about/home_team');
}


    public function update_vertical($id)
    {
        $data = [
            'title'       => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'color'       => $this->input->post('color'),
        ];

        $files = $this->upload_files(['image1']);
        if (!empty($files['image1'])) {
            $data['image1'] = $files['image1'];
        }

        $this->My_about->update_by_id('business_verticals', $id, $data);
        redirect('about/home_verticals');
    }

    /* ================= DELETE ================= */

    public function delete($table, $id, $redirect)
    {
        $this->My_about->delete_by_id($table, $id);
        redirect($redirect);
    }
}

