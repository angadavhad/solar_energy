<form action="<?= base_url('product/save_solar_water_pump') ?>" 
      method="post" enctype="multipart/form-data">

<input type="text" name="pump_title" class="form-control mb-2" placeholder="Pump Title">

<textarea name="pump_details" class="form-control mb-2"></textarea>

<label>Applications</label><br>
<?php
$apps = ['Agriculture','Farms','Gardens','Households','Commercial'];
foreach($apps as $a):
?>
  <label>
    <input type="checkbox" name="pump_applications[]" value="<?= $a ?>"> <?= $a ?>
  </label>
<?php endforeach; ?>

<input type="file" name="pump_image" class="form-control mt-3">

<button class="btn btn-warning mt-3">Save</button>
</form>
