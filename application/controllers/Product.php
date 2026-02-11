<?php
class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
		$this->load->model('Solar_water_heater_model');
		$this->load->model('Solar_water_pump_model');
        $this->load->database();
    }

	public function product()
{
    $data['product'] = $this->Product_model->get_all_products();
    $this->load->view('product/product', $data);
}

public function details($id)
{
    $data['product'] = $this->Product_model->get_product_by_id($id);
    $this->load->view('product/product_details', $data);
}


    public function index()
    {
        $data['res'] = $this->Product_model->get_all_products();
        $this->load->view('admin/navbar');
        $this->load->view('user/product', $data);
        $this->load->view('admin/footer');
    }

    public function save_product()
    {
        $config = [
            'upload_path'   => './assets/uploads/',
            'allowed_types' => 'jpg|jpeg|png|webp',
            'file_name'     => time()
        ];

        $this->load->library('upload', $config);
        $this->upload->do_upload('product_image');

        $data = [
            'product_name'  => $this->input->post('product_name'),
            'product_image' => $this->upload->data('file_name')
        ];

        $this->Product_model->save_product($data);
        redirect('product');
    }

	public function delete_product($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('product');
		redirect('product');
	}
	public function edit_product($id)
	{
		$data['product'] = $this->db->get_where('product', ['id' => $id])->row();
		$this->load->view('admin/navbar');
		$this->load->view('product/edit_product', $data);
		$this->load->view('admin/footer');
	}
	public function update_product()
	{
		$id = $this->input->post('id');

		$data = [
			'product_name'  => $this->input->post('product_name')
		];

		// Check if a new image is uploaded
		if (!empty($_FILES['product_image']['name'])) {
			$config = [
				'upload_path'   => './assets/uploads/',
				'allowed_types' => 'jpg|jpeg|png|webp',
				'file_name'     => time()
			];

			$this->load->library('upload', $config);
			$this->upload->do_upload('product_image');

			$data['product_image'] = $this->upload->data('file_name');
		}

		$this->Product_model->update_product($id, $data);
		redirect('product');
	}
	public function solar_water_heater()
	{
		$data['heaters'] = $this->Solar_water_heater_model->get_all();
		$this->load->view('admin/navbar');
		$this->load->view('product/solar_water_heater', $data);
		$this->load->view('admin/footer');
	}
	public function save_solar_water_heater()
{
    $config = [
        'upload_path'   => FCPATH.'uploads/',
        'allowed_types' => 'jpg|jpeg|png|webp',
        'file_name'     => time()
    ];

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('heater_image')) {
        // ❌ upload fail
        echo $this->upload->display_errors();
        exit;
    }

    $uploadData = $this->upload->data();

    $capacities = $this->input->post('heater_capacity');

$data = [
    'heater_title'    => $this->input->post('heater_title'),
    'heater_details'  => $this->input->post('heater_details'),
    'heater_capacity' => is_array($capacities) ? implode(',', $capacities) : '',
    'heater_image'    => $img['file_name']
];


    $this->Solar_water_heater_model->insert($data); // ✅ MODEL USE

    redirect('product/solar_water_heater');
}
public function delete_solar_water_heater($id)
{
    // get image name
    $heater = $this->Solar_water_heater_model->get_by_id($id);

    if ($heater) {
        // image delete
        $imagePath = FCPATH . 'uploads/' . $heater->heater_image;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // db delete
        $this->Solar_water_heater_model->delete($id);
    }

    redirect('product/solar_water_heater');
}
public function edit_solar_water_heater($id)
{
    $data['heater'] = $this->Solar_water_heater_model->get_by_id($id);

    $this->load->view('admin/navbar');
    $this->load->view('product/edit_solar_water_heater', $data);
    $this->load->view('admin/footer');
}
public function update_solar_water_heater()
{
    $id = $this->input->post('id');

    // 🔥 THIS IS IMPORTANT
    $capacities = $this->input->post('heater_capacity'); // array

    $data = [
        'heater_title'    => $this->input->post('heater_title'),
        'heater_details'  => $this->input->post('heater_details'),
        'heater_capacity' => is_array($capacities) ? implode(',', $capacities) : ''
    ];

    // IMAGE UPDATE (optional)
    if (!empty($_FILES['heater_image']['name'])) {

        $config = [
            'upload_path'   => FCPATH.'uploads/',
            'allowed_types' => 'jpg|jpeg|png|webp',
            'file_name'     => time()
        ];

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('heater_image')) {
            $img = $this->upload->data();
            $data['heater_image'] = $img['file_name'];
        }
    }

    $this->Solar_water_heater_model->update($id, $data);
    redirect('product/solar_water_heater');
}
	// Admin Page
public function solar_pumps()
{
    $data['pumps'] = $this->Solar_water_pump_model->get_all();

    $this->load->view('admin/navbar');
    $this->load->view('product/solar_pumps', $data);
    $this->load->view('admin/footer');
}

// Save Function
public function save_solar_water_pump()
{
   
    $config['upload_path']   = FCPATH.'uploads/';
    $config['allowed_types'] = 'jpg|jpeg|png|webp';
    $config['file_name']     = time();


    $this->load->library('upload');
    $this->upload->initialize($config);

    if(!$this->upload->do_upload('pump_image')){
        echo $this->upload->display_errors();
        die;
    }

    $img = $this->upload->data();
    $apps = $this->input->post('applications');

    $data = [
        'pump_title'       => $this->input->post('pump_title'),
        'pump_description' => $this->input->post('pump_description'),
        'applications'     => is_array($apps) ? implode(',', $apps) : '',
        'pump_image'       => $img['file_name']
    ];

    $this->Solar_water_pump_model->insert($data);

    redirect('product/solar_pumps');
}




}
?>
