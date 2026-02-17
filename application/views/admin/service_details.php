<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>
body{
    background:#f4f6f9;
}
.text-orange{
    color:#ff7a00;
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
.card-box{
    background:#fff;
    border-radius:16px;
    padding:25px;
    box-shadow:0 15px 35px rgba(0,0,0,0.08);
    transition:0.3s;
}
.card-box:hover{
    transform:translateY(-4px);
    box-shadow:0 25px 50px rgba(0,0,0,0.15);
}
.section-title{
    font-weight:700;
    border-bottom:2px solid #ff7a00;
    padding-bottom:6px;
    margin-bottom:15px;
}
.detail-image{
    width:120px;
    height:90px;
    object-fit:cover;
    border-radius:10px;
    box-shadow:0 8px 20px rgba(0,0,0,0.15);
    border:2px solid #fff;
}
.form-label{
    font-weight:600;
}
</style>

<div class="container-fluid py-4">

<h3 class="fw-bold text-orange mb-4">Manage Service Details</h3>

<!-- ================= ADD NEW DETAIL ================= -->
<div class="card-box mb-5">
    <div class="section-title">Add Service Detail</div>

    <form method="post"
          action="<?= base_url('service/add_detail') ?>"
          enctype="multipart/form-data">

        <div class="row">

            <div class="col-md-4 mb-3">
                <label class="form-label">Select Service</label>
                <select name="service_id" class="form-control" required>
                    <?php foreach($services as $service): ?>
                        <option value="<?= $service->id ?>">
                            <?= $service->title ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Detail Image</label>
                <input type="file"
                       name="detail_image"
                       class="form-control"
                       accept=".jpg,.jpeg,.png,.webp">
            </div>

            <div class="col-12 mb-3">
                <label class="form-label">Long Description</label>
                <textarea name="long_desc"
                          class="form-control"
                          rows="3"
                          required></textarea>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Point 1</label>
                <input type="text" name="point1" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Point 2</label>
                <input type="text" name="point2" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Point 3</label>
                <input type="text" name="point3" class="form-control">
            </div>

        </div>

        <button type="submit" class="btn btn-success px-4">
            Add Detail
        </button>

    </form>
</div>


<!-- ================= EXISTING DETAILS ================= -->
<h5 class="fw-bold mb-3 text-orange">Existing Service Details</h5>

<div class="row g-4">

<?php foreach($details as $detail): ?>

<div class="col-md-6">
<div class="card-box">

    <div class="section-title">
        <?= $detail->title ?>
    </div>

    <form method="post"
          action="<?= base_url('service/update_detail/'.$detail->id) ?>"
          enctype="multipart/form-data">

        <!-- IMAGE PREVIEW SAFE -->
     <div class="text-center mb-3">
<?php if(!empty($detail->detail_image)) { ?>
    <img src="<?= base_url('assets/image/'.$detail->detail_image) ?>?v=<?= time(); ?>"
         class="detail-image">
<?php } ?>
</div>


        <!-- CHANGE IMAGE -->
        <div class="mb-3">
            <label class="form-label">Change Image</label>
            <input type="file"
                   name="detail_image"
                   class="form-control"
                   accept=".jpg,.jpeg,.png,.webp">
        </div>

        <div class="mb-3">
            <label class="form-label">Long Description</label>
            <textarea name="long_desc"
                      class="form-control"
                      rows="3"><?= $detail->long_desc ?></textarea>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">Point 1</label>
                <input type="text"
                       name="point1"
                       value="<?= $detail->point1 ?>"
                       class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Point 2</label>
                <input type="text"
                       name="point2"
                       value="<?= $detail->point2 ?>"
                       class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Point 3</label>
                <input type="text"
                       name="point3"
                       value="<?= $detail->point3 ?>"
                       class="form-control">
            </div>
        </div>

        <input type="hidden" name="service_id" value="<?= $detail->service_id ?>">

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-orange">
                Update
            </button>

            <a href="<?= base_url('service/delete_detail/'.$detail->id) ?>"
               onclick="return confirm('Delete this detail?')"
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
