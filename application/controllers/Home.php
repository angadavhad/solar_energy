<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('My_model');
    }

    public function navbar()
    {
        $this->load->view('admin/navbar');
    }

    public function footer()
    {
        $this->load->view('admin/footer');
    }

    // FORM + LIST + EDIT
    public function home_hero($id = null)
    {
        $this->navbar();

        // edit record
        if ($id != null) {
            $res = $this->My_model->select_where('hero_banner', ['id' => $id]);
            $data['edit_banner'] = !empty($res) ? $res[0] : [];
        } else {
            $data['edit_banner'] = [];
        }

        // list
        $data['banner_list'] = $this->My_model->select_where(
            'hero_banner',
            ['status' => 1]
        );

        $this->load->view('admin/home_hero', $data);
        $this->footer();
    }

    // SAVE / UPDATE
    public function save_hero_banner($id = null)
    {
        extract($_POST);

        $data = [
            'title'       => $title,
            'sub_title'   => $sub_title,
            'button_text' => $button_text,
            'status'      => 1
        ];

        if (!empty($_FILES['video']['name'])) {
            $video_name = time().'_video.mp4';
            move_uploaded_file(
                $_FILES['video']['tmp_name'],
                FCPATH.'uploads/'.$video_name
            );
            $data['video'] = $video_name;
        }

        if ($id == null) {
            $this->My_model->insert('hero_banner', $data);
        } else {
            $this->My_model->update('hero_banner', ['id'=>$id], $data);
        }

        redirect('home/home_hero');
    }

    public function delete_hero($id)
    {
        $this->My_model->delete('hero_banner', ['id'=>$id]);
        redirect('home/home_hero');
    }
}
