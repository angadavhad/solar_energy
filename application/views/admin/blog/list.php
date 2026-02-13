<h2 class="mb-4" style="color:#ff6600;">Blog List</h2>

<a href="<?= base_url('blog/add'); ?>" 
class="btn mb-3"
style="background:#ff6600;color:white;">
+ Add New Blog
</a>

<table class="table table-bordered table-striped">
<thead class="table-dark">
<tr>
<th>ID</th>
<th>Image</th>
<th>Title</th>
<th>Date</th>
<th>Description</th>
<th>Status</th>
<th width="150">Action</th>
</tr>
</thead>

<tbody>
<?php foreach($blogs as $blog): ?>
<tr>
<td><?= $blog->id; ?></td>

<td>
<?php if($blog->image): ?>
<img src="<?= base_url('uploads/blogs/'.$blog->image); ?>" width="80">
<?php endif; ?>
</td>

<td><?= $blog->title; ?></td>

<td><?= date('d M Y', strtotime($blog->created_at)); ?></td>

<td><?= substr(strip_tags($blog->description),0,80); ?>...</td>

<td>
<?php if($blog->status == 1): ?>
<span class="badge bg-success">Active</span>
<?php else: ?>
<span class="badge bg-danger">Inactive</span>
<?php endif; ?>
</td>

<td>
<a href="<?= base_url('blog/edit/'.$blog->id); ?>" class="btn btn-sm btn-primary">Edit</a>
<a href="<?= base_url('blog/delete/'.$blog->id); ?>" 
class="btn btn-sm btn-danger"
onclick="return confirm('Are you sure?')">
Delete
</a>
</td>

</tr>
<?php endforeach; ?>
</tbody>
</table>
