<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>
body{
    background:#f4f6f9;
}
.text-orange{
    color:#ff7a00;
}
.bg-orange{
    background:#ff7a00;
}
.btn-orange{
    background:#ff7a00;
    color:#fff;
    border:none;
    font-weight:600;
    border-radius:8px;
}
.btn-orange:hover{
    background:#e96f00;
    color:#fff;
}
.card-shadow{
    background:#fff;
    border-radius:16px;
    padding:25px;
    box-shadow:0 15px 35px rgba(0,0,0,0.08);
    transition:0.3s;
}
.card-shadow:hover{
    transform:translateY(-5px);
    box-shadow:0 25px 50px rgba(0,0,0,0.15);
}
.service-image{
    width:120px;
    height:90px;
    object-fit:cover;
    border-radius:10px;
    box-shadow:0 8px 20px rgba(0,0,0,0.15);
}
.form-label{
    font-weight:600;
}
.section-title{
    font-size:20px;
    font-weight:700;
    border-bottom:2px solid #ff7a00;
    padding-bottom:6px;
    margin-bottom:15px;
}
</style>

<div class="container-fluid py-4">

  <h3 class="fw-bold text-orange mb-4">
    Manage Service Cards
  </h3>

  <!-- ================= ADD NEW SERVICE ================= -->
  <div class="card-shadow mb-5">
    <div class="section-title">Add New Service</div>

    <form method="post"
          action="<?= base_url('service/add_service') ?>"
          enctype="multipart/form-data">

      <div class="row">

        <div class="col-md-4 mb-3">
          <label class="form-label">Type</label>
          <input type="text"
                 name="type"
                 class="form-control"
                 placeholder="Ex: Residential"
                 required>
        </div>

        <div class="col-md-4 mb-3">
          <label class="form-label">Title</label>
          <input type="text"
                 name="title"
                 class="form-control"
                 required>
        </div>

        <div class="col-md-4 mb-3">
          <label class="form-label">Image</label>
          <input type="file"
                 name="image"
                 class="form-control"
                 required>
        </div>

        <div class="col-12 mb-3">
          <label class="form-label">Short Description</label>
          <textarea name="short_desc"
                    class="form-control"
                    rows="3"
                    required></textarea>
        </div>

      </div>

      <button type="submit" class="btn btn-success px-4">
        Add Service
      </button>

    </form>
  </div>


  <!-- ================= EXISTING SERVICES ================= -->
  <h5 class="fw-bold mb-3 text-orange">Existing Services</h5>

  <div class="row g-4">

    <?php foreach($services as $service): ?>

    <div class="col-md-6 col-lg-4">
      <div class="card-shadow">

        <div class="section-title">
          <?= ucfirst($service->type) ?>
        </div>

        <form method="post"
              action="<?= base_url('service/update_service/'.$service->id) ?>"
              enctype="multipart/form-data">

          <div class="text-center mb-3">
            <img src="<?= base_url('assets/image/'.$service->image) ?>"
                 class="service-image">
          </div>

          <div class="mb-3">
            <label class="form-label">Change Image</label>
            <input type="file"
                   name="image"
                   class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text"
                   name="title"
                   value="<?= $service->title ?>"
                   class="form-control"
                   required>
          </div>

          <div class="mb-3">
            <label class="form-label">Short Description</label>
            <textarea name="short_desc"
                      class="form-control"
                      rows="3"
                      required><?= $service->short_desc ?></textarea>
          </div>

          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-orange">
              Update
            </button>

            <a href="<?= base_url('service/delete_service/'.$service->id) ?>"
               onclick="return confirm('Delete this service?')"
               class="btn btn-danger">
              Delete
            </a>
          </div>

        </form>

      </div>
    </div>

    <?php endforeach; ?>

  </div>

</div>
