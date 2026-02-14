<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  .card-header-orange{
    background: linear-gradient(135deg,#ff7a18,#ffb347);
    color:#fff;
    font-weight:600;
    letter-spacing:1px;
  }
  .btn-orange{
    background: linear-gradient(135deg,#ff7a18,#ffb347);
    border:none;
    color:#fff;
    font-weight:600;
  }
  .btn-orange:hover{
    opacity:0.9;
    color:#fff;
  }
</style>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">

      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header card-header-orange text-center py-3">
          <h4 class="mb-0">Add Product</h4>
        </div>

        <div class="card-body p-4">

          <form method="post" enctype="multipart/form-data"
action="<?= isset($product) ? base_url('product/update/'.$product->id) : base_url('product/create') ?>">

            <!-- Title -->
            <div class="mb-3">
              <label class="form-label fw-semibold">Product Title</label>
              <input type="text" name="title"
                     value="<?= $product->title ?? '' ?>"
                     class="form-control form-control-lg rounded-3"
                     placeholder="Enter product title" required>
            </div>

            <!-- Page Slug -->
            <div class="mb-3">
              <label class="form-label fw-semibold">Page Slug</label>
              <input type="text" name="page_slug"
                     value="<?= $product->page_slug ?? '' ?>"
                     class="form-control form-control-lg rounded-3"
                     placeholder="e.g. solar_water_heater" required>
            </div>

            <!-- Section Type -->
            <div class="mb-3">
              <label class="form-label fw-semibold">Layout Type</label>
              <select name="section_type" class="form-select form-select-lg rounded-3">
                <option value="left" <?= (isset($product) && $product->section_type=='left')?'selected':'' ?>>
                  Image Left / Content Right
                </option>
                <option value="right" <?= (isset($product) && $product->section_type=='right')?'selected':'' ?>>
                  Content Left / Image Right
                </option>
              </select>
            </div>

            <!-- Image -->
            <div class="mb-4">
              <label class="form-label fw-semibold">Product Image</label>
              <input type="file" name="image" class="form-control form-control-lg rounded-3">
            </div>

            <!-- Submit -->
            <div class="d-grid">
              <button class="btn btn-orange btn-lg rounded-pill">
                <?= isset($product) ? 'Update Product' : 'Save Product' ?>
              </button>
            </div>

          </form>

        </div>
      </div>

    </div>
  </div>
</div>
