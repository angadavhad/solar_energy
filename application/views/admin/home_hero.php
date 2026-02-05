<div class="container mt-4">

  <!-- ===== FORM CARD ===== -->
  <div class="card shadow-lg mb-4">
    <div class="card-header text-white"
         style="background:#ff7a00;">
      <h5 class="mb-0">
        <?= empty($edit_banner) ? 'Add Hero Banner' : 'Edit Hero Banner' ?>
      </h5>
    </div>

    <div class="card-body">
      <form action="<?= base_url('home/save_hero_banner/'.($edit_banner['id'] ?? '')) ?>"
            method="post"
            enctype="multipart/form-data">

        <div class="mb-3">
          <label class="form-label">Title</label>
          <input type="text"
                 name="title"
                 class="form-control"
                 value="<?= $edit_banner['title'] ?? '' ?>"
                 required>
        </div>

        <div class="mb-3">
          <label class="form-label">Sub Title</label>
          <input type="text"
                 name="sub_title"
                 class="form-control"
                 value="<?= $edit_banner['sub_title'] ?? '' ?>"
                 required>
        </div>

        <div class="mb-3">
          <label class="form-label">Button Text</label>
          <input type="text"
                 name="button_text"
                 class="form-control"
                 value="<?= $edit_banner['button_text'] ?? '' ?>"
                 required>
        </div>

        <div class="mb-3">
          <label class="form-label">Background Video</label>
          <input type="file" name="video" class="form-control">
        </div>

        <?php if (!empty($edit_banner['video'])): ?>
          <video width="200" controls class="mb-3">
            <source src="<?= base_url('uploads/'.$edit_banner['video']) ?>" type="video/mp4">
          </video>
        <?php endif; ?><br>
        <!-- ORANGE BUTTON (SMALL) -->
        <button type="submit"
                class="btn btn-lg text-white px-4 text-center p-2"
                style="background:#ff7a00;">
          <?= empty($edit_banner) ? 'Save Hero Banner' : 'Update Hero Banner' ?>
        </button>

      </form>
    </div>
  </div>

  <!-- ===== LIST ===== -->
  <div class="card shadow">
    <div class="card-header bg-dark text-white">
      Hero Banner List
    </div>

    <div class="card-body p-0">
      <table class="table table-bordered mb-0">
        <thead class="table-light">
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Sub Title</th>
            <th>Button</th>
            <th>Video</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

        <?php if (!empty($banner_list)): ?>
          <?php foreach ($banner_list as $row): ?>
            <tr>
              <td><?= $row['id'] ?></td>
              <td><?= $row['title'] ?></td>
              <td><?= $row['sub_title'] ?></td>
              <td><?= $row['button_text'] ?></td>
              <td>
                <video width="120" controls>
                  <source src="<?= base_url('uploads/'.$row['video']) ?>" type="video/mp4">
                </video>
              </td>
              <td>
                <a href="<?= base_url('home/home_hero/'.$row['id']) ?>"
                   class="btn btn-sm btn-warning">Edit</a>

                <a href="<?= base_url('home/delete_hero/'.$row['id']) ?>"
                   class="btn btn-sm btn-danger"
                   onclick="return confirm('Delete?')">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="6" class="text-center">No Data Found</td>
          </tr>
        <?php endif; ?>

        </tbody>
      </table>
    </div>
  </div>

</div>
