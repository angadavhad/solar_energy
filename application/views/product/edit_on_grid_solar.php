<div class="container mt-4">

    <h3 class="mb-4 text-center fw-bold">
        Edit On Grid Solar
    </h3>

    <form action="<?= base_url('product/update_on_grid_solar') ?>" 
          method="post" enctype="multipart/form-data"
          class="border p-4 rounded shadow-sm">

        <input type="hidden" name="id" value="<?= $solar->id ?>">

        <div class="mb-3">
            <label>Title</label>
            <input type="text"
                   name="title"
                   value="<?= $solar->title ?>"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description"
                      class="form-control"
                      rows="4"
                      required><?= $solar->description ?></textarea>
        </div>

        <div class="mb-3">
            <label>Current Image</label><br>
            <img src="<?= base_url('uploads/'.$solar->image1) ?>"
                 width="120"
                 class="rounded shadow-sm mb-2">
        </div>

        <div class="mb-3">
            <label>Change Image (Optional)</label>
            <input type="file"
                   name="main_image"
                   class="form-control">
        </div>

        <button class="btn btn-success">
            Update
        </button>

    </form>

</div>
