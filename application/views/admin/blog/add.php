<div class="container mt-5">
<div class="card shadow">
<div class="card-body">

<h3 class="mb-4" style="color:#ff6600;">Add New Blog</h3>

<form method="post" enctype="multipart/form-data">

<div class="mb-3">
<label class="form-label">Blog Title</label>
<input type="text" name="title" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Blog Description</label>
<textarea name="description" rows="5" class="form-control" required></textarea>
</div>

<div class="mb-3">
<label class="form-label">Blog Date</label>
<input type="date" name="created_at" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Upload Image</label>
<input type="file" name="image" class="form-control" required>
</div>

<button type="submit" class="btn w-100" style="background:#ff6600;color:white;">
Save Blog
</button>

</form>
</div>
</div>
</div>
