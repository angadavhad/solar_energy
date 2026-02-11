<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <div class="card shadow">

        <!-- Header -->
        <div style="background:#ff8c00; padding:12px;">
          <h5 style="color:#fff; margin:0;">Add Product</h5>
        </div>

        <!-- Body -->
        <div class="card-body">

          <form action="<?= base_url('product/save_product') ?>"
                method="post"
                enctype="multipart/form-data">

            <div class="mb-3">
              <label class="form-label">Product Name</label>
              <input type="text"
                     name="product_name"
                     class="form-control"
                     required>
            </div>

            <div class="mb-3">
              <label class="form-label">Product Image</label>
              <input type="file"
                     name="product_image"
                     class="form-control"
                     required>
            </div>

            <button type="submit"
                    class="btn"
                    style="background:#ff8c00;color:#fff; text-align:center;">
              Save
            </button>

          </form>

        </div>
      </div>

    </div>
  </div>
</div>



<div class="card mt-4 shadow">
  <div class="card-body">

    <h5 class="mb-3">Product List</h5>

    <table class="table table-bordered table-striped align-middle">
      <thead class="table-light">
        <tr>
          <th style="width:160px;">Action</th>
          <th style="width:80px;">Sr No</th>
          <th>Product Name</th>
          <th style="width:120px;">Image</th>
        </tr>
      </thead>

      <tbody>
        <?php
        if (!empty($res)) {
          $i = 1;
          foreach ($res as $key) {
        ?>
            <tr>
              <td>
                <a href="<?= base_url('product/edit_product/'.$key->id) ?>"
                   class="btn btn-sm btn-primary">
                  Edit
                </a>
                <a href="<?= base_url('product/delete_product/'.$key->id) ?>"
                   class="btn btn-sm btn-danger"
                   onclick="return confirm('Are you sure?')">
                  Delete
                </a>
              </td>

              <td><?= $i++; ?></td>

              <td><?= $key->product_name; ?></td>

              <td>
                <img src="<?= base_url('assets/uploads/'.$key->product_image); ?>"
                     width="80"
                     style="border-radius:4px;">
              </td>
            </tr>
        <?php
          }
        } else {
        ?>
          <tr>
            <td colspan="4" class="text-center">
              No Products Found
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

  </div>
</div>
