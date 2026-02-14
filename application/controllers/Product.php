<?php
class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
		$this->load->model('Solar_water_heater_model');
		$this->load->model('Solar_water_pump_model');
		$this->load->model('On_grid_solar_model');
		$this->load->model('Ssl_hero_model');
        $this->load->model('Ssl_impact_model');
        $this->load->model('Ssl_benefits_model');
        $this->load->database();
    }

	// 🔵 FRONTEND PAGE
public function index()
{
    $data['products'] = $this->Product_model->get_all();

    $this->load->view('user/navbar');
    $this->load->view('user/product', $data); // ✅ correct frontend view
    $this->load->view('user/footer');
}


// 🔴 ADMIN LIST PAGE
public function admin()
{
    $data['products'] = $this->Product_model->get_all();

    $this->load->view('admin/navbar');
    $this->load->view('admin/product_form');
    $this->load->view('admin/product_list', $data);
    $this->load->view('admin/footer');
}

public function list()
{
    $data['products'] = $this->Product_model->get_all();
    $this->load->view('admin/product_list', $data);
}



   public function create()
{
    $data = [
    'title'        => $this->input->post('title'),
    'page_slug'    => $this->input->post('page_slug'),
    'section_type' => $this->input->post('section_type'),
    'image'        => '',
	'created_at'   => date('Y-m-d H:i:s')
];


    // Image optional upload
    if(!empty($_FILES['image']['name']))
    {
        $config['upload_path']   = './assets/image/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['file_name']     = time();

        $this->load->library('upload', $config);

        if($this->upload->do_upload('image')){
            $uploadData = $this->upload->data();
            $data['image'] = $uploadData['file_name'];
        }
    }

    $this->Product_model->insert($data);
    redirect('product/admin'); // form reload
}


    public function edit($id){
        $data['product'] = $this->Product_model->get_by_id($id);
        $this->load->view('admin/product_form',$data);
    }

    public function update($id)
{
    $data = [
        'title'        => $this->input->post('title'),
        'page_slug'    => $this->input->post('page_slug'),
        'section_type' => $this->input->post('section_type')
    ];

    // 🔥 Proper Image Check
    if(!empty($_FILES['image']['name']))
    {
        $config['upload_path']   = './assets/image/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['file_name']     = time();

        $this->load->library('upload', $config);

        if($this->upload->do_upload('image')){
            $uploadData = $this->upload->data();
            $data['image'] = $uploadData['file_name'];
        } else {
            echo $this->upload->display_errors();
            die;
        }
    }

    $this->Product_model->update($id, $data);
    redirect('product/admin');
}


    public function delete($id){
        $this->Product_model->delete($id);
        redirect('product/admin');
    }
	public function view($slug)
{
    // slug nusar product page load karu shakto
    // example: solar_water_pump → view file load
    $data['slug'] = $slug;

    // optional: db madhun details gheu shakto
    $data['product'] = $this->db->where('page_slug',$slug)->get('products')->row();

    $this->load->view('product/product_details', $data);
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
    'heater_image'    => $uploadData['file_name']
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

            'allowed_types' => '.jpg|jpeg|png|webp',


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

// ================= SOLAR WATER PUMP ADMIN =================

public function solar_pumps()
{
    $data['pumps'] = $this->Solar_water_pump_model->get_all();

    $this->load->view('admin/navbar');
    $this->load->view('product/solar_pumps', $data);
    $this->load->view('admin/footer');
}

public function save_solar_water_pump()
{
    $config = [
        'upload_path'   => FCPATH.'uploads/',
        'allowed_types' => 'jpg|jpeg|png|webp',
        'file_name'     => time()
    ];

    $this->load->library('upload', $config);

    if(!$this->upload->do_upload('pump_image')){
        echo $this->upload->display_errors();
        die;
    }

    $img = $this->upload->data();
    $apps = $this->input->post('pump_applications');

    $pump_title   = isset($_POST['pump_title']) ? $_POST['pump_title'] : '';
$pump_details = isset($_POST['pump_details']) ? $_POST['pump_details'] : '';
$apps         = isset($_POST['pump_applications']) ? $_POST['pump_applications'] : [];

$data = [
    'pump_title'        => $pump_title,
    'pump_details'      => $pump_details,
    'pump_applications' => is_array($apps) ? implode(',', $apps) : '',
    'pump_image'        => $img['file_name']
];


    $this->Solar_water_pump_model->insert($data);
    redirect('product/solar_pumps');
}

public function delete_solar_water_pump($id)
{
    $pump = $this->Solar_water_pump_model->get_by_id($id);

    if($pump){
        $imgPath = FCPATH.'uploads/'.$pump->pump_image;
        if(file_exists($imgPath)){
            unlink($imgPath);
        }
        $this->Solar_water_pump_model->delete($id);
    }

    redirect('product/solar_pumps');
}

// ================= EDIT =================
public function edit_solar_water_pump($id)
{
    $data['pump'] = $this->Solar_water_pump_model->get_by_id($id);

    $this->load->view('admin/navbar');
    $this->load->view('product/edit_solar_water_pump', $data);
    $this->load->view('admin/footer');
}


// ================= UPDATE =================
public function update_solar_water_pump()
{
    $id = $this->input->post('id');

    $apps = $this->input->post('pump_applications');

    $data = [
        'pump_title'        => $this->input->post('pump_title'),
        'pump_details'      => $this->input->post('pump_details'),
        'pump_applications' => is_array($apps) ? implode(',', $apps) : ''
    ];

    // If new image uploaded
    if(!empty($_FILES['pump_image']['name'])){

        $config = [
            'upload_path'   => FCPATH.'uploads/',
            'allowed_types' => 'jpg|jpeg|png|webp',
            'file_name'     => time()
        ];

        $this->load->library('upload', $config);

        if($this->upload->do_upload('pump_image')){
            $img = $this->upload->data();
            $data['pump_image'] = $img['file_name'];
        }
    }

    $this->Solar_water_pump_model->update($id, $data);

    redirect('product/solar_pumps');
}

// ================= ADMIN PAGE =================
public function on_grid_solar_admin()
{
    $data['solar'] = $this->On_grid_solar_model->get_all();

    $this->load->view('admin/navbar');
    $this->load->view('product/on_grid_solar_admin', $data);
    $this->load->view('admin/footer');
}


// ================= SAVE =================
public function save_on_grid_solar()
{
    $config = [
        'upload_path'   => FCPATH.'uploads/',
        'allowed_types' => 'jpg|jpeg|png|webp',
        'file_name'     => time()
    ];

    $this->load->library('upload', $config);

    if(!$this->upload->do_upload('main_image')){
        echo $this->upload->display_errors();
        die;
    }

    $img = $this->upload->data('file_name');

    $data = [
        'title'       => $_POST['title'],
        'description' => $_POST['description'],
		'image1'      => $img,
        'image2'      => $img,
        'image3'      => $img

    ];

    $this->On_grid_solar_model->insert($data);

    redirect('product/on_grid_solar_admin');
}



// ================= DELETE =================
public function delete_on_grid_solar($id)
{
    $this->On_grid_solar_model->delete($id);
    redirect('product/on_grid_solar_admin');
}
public function edit_on_grid_solar($id)
{
    $data['solar'] = $this->On_grid_solar_model->get_by_id($id);

    $this->load->view('admin/navbar');
    $this->load->view('product/edit_on_grid_solar', $data);
    $this->load->view('admin/footer');
}
public function update_on_grid_solar()
{
    $id = $_POST['id'];

    $data = [
        'title'       => $_POST['title'],
        'description' => $_POST['description']
    ];

    // If new image uploaded
    if(!empty($_FILES['main_image']['name'])){

        $config = [
            'upload_path'   => FCPATH.'uploads/',
            'allowed_types' => 'jpg|jpeg|png|webp',
            'file_name'     => time()
        ];

        $this->load->library('upload', $config);

        if($this->upload->do_upload('main_image')){
            $img = $this->upload->data('file_name');

            $data['image1'] = $img;
            $data['image2'] = $img;
            $data['image3'] = $img;
            
        }
    }

    $this->On_grid_solar_model->update($id, $data);

    redirect('product/on_grid_solar_admin');
}

// ================= STREET LIGHT ADMIN =================

// HERO SECTION PAGE
public function hero_section(){
    $data['hero'] = $this->Ssl_hero_model->get_all();
    $this->load->view('admin/navbar');
    $this->load->view('Product/hero_section',$data);
    $this->load->view('admin/footer');
}

// INSERT HERO
public function insert_hero(){

    // Upload Config
    $config = [
        'upload_path'   => FCPATH.'uploads/',
        'allowed_types' => 'jpg|jpeg|png|webp',
        'file_name'     => time()
    ];

    $this->load->library('upload', $config);

    if(!$this->upload->do_upload('image')){
        echo $this->upload->display_errors();
        die;
    }

    $img = $this->upload->data('file_name');

    $data = [
        'badge' => $this->input->post('badge'),
        'title' => $this->input->post('title'),
        'description' => $this->input->post('description'),
        'image' => $img
    ];

    $this->Ssl_hero_model->insert($data);
    redirect('product/hero_section');
}


// DELETE HERO
public function delete_hero($id){
    $this->Ssl_hero_model->delete($id);
    redirect('product/hero_section');
}
// EDIT HERO
public function edit_hero($id){
    $data['hero'] = $this->Ssl_hero_model->get($id);

    $this->load->view('admin/navbar');
    $this->load->view('Product/edit_hero',$data);
    $this->load->view('admin/footer');
}

// UPDATE HERO
public function update_hero(){
    $id = $this->input->post('id');

    $data = [
        'badge' => $this->input->post('badge'),
        'title' => $this->input->post('title'),
        'description' => $this->input->post('description')
    ];

    // Image update (optional)
    if(!empty($_FILES['image']['name'])){
        $config = [
            'upload_path'   => FCPATH.'uploads/',
            'allowed_types' => 'jpg|jpeg|png|webp',
            'file_name'     => time()
        ];

        $this->load->library('upload',$config);

        if($this->upload->do_upload('image')){
            $img = $this->upload->data('file_name');
            $data['image'] = $img;
        }
    }

    $this->Ssl_hero_model->update($id,$data);
    redirect('product/hero_section');
}



// ================= IMPACT SECTION =================

public function impact_section(){
    $data['impact'] = $this->Ssl_impact_model->get_all();
    $this->load->view('admin/navbar');
    $this->load->view('Product/impact_section',$data);
    $this->load->view('admin/footer');
}

// INSERT IMPACT
public function insert_impact(){
    $data = [
        'impact_title' => $this->input->post('impact_title'),
        'impact_description' => $this->input->post('impact_description')
    ];

    $this->Ssl_impact_model->insert($data);
    redirect('product/impact_section');
}

// EDIT PAGE
public function edit_impact($id){
    $data['impact'] = $this->Ssl_impact_model->get($id);

    $this->load->view('admin/navbar');
    $this->load->view('Product/edit_impact',$data);
    $this->load->view('admin/footer');
}

// UPDATE
public function update_impact(){
    $id = $this->input->post('id');

    $data = [
        'impact_title' => $this->input->post('impact_title'),
        'impact_description' => $this->input->post('impact_description')
    ];

    $this->Ssl_impact_model->update($id,$data);
    redirect('product/impact_section');
}

// DELETE
public function delete_impact($id){
    $this->Ssl_impact_model->delete($id);
    redirect('product/impact_section');
}



// ================= BENEFITS SECTION =================

// ================= BENEFITS SECTION =================

public function benefits_section(){
    $data['benefits'] = $this->Ssl_benefits_model->get_all();
    $this->load->view('admin/navbar');
    $this->load->view('Product/benefits_section',$data);
    $this->load->view('admin/footer');
}

// INSERT BENEFITS WITH IMAGE
public function insert_benefits(){

    $config['upload_path']   = FCPATH.'uploads/';
    $config['allowed_types'] = 'jpg|jpeg|png|webp';
    $config['file_name']     = time();

    $this->load->library('upload', $config);

    // If image upload fails, show error
    if(!$this->upload->do_upload('image')){
        echo $this->upload->display_errors();
        die;
    }

    $uploadData = $this->upload->data();
    $img = $uploadData['file_name'];

    $data = [
        'benefit1' => $this->input->post('benefit1'),
        'benefit2' => $this->input->post('benefit2'),
        'benefit3' => $this->input->post('benefit3'),
        'benefit4' => $this->input->post('benefit4'),
        'benefit5' => $this->input->post('benefit5'),
        'image'    => $img
    ];

    $this->Ssl_benefits_model->insert($data);
    redirect('product/benefits_section');
}

// DELETE
public function delete_benefits($id){
    $benefit = $this->Ssl_benefits_model->get($id);

    // delete image file
    if($benefit && !empty($benefit->image)){
        $imgPath = FCPATH.'uploads/'.$benefit->image;
        if(file_exists($imgPath)){
            unlink($imgPath);
        }
    }

    $this->Ssl_benefits_model->delete($id);
    redirect('product/benefits_section');
}

// EDIT PAGE
public function edit_benefits($id){
    $data['benefits'] = $this->Ssl_benefits_model->get($id);

    $this->load->view('admin/navbar');
    $this->load->view('Product/edit_benefits',$data);
    $this->load->view('admin/footer');
}


// UPDATE WITH IMAGE CHANGE
public function update_benefits(){
    $id = $this->input->post('id');

    $data = [
        'benefit1' => $this->input->post('benefit1'),
        'benefit2' => $this->input->post('benefit2'),
        'benefit3' => $this->input->post('benefit3'),
        'benefit4' => $this->input->post('benefit4'),
        'benefit5' => $this->input->post('benefit5')
    ];

    if(!empty($_FILES['image']['name'])){
        $config['upload_path']   = FCPATH.'uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['file_name']     = time();

        $this->load->library('upload', $config);

        if($this->upload->do_upload('image')){
            $uploadData = $this->upload->data();
            $data['image'] = $uploadData['file_name'];
        }
    }

    $this->Ssl_benefits_model->update($id,$data);
    redirect('product/benefits_section');
}



}
?>
