<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(['url','form']);
        $this->load->library('session');
    }

    public function navbar()
    {
        $this->load->view("admin/navbar");
    }

    public function footer()
    {
        $this->load->view("admin/footer");
    }

    // ================= LIST =================
    public function index()
    {
        $data['blogs'] = $this->db->order_by('id','DESC')->get('blogs')->result();

        $this->navbar();
        $this->load->view('admin/blog/list', $data);
        $this->footer();
    }

    // ================= ADD =================
    public function add()
    {
        if($this->input->post())
        {
            $upload_path = FCPATH . 'uploads/blogs/';

            if(!is_dir($upload_path)){
                mkdir($upload_path,0777,true);
            }

            $config['upload_path']   = $upload_path;
            $config['allowed_types'] = 'jpg|jpeg|png|webp';
            $config['encrypt_name']  = TRUE;
            $config['max_size']      = 2048;

            $this->load->library('upload');
            $this->upload->initialize($config);

            if($this->upload->do_upload('image'))
            {
                $image = $this->upload->data('file_name');

                $data = [
                    'title'       => $this->input->post('title'),
                    'description' => $this->input->post('description'),
                    'image'       => $image,
                    'created_at'  => $this->input->post('created_at'),
                    'status'      => 1
                ];

                $this->db->insert('blogs', $data);
                redirect('blog');
            }
            else
            {
                echo $this->upload->display_errors();
                exit;
            }
        }

        $this->navbar();
        $this->load->view('admin/blog/add');
        $this->footer();
    }

    // ================= EDIT =================
    public function edit($id)
    {
        $data['blog'] = $this->db->get_where('blogs',['id'=>$id])->row();

        if(!$data['blog']){
            show_404();
        }

        $this->navbar();
        $this->load->view('admin/blog/edit',$data);
        $this->footer();
    }

    // ================= UPDATE =================
    public function update($id)
    {
        $blog = $this->db->get_where('blogs',['id'=>$id])->row();

        $upload_path = FCPATH . 'uploads/blogs/';

        if(!is_dir($upload_path)){
            mkdir($upload_path,0777,true);
        }

        $config['upload_path']   = $upload_path;
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['encrypt_name']  = TRUE;
        $config['max_size']      = 2048;

        $this->load->library('upload');
        $this->upload->initialize($config);

        $image = $blog->image;

        if($this->upload->do_upload('image'))
        {
            if($blog->image && file_exists($upload_path.$blog->image)){
                unlink($upload_path.$blog->image);
            }

            $image = $this->upload->data('file_name');
        }

        $data = [
            'title'       => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'image'       => $image,
            'created_at'  => $this->input->post('created_at')
        ];
        

        $this->db->where('id',$id);
        $this->db->update('blogs',$data);

        redirect('blog');
    }

    // ================= DELETE =================
    public function delete($id)
    {
        $blog = $this->db->get_where('blogs',['id'=>$id])->row();

        $upload_path = FCPATH . 'uploads/blogs/';

        if($blog && $blog->image && file_exists($upload_path.$blog->image)){
            unlink($upload_path.$blog->image);
        }

        $this->db->delete('blogs',['id'=>$id]);

        redirect('blog');
    }

}
