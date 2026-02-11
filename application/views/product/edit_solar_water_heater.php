<div class="container mt-4">
  <div class="card shadow">
    <div class="card-header text-white fw-bold" style="background:#ff7a00;">
      Edit Solar Water Heater
    </div>

    <div class="card-body">
      <form action="<?= base_url('product/update_solar_water_heater') ?>"
            method="post"
            enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $heater->id ?>">

        <div class="mb-3">
          <label class="fw-semibold">Title</label>
          <input type="text"
                 name="heater_title"
                 value="<?= $heater->heater_title ?>"
                 class="form-control"
                 required>
        </div>

        <div class="mb-3">
          <label class="fw-semibold">Details</label>
          <textarea name="heater_details"
                    class="form-control"
                    rows="4"
                    required><?= $heater->heater_details ?></textarea>
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


        <div class="mb-3">
          <label class="fw-semibold">Current Image</label><br>
          <img src="<?= base_url('uploads/'.$heater->heater_image) ?>"
               width="120" class="img-thumbnail">
        </div>

        <div class="mb-4">
          <label class="fw-semibold">Change Image (optional)</label>
          <input type="file" name="heater_image" class="form-control">
        </div>

        <div class="text-center">
          <button class="btn text-white px-5"
                  style="background:#ff7a00;">
            Update
          </button>
        </div>

      </form>
    </div>
  </div>
</div>
