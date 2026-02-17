<h3>Service Cards (Only Edit)</h3>

<?php foreach($services as $service): ?>

<form method="post" action="<?= base_url('admin_services/update_service/'.$service->id) ?>">
    <div style="border:1px solid #ddd; padding:20px; margin-bottom:20px;">

        <h4><?= $service->type ?></h4>

        <label>Title</label>
        <input type="text" name="title" value="<?= $service->title ?>" class="form-control">

        <label>Short Description</label>
        <textarea name="short_desc" class="form-control"><?= $service->short_desc ?></textarea>

        <br>
        <button type="submit" class="btn btn-warning">Update</button>

    </div>
</form>

<?php endforeach; ?>
