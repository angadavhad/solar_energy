<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <div class="card shadow">

        <!-- Header -->
        <div style="background:#ff8c00; padding:12px;">
          <h5 style="color:#fff; margin:0;">Edit Product</h5>
        </div>

        <!-- Body -->
        <div class="card-body">

          <form action="<?= base_url('product/update_product') ?>"
                method="post"
                enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?= $product->id ?>">

            <div class="mb-3">
              <label class="form-label">Product Name</label>
              <input type="text"
                     name="product_name"
                     class="form-control"
                     value="<?= $product->product_name ?>"
                     required>
            </div>

            <div class="mb-3">
              <label class="form-label">Product Image</label>
              <input type="file"
                     name="product_image"
                     class="form-control">

              <div class="mt-2">
                <img src="<?= base_url('assets/uploads/'.$product->product_image) ?>"
                     width="100">
              </div>
            </div>

            <button type="submit"
                    class="btn"
                    style="background:#ff8c00;color:#fff;">
              Update
            </button>

          </form>

        </div>
      </div>

    </div>
  </div>
</div>
