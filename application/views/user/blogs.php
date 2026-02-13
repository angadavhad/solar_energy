<!-- blogs.php  -->
<section class="blog-section">

  <div class="container">

    <!-- BLOG HEADING -->
    <div class="blog-heading center mt-5">
      <h1>Solar Energy Blogs</h1>
      <p>Powering a Sustainable & Greener Future</p>
    </div>
    <div class="blog-grid">

<?php foreach($blogs as $blog): ?>

<div class="blog-card">

    <img src="<?= base_url('uploads/blogs/'.$blog->image); ?>" alt="" style="width:100%;">

    <h3><?= $blog->title; ?></h3>

    <p class="date">
        📅 <?= date('d F, Y', strtotime($blog->created_at)); ?>
    </p>

    <p class="desc">
        <?= substr(strip_tags($blog->description),0,150); ?>...
    </p>

    <a href="<?= base_url('user/blog_details/'.$blog->id); ?>" class="read-btn">
        READ MORE
    </a>

</div>

<?php endforeach; ?>

</div>

</section>
