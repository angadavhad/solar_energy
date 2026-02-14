<div class="container py-4">
  <div class="card shadow">
    <div class="card-header bg-success text-white">
      Benefits Section
    </div>
    <div class="card-body">

      <form action="<?= base_url('Product/insert_benefits') ?>" method="post" enctype="multipart/form-data">

        <div class="mb-3">
          <label>Benefits Image</label>
          <input type="file" name="image" class="form-control" required>
        </div>

        <input type="text" name="benefit1" class="form-control mb-2" placeholder="Benefit 1">
        <input type="text" name="benefit2" class="form-control mb-2" placeholder="Benefit 2">
        <input type="text" name="benefit3" class="form-control mb-2" placeholder="Benefit 3">
        <input type="text" name="benefit4" class="form-control mb-2" placeholder="Benefit 4">
        <input type="text" name="benefit5" class="form-control mb-3" placeholder="Benefit 5">

        <button class="btn btn-success">Save Benefits</button>
      </form>

      <hr>
      <h5>Benefits List</h5>
      <table class="table table-bordered table-striped">
        <thead class="table-success">
          <tr>
            <th>ID</th>
            <th>Benefit1</th>
            <th>Benefit2</th>
            <th>Benefit3</th>
            <th>Benefit4</th>
            <th>Benefit5</th>
            <th>Image</th>
            <th width="140">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($benefits as $b): ?>
          <tr>
            <td><?= $b->id ?></td>
            <td><?= $b->benefit1 ?></td>
            <td><?= $b->benefit2 ?></td>
            <td><?= $b->benefit3 ?></td>
            <td><?= $b->benefit4 ?></td>
            <td><?= $b->benefit5 ?></td>
            <td>
              <?php if(!empty($b->image)): ?>
                <img src="<?= base_url('uploads/'.$b->image) ?>" width="80">
              <?php endif; ?>
            </td>
            <td>
              <a href="<?= base_url('Product/edit_benefits/'.$b->id) ?>" class="btn btn-warning btn-sm">&#9998;</a>
              <a href="<?= base_url('Product/delete_benefits/'.$b->id) ?>" 
                 class="btn btn-danger btn-sm"
                 onclick="return confirm('Delete?')">&#10005;</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
