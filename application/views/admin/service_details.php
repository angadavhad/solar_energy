<h3>Add Service Detail</h3>

<form method="post" action="<?= base_url('admin_services/add_detail') ?>">
    
    <label>Select Service</label>
    <select name="service_id" class="form-control" required>
        <?php foreach($services as $service): ?>
            <option value="<?= $service->id ?>">
                <?= $service->title ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label>Long Description</label>
    <textarea name="long_desc" class="form-control" required></textarea>

    <label>Point 1</label>
    <input type="text" name="point1" class="form-control">

    <label>Point 2</label>
    <input type="text" name="point2" class="form-control">

    <label>Point 3</label>
    <input type="text" name="point3" class="form-control">

    <br>
    <button type="submit" class="btn btn-success">Add</button>
</form>

<hr>



<h3>All Service Details</h3>

<?php foreach($details as $detail): ?>

<form method="post" action="<?= base_url('admin_services/update_detail/'.$detail->id) ?>">
    
    <div style="border:1px solid #ddd; padding:20px; margin-bottom:20px;">
        
        <strong>Service:</strong> <?= $detail->title ?><br><br>

        <label>Long Description</label>
        <textarea name="long_desc" class="form-control"><?= $detail->long_desc ?></textarea>

        <label>Point 1</label>
        <input type="text" name="point1" value="<?= $detail->point1 ?>" class="form-control">

        <label>Point 2</label>
        <input type="text" name="point2" value="<?= $detail->point2 ?>" class="form-control">

        <label>Point 3</label>
        <input type="text" name="point3" value="<?= $detail->point3 ?>" class="form-control">

        <input type="hidden" name="service_id" value="<?= $detail->service_id ?>">

        <br>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="<?= base_url('admin_services/delete_detail/'.$detail->id) ?>" 
           class="btn btn-danger"
           onclick="return confirm('Are you sure?')">Delete</a>

    </div>
</form>

<?php endforeach; ?>
