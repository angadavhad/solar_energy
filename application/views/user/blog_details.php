<section class="blog-details-section mt-5">
  <div class="container">

    <!-- BLOG IMAGE -->
    <div class="text-center mb-4">
      <img src="<?= base_url('uploads/blogs/'.$blog->image); ?>"
           class="img-fluid rounded"
           style="max-width: 800px;">
    </div>

    <!-- BLOG TITLE -->
    <h2 class="fw-bold">
        <?= $blog->title; ?>
    </h2>

    <!-- BLOG DATE -->
    <p class="text-muted mb-4">
        📅 <?= date('d F, Y', strtotime($blog->created_at)); ?>
    </p>

    <!-- BLOG CONTENT -->
    <div class="blog-content">
        <?= nl2br($blog->description); ?>
    </div>

    <!-- BACK BUTTON -->
    <a href="<?= base_url('user/blogs'); ?>" 
       class="btn mt-4"
       style="background:#ff6600;color:white;">
       ← Back to Blogs
    </a>

  </div>
</section>


<style>
    .blog-content {
    font-size: 16px;
    line-height: 1.8;
}

</style>