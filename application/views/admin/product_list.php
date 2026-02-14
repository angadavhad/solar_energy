<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  .card-header-orange{
    background: linear-gradient(135deg,#ff7a18,#ffb347);
    color:#fff;
    font-weight:600;
    letter-spacing:1px;
  }
  .table-img{
    width:70px;
    height:70px;
    object-fit:cover;
    border-radius:10px;
    border:2px solid #f1f1f1;
  }
  .table thead{
    background:#fff3e6;
  }
</style>

<div class="container mt-4">
  <div class="card shadow-lg border-0 rounded-4">
    
    <!-- Header -->
    <div class="card-header card-header-orange d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Product List</h5>
      <a href="<?=base_url('product/admin')?>" class="btn btn-light fw-semibold rounded-pill px-4">
        + Add Product
      </a>
    </div>

    <!-- Table -->
    <div class="card-body">
      <div class="table-responsive">
        <table class="table align-middle table-hover">
          <thead class="text-center">
            <tr>
              <th style="width:25%;">Title</th>
              <th style="width:25%;">Slug</th>
              <th style="width:25%;">Section Type</th>
              <th style="width:20%;">Image</th>
              <th style="width:30%;">Action</th>
            </tr>
          </thead>

          <tbody class="text-center">
            <?php if(!empty($products)): ?>
              <?php foreach($products as $p): ?>
              <tr>
                <td class="fw-semibold"><?= $p->title ?></td>
                <td><span class="badge bg-secondary"><?= $p->page_slug ?></span></td>
                <td><span class="badge bg-secondary"><?= $p->section_type ?></span></td>

                <td>
                  <img src="<?=base_url('assets/image/'.$p->image)?>" class="table-img">
                </td>
                <td>
                  <a href="<?=base_url('product/edit/'.$p->id)?>" 
                     class="btn btn-warning btn-sm rounded-pill px-3">
                     &#9998;
                  </a>

                  <a href="<?=base_url('product/delete/'.$p->id)?>" 
                     class="btn btn-danger btn-sm rounded-pill px-3"
                     onclick="return confirm('Are you sure to delete this product?')">
                     &#10005;
                  </a>
                </td>
              </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="4" class="text-muted py-4">No products found</td>
              </tr>
            <?php endif; ?>
          </tbody>

        </table>
      </div>
    </div>

  </div>
</div>
