<div class="container py-4">
  <div class="card shadow">
    <div class="card-header bg-warning">
      Edit Hero Section
    </div>
    <div class="card-body">

      <form action="<?= base_url('Product/update_hero') ?>" method="post" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $hero->id ?>">

        <div class="row">
          <div class="col-md-4 mb-3">
            <label>Badge</label>
            <input type="text" name="badge" value="<?= $hero->badge ?>" class="form-control">
          </div>

          <div class="col-md-4 mb-3">
            <label>Title</label>
            <input type="text" name="title" value="<?= $hero->title ?>" class="form-control">
          </div>

          <div class="col-md-4 mb-3">
            <label>New Image (optional)</label>
            <input type="file" name="image" class="form-control">
          </div>

          <div class="col-12 mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"><?= $hero->description ?></textarea>
          </div>

          <div class="col-12 mb-3">
            <label>Current Image</label><br>
            <?php if(!empty($hero->image)): ?>
              <img src="<?= base_url('uploads/'.$hero->image) ?>" width="120">
            <?php endif; ?>
          </div>
        </div>

        <button class="btn btn-primary">Update Hero</button>
        <a href="<?= base_url('product/hero_section') ?>" class="btn btn-secondary">Back</a>

      </form>

    </div>
  </div>
</div>
