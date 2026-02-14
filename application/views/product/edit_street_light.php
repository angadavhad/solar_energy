<div class="container mt-4">

<h4 class="fw-bold mb-3">Edit Street Light</h4>

<form action="<?= base_url('product/update_street_light') ?>"
      method="post"
      enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?= $street->id ?>">

    <div class="mb-3">
        <label>Title</label>
        <input type="text"
               name="title"
               value="<?= $street->title ?>"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description"
                  class="form-control"
                  rows="4"
                  required><?= $street->description ?></textarea>
    </div>

    <div class="mb-3">
        <label>Current Image</label><br>
        <img src="<?= base_url('uploads/'.$street->image) ?>"
             width="100"
             class="mb-2">
        <input type="file" name="image" class="form-control">
    </div>

    <button class="btn btn-success">Update</button>
</form>

</div>
