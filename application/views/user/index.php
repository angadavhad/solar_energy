<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solar Hero Video</title>

</head>
<body>

  <!-- HERO SECTION -->
  <section class="hero-section">

  <!-- Background Video -->
  <video autoplay muted loop playsinline class="hero-video">
    <source src="<?=base_url('assets/video/solar.mp4') ?>" type="video/mp4">
  </video>

  

  <!-- Overlay -->
  <div class="hero-overlay"></div>

  <!-- Content -->
  <div class="hero-content text-center">
    <h1>Power Your Future <br> With Solar Energy</h1>
    <p>Clean, Renewable & Affordable Solar Solutions</p>

    <a href="#" class="btn hero-btn">Explore More</a>
  </div>

</section>
<!-- WHAT WE DO SECTION -->
<section class="what-we-do py-5">
  <div class="container">

    <!-- Section Heading -->
    <div class="text-center mb-5">
      <h2 class="section-title">What We Do</h2>

      <p class="section-subtitle">
        Clean, Renewable & Affordable Solar Solutions
      </p>

      <p class="section-desc">
        Maha Solar provides sustainable solar power systems for homes and
        industries. We help reduce electricity costs and support energy transition
        towards a greener future.
      </p>
    </div>

    <!-- Cards Row -->
    <div class="row justify-content-center g-4">

      <!-- Card 1 -->
      <div class="col-md-5">
        <div class="service-card text-center">
          <h3>Solar Power</h3>
          <p>
            High efficiency rooftop solar panel installation with long-lasting
            clean energy solutions.
          </p>
          <a href="#" class="btn service-btn">Know More</a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-5">
        <div class="service-card text-center">
          <h3>Energy Transition</h3>
          <p>
            Helping individuals and businesses shift from traditional power to
            renewable solar energy systems.
          </p>
          <a href="#" class="btn service-btn">Know More</a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ABOUT US SECTION -->
<section class="about-section py-5">
  <div class="container">

    <div class="row align-items-center">

      <!-- LEFT SIDE IMAGE -->
      <div class="col-lg-6 mb-4">
        <div class="about-img">
          <img src="<?=base_url('assets/image/ind2.jpg')   ?>" alt="About Us">
        </div>
      </div>

      <!-- RIGHT SIDE CONTENT -->
      <div class="col-lg-6">
        <h2 class="about-title">About Us</h2>

        <p class="about-text">
          Agni Solar has 3 decades of experience as a leader and innovator in the
          solar energy space. Our varied expertise includes all major verticals
          of solar power systems and solutions. Our aim is to be a solar energy
          brand that evokes trust, confidence and reliability. We guide customers
          into taking the right decisions for all their solar energy needs.
        </p>

        <a href="#" class="btn about-btn">Learn More</a>
      </div>

    </div>

  </div>
</section>



<!-- SERVICES SECTION -->
<section class="services-section py-5">
  <div class="container">

    <!-- Section Heading -->
    <h2 class="text-center fw-bold mb-5">Services We Provide</h2>

    <div class="row align-items-center">

      <!-- LEFT SIDE : Auto Image Slider -->
      <div class="col-lg-6 mb-4">
        <div class="slider-box">
          <img id="sliderImage" src="<?=base_url('assets/image/ind1.jpg')    ?>" alt="Solar Service">

        </div>
      </div>

      <!-- RIGHT SIDE : Services List -->
      <div class="col-lg-6">
        <h3 class="service-title mb-4">
          Industrial & Commercial Solar Services
        </h3>

        <ul class="service-list">
          <li><span>Residential Solar Projects</span></li>
          <li><span>Industrial Solar Solutions</span></li>
          <li><span>Commercial Solar Installations</span></li>
        </ul>
      </div>

    </div>
  </div>
</section>




<section class="blogs-section py-5">
  <div class="container">

    <!-- Heading -->
    <h2 class="text-center fw-bold mb-5 blog-title">
      Blogs & Solar Articles
    </h2>

    <div class="row justify-content-center g-4">

      <!-- Card 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="card blog-card shadow-lg border-0">
          <img src="<?= base_url('assets/image/ind1.jpg') ?>" class="card-img-top" alt="Blog">

          <div class="card-body text-center">
            <h5 class="card-title fw-bold">
              Save Electricity With Solar Power Systems
            </h5>

            <p class="card-text text-muted">
              Choose Maha Solar Systems
            </p>

            <a href="#" class=" blog-btn">Read Blogs</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="card blog-card shadow-lg border-0">
          <img src="<?= base_url('assets/image/ind2.jpg') ?>" class="card-img-top" alt="Blog">

          <div class="card-body text-center">
            <h5 class="card-title fw-bold">
              How Much Carbon Footprint Can Solar Save ?
            </h5>

            <p class="card-text text-muted">
              Choose Maha Solar Systems
            </p>

            <a href="#" class=" blog-btn">Read Blogs</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="card blog-card shadow-lg border-0">
          <img src="<?= base_url('assets/image/ind3.jpg') ?>" class="card-img-top" alt="Blog">

          <div class="card-body text-center">
            <h5 class="card-title fw-bold">
              10 Benefits Of Solar Cooking Your Food
            </h5>

            <p class="card-text text-muted">
              Choose Maha Solar Systems
            </p>

            <a href="#" class="blog-btn">Read Blogs</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
</body>

</html>