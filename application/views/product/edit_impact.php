<div class="container py-4">
  <div class="card shadow">
    <div class="card-header bg-warning">
      Edit Impact Section
    </div>
    <div class="card-body">

      <form action="<?= base_url('Product/update_impact') ?>" method="post">

        <input type="hidden" name="id" value="<?= $impact->id ?>">

        <div class="mb-3">
          <label class="form-label">Impact Title</label>
          <input type="text" name="impact_title" 
                 value="<?= $impact->impact_title ?>" 
                 class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Impact Description</label>
          <textarea name="impact_description" 
                    class="form-control" rows="4" required><?= $impact->impact_description ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Impact</button>
        <a href="<?= base_url('product/impact_section') ?>" class="btn btn-secondary">Back</a>

      </form>

    </div>
  </div>
</div>
