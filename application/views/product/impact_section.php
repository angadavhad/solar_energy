<div class="container py-4">
  <div class="card shadow">
    <div class="card-header bg-primary text-white">
      Impact Section
    </div>
    <div class="card-body">

      <form action="<?= base_url('Product/insert_impact') ?>" method="post">
        <div class="mb-3">
          <label>Impact Title</label>
          <input type="text" name="impact_title" class="form-control">
        </div>

        <div class="mb-3">
          <label>Description</label>
          <textarea name="impact_description" class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">Save Impact</button>
      </form>

      <hr>
      <h5>Impact List</h5>
      <table class="table table-bordered">
        <thead class="table-primary">
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Details</th>
            <th width="120">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($impact as $i): ?>
          <tr>
            <td><?= $i->id ?></td>
            <td><?= $i->impact_title ?></td>
            <td><?= $i->impact_description ?></td>
            <td>
              <a href="<?= base_url('Product/delete_impact/'.$i->id) ?>" class="btn btn-danger btn-sm">&#10005;</a>
              <a href="<?= base_url('Product/edit_impact/'.$i->id) ?>" class="btn btn-danger btn-sm">&#9998;</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
