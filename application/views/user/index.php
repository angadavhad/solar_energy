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
<section class="hero-section">

  <!-- Background Video -->
  <video autoplay muted loop playsinline class="hero-video">
    <source src="<?= base_url('assets/video/solar.mp4') ?>" type="video/mp4">
  </video>

  <!-- Overlay -->
  <div class="hero-overlay"></div>
   <!-- Hero Content -->
  <div class="hero-content">


  <!-- Content -->
  <div class="hero-content">
    
    <h1>
      Power Your Future <br>
      With Solar Energy
    </h1>

    <p>Clean, Renewable & Affordable Solar Solutions</p>

    <a href="#" class="main-btn">Explore More</a>
  </div>

</section>

<!-- ABOUT US SECTION -->
<section class="about-section">

  <div class="about-container">

    <!-- Left Image -->
    <div class="about-image">
      <img src="<?= base_url('assets/image/blog2.webp') ?>" alt="About Solar">
    </div>

    <!-- Right Content -->
    <div class="about-text">
      <h2>About Us</h2>

      <p>
        Agni Solar has 3 decades of experience as a leader and innovator
        in the solar energy space. Our varied expertise includes all major
        verticals of solar power systems and solutions.
      </p>

      <p>
        Our aim is to be a solar energy brand that evokes trust, confidence
        and reliability. We guide customers into taking the right decisions
        for all their solar energy needs.
      </p>

      <!-- ✅ Button Added Here -->
      <a href="<?= base_url('user/about') ?>" class="main-btn">Learn More</a>


    </div>

  </div>
</section>
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
<section class="products-section">
  <h2 class="section-title text-dark">Products</h2>

  <div class="products-container">

    <!-- Left Side Text -->
    <div class="products-text">
      <h3>Our Solar Products</h3>

      <!-- ✅ Short Description (Instead of Points) -->
      <p>
        We provide advanced solar products including water heaters, pumps,
        street lights, and on-grid systems designed for homes, businesses,
        and industries.
      </p>

      <!-- ✅ Button Below Description -->
      <a href="<?= base_url('user/product') ?>" class="main-btn">View Products</a>

    </div>

    <!-- Right Side Image -->
    <div class="products-image">
      <img src="<?= base_url('assets/image/solar_street.webp') ?>" alt="Solar Products">
    </div>

  </div>
</section>




<!-- SERVICES SECTION -->
<section class="services-section">
  <h2 class="section-title text-dark">Services</h2>

  <div class="services-container">

    <!-- Left Side Image -->
    <div class="services-image">
      <img src="<?= base_url('assets/image/service.webp') ?>" alt="Services Image">
    </div>

    <!-- Right Side Content -->
    <div class="services-text">
      <h3>Industrial & <span>Commercial Services</span></h3>

      <!-- ✅ Short Description Instead of Points -->
      <p>
        We provide complete solar solutions for residential, commercial, and
        industrial needs. Our expert services ensure sustainable energy,
        lower electricity bills, and long-term reliability.
      </p>

      <!-- ✅ Button Below Description -->
      <a href="<?= base_url('user/services') ?>" class="main-btn">Explore Services</a>

    </div>

  </div>
</section>

<!-- BLOGS SECTION -->
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
          <img src="<?= base_url('assets/image/ind1.webp') ?>" class="card-img-top" alt="Blog">

          <div class="card-body text-center">
            <h5 class="card-title fw-bold">
              Save Electricity With Solar Power Systems
            </h5>

            <p class="card-text text-muted">
              Choose Maha Solar Systems
            </p>

            <a href="<?= base_url('user/blogs') ?>" class="blog-btn">Read Blogs</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="card blog-card shadow-lg border-0">
          <img src="<?= base_url('assets/image/ind2.webp') ?>" class="card-img-top" alt="Blog">

          <div class="card-body text-center">
            <h5 class="card-title fw-bold">
              How Much Carbon Footprint Can Solar Save ?
            </h5>

            <p class="card-text text-muted">
              Choose Maha Solar Systems
            </p>
<a href="<?= site_url('user/blogs') ?>" class="blog-btn">Read Blogs</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="card blog-card shadow-lg border-0">
          <img src="<?= base_url('assets/image/ind3.webp') ?>" class="card-img-top" alt="Blog">

          <div class="card-body text-center">
            <h5 class="card-title fw-bold">
              10 Benefits Of Solar Cooking Your Food
            </h5>

            <p class="card-text text-muted">
              Choose Maha Solar Systems
            </p>

      <a href="<?= site_url('user/blogs')?>" class=" blog-btn">Read Blogs</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =====  CONNECT WITH US ===== -->
<section class="top-hero-banner">

  <div class="hero-banner-container">

    <!-- Left Image -->
    <div class="hero-banner-img">
        <img src="<?= site_url('assets/image/CONNECT.webp') ?>" alt="Solar Banner">
      </div>

    <!-- Center Text -->
    <div class="hero-banner-text">
      <h1>
        India’s Leading Integrated Solar <br>
        Energy
      </h1>
      <p>Smart Solar Energy</p>
    </div>

    <!-- Right Button -->
    <div class="hero-banner-btn">
      <a href="<?=base_url('user/contact') ?>" class="connect-btn">
        <i class="fa-solid fa-phone"></i>
        CONNECT WITH US
      </a>
    </div>

  </div>

</section>

<!-- FAQ SECTION -->
<section class="faq-section">
  <h2 class="faq-title">Frequently Asked Questions</h2>

  <div class="faq-container">

    <!-- Left Column -->
    <div class="faq-column">

      <!-- 1 -->
      <div class="faq-item">
        <button class="faq-question">
          What is Solar Energy?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Solar energy is energy obtained from sunlight and converted into
            electricity or heat using solar systems.
          </p>
        </div>
      </div>

      <!-- 2 -->
      <div class="faq-item">
        <button class="faq-question">
          How long do solar panels last?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Solar panels generally last 25–30 years with proper maintenance.
          </p>
        </div>
      </div>

      <!-- 3 -->
      <div class="faq-item">
        <button class="faq-question">
          Can solar panels work on cloudy days?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Yes, solar panels still generate electricity even on cloudy days,
            though output may be lower.
          </p>
        </div>
      </div>

      <!-- 4 -->
      <div class="faq-item">
        <button class="faq-question">
          What maintenance is required for solar systems?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Solar systems require minimal maintenance like cleaning and regular
            inspection for best performance.
          </p>
        </div>
      </div>

      <!-- 5 -->
      <div class="faq-item">
        <button class="faq-question">
          Do you provide installation support?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Yes, we provide complete installation, service, and maintenance
            support for all solar projects.
          </p>
        </div>
      </div>

      <!-- 6 -->
      <div class="faq-item">
        <button class="faq-question">
          How long does solar installation take?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Installation usually takes 2–7 days depending on project size and site
            requirements.
          </p>
        </div>
      </div>

    </div>

    <!-- Right Column (Same Questions Copy) -->
    <div class="faq-column">

      <!-- 1 -->
      <div class="faq-item">
        <button class="faq-question">
          What is Solar Energy?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Solar energy is energy obtained from sunlight and converted into
            electricity or heat using solar systems.
          </p>
        </div>
      </div>

      <!-- 2 -->
      <div class="faq-item">
        <button class="faq-question">
          How long do solar panels last?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Solar panels generally last 25–30 years with proper maintenance.
          </p>
        </div>
      </div>

      <!-- 3 -->
      <div class="faq-item">
        <button class="faq-question">
          Can solar panels work on cloudy days?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Yes, solar panels still generate electricity even on cloudy days,
            though output may be lower.
          </p>
        </div>
      </div>

      <!-- 4 -->
      <div class="faq-item">
        <button class="faq-question">
          What maintenance is required for solar systems?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Solar systems require minimal maintenance like cleaning and regular
            inspection for best performance.
          </p>
        </div>
      </div>

      <!-- 5 -->
      <div class="faq-item">
        <button class="faq-question">
          Do you provide installation support?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Yes, we provide complete installation, service, and maintenance
            support for all solar projects.
          </p>
        </div>
      </div>

      <!-- 6 -->
      <div class="faq-item">
        <button class="faq-question">
          How long does solar installation take?
          <span>+</span>
        </button>
        <div class="faq-answer">
          <p>
            Installation usually takes 2–7 days depending on project size and site
            requirements.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ===== TESTIMONIALS SECTION =====   -->
<section class="testimonials-section">

  <!-- Title -->
  <div class="testimonials-heading">
    <h2>What People Are Saying</h2>
    <p>Our Happy Clients</p>
  </div>

  <!-- Testimonials Layout -->
  <div class="testimonials-container">

    <!-- ✅ Left Big Card -->
    <div class="testimonial-card big-card">

      <div class="client-img">
        <img src="<?= base_url('assets/image/People.webp') ?>" alt="Client">
      </div>

      <p>
        "Maha Solar Systems have been saving our electricity bills from 3 years
        now. We must say that our Housing society has been successful in reducing
        the maintenance costs for our residents."
      </p>

      <span class="client-name">Mr. Jagtap</span>
    </div>

    <!-- ✅ Right Side Cards -->
    <div class="right-cards">

      <!-- Card 1 -->
      <div class="testimonial-card small-card">

        <div class="client-img">
          <img src="<?= base_url('assets/image/People.webp') ?>" alt="Client">
        </div>

        <p>
          "As an environment conscious person, I try to use as much solar as possible
          so that we contribute to solving climate change..."
        </p>

        <span class="client-name">Mrs. Balchandani</span>
      </div>

      <!-- Card 2 -->
      <div class="testimonial-card small-card">

        <div class="client-img">
          <img src="<?= base_url('assets/image/People.webp') ?>" alt="Client">
        </div>

        <p>
          "Maha Solar has been very helpful in getting our carbon footprints low
          to meet the industrial sustainable energy requirements..."
        </p>

        <span class="client-name">Mr. Bhansal</span>
      </div>

    </div>

  </div>

</section>


<script src="<?= base_url('assets/js/index.js') ?>"></script>


</body>
</html>