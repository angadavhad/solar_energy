<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

  <link
  href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
  rel="stylesheet"
/>

  <title>Solar Hero Video</title>

</head>
<body>

<!-- <a href="https://wa.me/919876543210?text=Hi%2C%20I%20want%20to%20know%20about%20your%20services"
   target="_blank"
   class="whatsapp-float">
   
   <i class="fa fa-whatsapp"></i>
   <span class="whatsapp-text">Connect with us</span>
</a> -->


<!-- ✅ HERO SECTION -->
<?php if(!empty($hero_list)) { ?>
  <?php foreach($hero_list as $hero) { ?>

<section class="hero-section">

  <!-- Background Video -->
  <?php if(!empty($hero->video)) { ?>
  <video autoplay muted loop playsinline class="hero-video">
    <source src="<?= base_url('uploads/'.$hero->video) ?>" type="video/mp4">
  </video>
  <?php } ?>

  <!-- Overlay -->
  <div class="hero-overlay"></div>

  <!-- Hero Content -->
  <div class="hero-content">
    
    <h1>
      <?= $hero->title ?>
    </h1>

    <p><?= $hero->sub_title ?></p>

    <a href="#" class="main-btn">
      <?= $hero->button_text ?>
    </a>

  </div>

</section>

  <?php } ?>
<?php } ?>

<!-- ABOUT US SECTION -->
<!-- ✅ ABOUT SECTION -->
<?php if(!empty($about)) { ?>

<section class="about-section">

  <div class="about-container">

    <!-- Left Image -->
    <div class="about-image">
      <?php if(!empty($about->image)) { ?>
        <img src="<?= base_url('uploads/about/'.$about->image) ?>" alt="About Solar">
      <?php } ?>
    </div>

    <!-- Right Content -->
    <div class="about-text">

      <h2><?= $about->title ?></h2>

      <p>
        <?= $about->description_1 ?>
      </p> 
      
      <p>
        <?= $about->description_2 ?>
      </p>

      <?php if(!empty($about->button_text)) { ?>
        <a href="<?= base_url('user/about') ?>" class="main-btn">
          <?= $about->button_text ?>
        </a>
      <?php } ?>

    </div>

  </div>

</section>

<?php } ?>

<!-- STATS SECTION -->
<section class="stats-wave-section">
  <div class="stats-container">

    <div class="stat-box">
      <h2 class="counter" data-target="1.3" data-suffix="">0</h2>
      <p>Tons Of Carbon Footprint Eliminated</p>
    </div>

    <div class="stat-box">
      <h2 class="counter" data-target="400" data-suffix="+">0</h2>
      <p>Solar PV Installed</p>
    </div>

    <div class="stat-box">
      <h2 class="counter" data-target="60" data-suffix="%">0</h2>
      <p>Lower Electricity Consumption</p>
    </div>

  </div>
</section>




  <!-- ===== PRODUCTS SECTION ===== -->
<?php if(!empty($products)) { ?>

<section class="products-section">
  <h2 class="section-title text-dark"><?= $products->heading ?></h2>

  <div class="products-container">

    <div class="products-text">
      <h3><?= $products->title ?></h3>

      <p><?= $products->description ?></p>

      <?php if(!empty($products->button_text)) { ?>
        <a href="<?= base_url('user/product') ?>" class="main-btn">
          <?= $products->button_text ?>
        </a>
      <?php } ?>
    </div>

    <div class="products-image">
      <?php if(!empty($products->image)) { ?>
        <img src="<?= base_url('uploads/products/'.$products->image) ?>" alt="Solar Products">
      <?php } ?>
    </div>

  </div>
</section>

<?php } ?>




<!-- SERVICES SECTION -->
<?php if(!empty($service)) { ?>

<section class="services-section">
  <h2 class="section-title text-dark">Services</h2>

  <div class="services-container">

    <div class="services-image">
      <?php if(!empty($service->image)) { ?>
        <img src="<?= base_url($service->image) ?>" alt="Services">
      <?php } ?>
    </div>

    <div class="services-text">
      <h3><?= $service->title ?></h3>
      <p><?= $service->description ?></p>

      <?php if(!empty($service->button_text)) { ?>
        <a href="<?= base_url('user/services') ?>" class="main-btn">
          <?= $service->button_text ?>
        </a>
      <?php } ?>
    </div>

  </div>
</section>

<?php } ?>

<!-- BLOGS SECTION -->
<?php if(!empty($blogs)) { ?>

<section class="blogs-section py-5">
  <div class="container">

    <!-- Heading -->
    <h2 class="text-center fw-bold mb-5 blog-title">
      Blogs & Solar Articles
    </h2>

    <div class="row justify-content-center g-4">

      <?php foreach($blogs as $blog) { ?>

      <div class="col-lg-4 col-md-6">
        <div class="card blog-card shadow-lg border-0">

          <?php if(!empty($blog->image)) { ?>
            <img src="<?= base_url('uploads/'.$blog->image) ?>" 
                 class="card-img-top" 
                 alt="Blog">
          <?php } ?>

          <div class="card-body text-center">

            <h5 class="card-title fw-bold">
              <?= $blog->title ?>
            </h5>

            <p class="card-text text-muted">
              <?= $blog->description_one ?>
            </p>

            <a href="<?= site_url('user/blogs') ?>" class="blog-btn">
              <?= !empty($blog->button_text) ? $blog->button_text : 'Read Blogs' ?>
            </a>

          </div>
        </div>
      </div>

      <?php } ?>

    </div>
  </div>
</section>

<?php } ?>

<!-- =====  CONNECT WITH US ===== -->
<!-- ===== LEADING SECTION ===== -->
<?php if(!empty($leading)) { ?>

<section class="top-hero-banner">

  <div class="hero-banner-container">

    <!-- Left Image -->
    <div class="hero-banner-img">
      <?php if(!empty($leading->image)) { ?>
        <img src="<?= base_url('uploads/'.$leading->image) ?>" alt="Solar Banner">
      <?php } ?>
    </div>

    <!-- Center Text -->
    <div class="hero-banner-text">
      <h1>
        <?= $leading->main_heading ?>
      </h1>
      <p><?= $leading->sub_heading ?></p>
    </div>

    <!-- Right Button -->
    <div class="hero-banner-btn">
      <a href="<?= base_url('user/contact') ?>" class="connect-btn">
        <i class="fa-solid fa-phone"></i>
        <?= !empty($leading->button_text) ? $leading->button_text : 'CONNECT WITH US' ?>
      </a>
    </div>

  </div>

</section>

<?php } ?>

<!-- FAQ SECTION -->
<!-- ===== FAQ SECTION ===== -->
<?php if(!empty($faqs)) { ?>

<section class="faq-section">
  <h2 class="faq-title">Frequently Asked Questions</h2>

  <div class="faq-container">

    <?php 
      $half = ceil(count($faqs) / 2);
      $leftColumn  = array_slice($faqs, 0, $half);
      $rightColumn = array_slice($faqs, $half);
    ?>

    <!-- Left Column -->
    <div class="faq-column">
      <?php foreach($leftColumn as $faq) { ?>
        <div class="faq-item">
          <button class="faq-question">
            <?= $faq->question ?>
            <span>+</span>
          </button>
          <div class="faq-answer">
            <p><?= $faq->answer ?></p>
          </div>
        </div>
      <?php } ?>
    </div>

    <!-- Right Column -->
    <div class="faq-column">
      <?php foreach($rightColumn as $faq) { ?>
        <div class="faq-item">
          <button class="faq-question">
            <?= $faq->question ?>
            <span>+</span>
          </button>
          <div class="faq-answer">
            <p><?= $faq->answer ?></p>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>
</section>

<?php } ?>



<section class="testimonial-section">

  <h2>What Our Clients Say</h2>
  <p class="subtitle">Trusted Solar Energy Solutions Across Maharashtra</p>

  <div class="slider-wrapper">

    <button class="arrow prev">&#10094;</button>

    <div class="slider-container">
      <div class="slider" id="slider">

        <div class="testimonial-card">
          <div class="card-inner">
            <img src="https://i.pravatar.cc/160?img=11">
            <div class="stars">★★★★★</div>
            <p>“Excellent solar installation service.”</p>
            <h4>Rahul Patil</h4>
            <div class="role">Home Owner</div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="card-inner">
            <img src="https://i.pravatar.cc/160?img=12">
            <div class="stars">★★★★★</div>
            <p>“Smooth process and affordable pricing.”</p>
            <h4>Sneha Kulkarni</h4>
            <div class="role">Business Owner</div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="card-inner">
            <img src="https://i.pravatar.cc/160?img=13">
            <div class="stars">★★★★★</div>
            <p>“After-sales support is excellent.”</p>
            <h4>Amit Deshmukh</h4>
            <div class="role">Entrepreneur</div>
          </div>
        </div>

      </div>
    </div>

    <button class="arrow next">&#10095;</button>

  </div>

</section>

    <script src="<?= base_url('assets/js/index.js') ?>"></script>

		

</body>
</html>
