<div class="container-fluid mt-4">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10">

      <div class="card shadow-sm border-0">

        <!-- Header -->
        <div class="card-header text-center fw-bold text-white py-3"
             style="background:#ff7a00;">
          Solar Water Heater
        </div>

        <!-- Body -->
        <div class="card-body p-4">

          <form action="<?=base_url('product/save_solar_water_heater')?>" method="post" enctype="multipart/form-data">

            <!-- Title -->
            <div class="mb-3">
              <label class="form-label fw-semibold">
                Enter Title
              </label>
              <input 
                type="text"
                name="heater_title"
                class="form-control heater_title"
                placeholder="Enter heater title"
                required>
            </div>

            <!-- Details -->
            <div class="mb-3">
              <label class="form-label fw-semibold">
                Enter Details
              </label>
              <textarea
                name="heater_details"
                class="form-control heater_details"
                rows="4"
                placeholder="Enter heater details"
                required></textarea>
            </div>

            <!-- Capacity -->
            <div class="mb-3">
              <label class="fw-semibold">Available Capacity</label><br>

<?php
$caps = [100,150,200,250,300,350,400,500,600,800,1000];
foreach ($caps as $c):
?>
  <label class="me-3">
    <input type="checkbox"
           name="heater_capacity[]"
           value="<?= $c ?>"
           <?php if(!empty($heater) && in_array($c, explode(',', $heater->heater_capacity))) echo 'checked'; ?>>
    <?= $c ?> LPD
  </label>
<?php endforeach; ?>

            </div>

            <!-- Image -->
            <div class="mb-4">
              <label class="form-label fw-semibold">
                Upload Image
              </label>
              <input type="file" name="heater_image" class="form-control" accept="image/*" required>
            </div>

            <!-- Submit -->
            <div class="text-center">
              <button
                type="submit"
                class="btn px-5 fw-semibold text-white"
                style="background:#ff7a00;">
                Save
              </button>
            </div>

          </form>

        </div>
      </div>

    </div>
  </div>
</div>


<!-- TABLE SECTION -->
<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">

      <div class="card shadow-sm border-0">

        <!-- Table Header -->
        <div class="card-header fw-bold text-white"
             style="background:#ff7a00;">
          Solar Water Heater List
        </div>

        <div class="card-body">

          <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle text-center">
              <thead class="table-light">
                <tr>
                  <th>SrNo</th>
                  <th>Title</th>
                  <th>Details</th>
                  <th>Capacity (LPD)</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
<?php if(!empty($heaters)): ?>
  <?php $i = 1; foreach($heaters as $h): ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><?= $h->heater_title ?></td>
      <td><?= $h->heater_details ?></td>
      <td>
<?php
$caps = explode(',', $h->heater_capacity);
foreach ($caps as $cap) {
    echo $cap.' LPD<br>';
}
?>
</td>


      <td>
        <img src="<?= base_url('uploads/'.$h->heater_image) ?>"
             width="70" class="img-thumbnail">
      </td>
      <td>
        <a href="<?=base_url('product/edit_solar_water_heater/'.$h->id)?>" class="btn btn-sm btn-primary">&#9998;</a>
        <a href="<?=base_url('product/delete_solar_water_heater/'.$h->id)?>" class="btn btn-sm btn-danger">&#128465;</a>
      </td>
    </tr>
  <?php endforeach; ?>
<?php else: ?>
  <tr>
    <td colspan="6" class="text-center text-danger fw-bold">
      No data found
    </td>
  </tr>
<?php endif; ?>
</tbody>

            </table>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>
