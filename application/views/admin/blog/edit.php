<div class="container mt-5">
<div class="card shadow">
<div class="card-body">

<h3 class="mb-4" style="color:#ff6600;">Edit Blog</h3>

<form method="post" action="<?= base_url('blog/update/'.$blog->id); ?>" enctype="multipart/form-data">

<div class="mb-3">
<label class="form-label">Blog Title</label>
<input type="text" name="title" value="<?= $blog->title; ?>" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Blog Description</label>
<textarea name="description" rows="5" class="form-control" required><?= $blog->description; ?></textarea>
</div>

<div class="mb-3">
    <label class="form-label">Blog Date</label>
    <input type="date" 
           name="created_at"
           value="<?= date('Y-m-d', strtotime($blog->created_at)); ?>"
           class="form-control" 
           required>
</div>

<div class="mb-3">
<label class="form-label">Current Image</label><br>
<img src="<?= base_url('uploads/blogs/'.$blog->image); ?>" width="150">
</div>

<div class="mb-3">
<label class="form-label">Change Image</label>
<input type="file" name="image" class="form-control">
</div>

<button type="submit" class="btn w-100" style="background:#ff6600;color:white;">
Update Blog
</button>

</form>
</div>
</div>
</div>
