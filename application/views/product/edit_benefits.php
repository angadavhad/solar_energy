<div class="container py-4">
  <div class="card shadow">
    <div class="card-header bg-warning">
      Edit Benefits Section
    </div>
    <div class="card-body">

      <form action="<?= base_url('Product/update_benefits') ?>" method="post" enctype="multipart/form-data">

        <!-- Hidden ID -->
        <input type="hidden" name="id" value="<?= $benefits->id ?>">

        <div class="mb-3">
          <label>Benefit 1</label>
          <input type="text" name="benefit1" value="<?= $benefits->benefit1 ?>" class="form-control">
        </div>

        <div class="mb-3">
          <label>Benefit 2</label>
          <input type="text" name="benefit2" value="<?= $benefits->benefit2 ?>" class="form-control">
        </div>

        <div class="mb-3">
          <label>Benefit 3</label>
          <input type="text" name="benefit3" value="<?= $benefits->benefit3 ?>" class="form-control">
        </div>

        <div class="mb-3">
          <label>Benefit 4</label>
          <input type="text" name="benefit4" value="<?= $benefits->benefit4 ?>" class="form-control">
        </div>

        <div class="mb-3">
          <label>Benefit 5</label>
          <input type="text" name="benefit5" value="<?= $benefits->benefit5 ?>" class="form-control">
        </div>

        <!-- Current Image -->
        <div class="mb-3">
          <label>Current Image</label><br>
          <?php if(!empty($benefits->image)): ?>
            <img src="<?= base_url('uploads/'.$benefits->image) ?>" width="120">
          <?php endif; ?>
        </div>

        <div class="mb-3">
          <label>Change Image</label>
          <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-primary">Update Benefits</button>
        <a href="<?= base_url('product/benefits_section') ?>" class="btn btn-secondary">Back</a>

      </form>

    </div>
  </div>
</div>
