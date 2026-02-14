<div class="container py-4">
  <div class="card shadow">
    <div class="card-header bg-dark text-white">
      Hero Section
    </div>
    <div class="card-body">

      <form action="<?= base_url('Product/insert_hero') ?>" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-4 mb-3">
            <label class="form-label">Badge</label>
            <input type="text" name="badge" class="form-control">
          </div>

          <div class="col-md-4 mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control">
          </div>

          <div class="col-md-4 mb-3">
            <label class="form-label">Hero Image</label>
            <input type="file" name="image" class="form-control">
          </div>

          <div class="col-12 mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
          </div>
        </div>

        <button class="btn btn-success">Save Hero</button>
      </form>

      <hr>
      <h5>Hero List</h5>
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Badge</th>
			<th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th width="120">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($hero as $h): ?>
          <tr>
            <td><?= $h->id ?></td>
            <td><?= $h->badge ?></td>
			 <td><?= $h->title ?></td>
            <td><?= $h->description ?></td>
			<td>
  <?php if(!empty($h->image)): ?>
    <img src="<?= base_url('uploads/'.$h->image) ?>" width="100">
  <?php endif; ?>
</td>          
		
            <td>
  <a href="<?= base_url('Product/edit_hero/'.$h->id) ?>" class="btn btn-warning btn-sm">&#9998;</a>
  <a href="<?= base_url('Product/delete_hero/'.$h->id) ?>" class="btn btn-danger btn-sm"
     onclick="return confirm('Delete?')">&#10005;</a>
</td>
          </tr>
		  
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
