<!-- PAGE SPECIFIC CSS -->
<link rel="stylesheet" href="<?= base_url('assets/css/solar_water_heater.css'); ?>">

<!-- ================= SECTION 1 : CONVEX SOLAR ================= -->
<section class="section1 py-5">
  <div class="container">
    <div class="row align-items-center">

      <!-- IMAGE -->
      <div class="col-md-6 mb-4 mb-md-0 text-center">
        <img src="<?= base_url()?>assets/image/waterheater.webp"
             alt="Convex Solar"
             class="img-fluid reveal-img">
      </div>

      <!-- CONTENT -->
      <div class="col-md-6 reveal-content">
        <h1 class="fw-bold mb-3">Convex Solar</h1>

        <p class="text-muted mb-4">
          Our Solar Water Heater is designed to deliver excellent performance
          with long-lasting durability using advanced solar technology.
        </p>

        <h5 class="fw-bold mb-2 text-success">Available Capacity</h5>

        <ul class="list-unstyled d-flex flex-wrap gap-2">
          <li class="capacity-box">100 LPD</li>
          <li class="capacity-box">150 LPD</li>
          <li class="capacity-box">200 LPD</li>
          <li class="capacity-box">250 LPD</li>
          <li class="capacity-box">300 LPD</li>
          <li class="capacity-box">500 LPD</li>
          <li class="capacity-box">1000 LPD</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- ================= SECTION 2 : CONVEX SOLAR PLUS ================= -->
<section class="py-5 section2 tight-section">
  <div class="container">
    <div class="row align-items-center">

      <!-- CONTENT -->
      <div class="col-md-6 reveal-content">
        <h2 class="fw-bold mb-3">Convex Solar Plus</h2>

        <p class="text-muted mb-4">
          Convex Solar Plus is a premium variant designed for superior quality
          and long-term performance with robust construction.
        </p>

        <h5 class="fw-bold mb-2 text-success">Available Capacity</h5>

        <ul class="list-unstyled d-flex flex-wrap gap-2">
          <li class="capacity-box">100 LPD</li>
          <li class="capacity-box">150 LPD</li>
          <li class="capacity-box">200 LPD</li>
          <li class="capacity-box">250 LPD</li>
          <li class="capacity-box">300 LPD</li>
        </ul>
      </div>

      <!-- IMAGE -->
      <div class="col-md-6 mt-4 mt-md-0 text-center">
        <img src="<?= base_url()?>assets/image/waterheater2.webp"
             alt="Convex Solar Plus"
             class="img-fluid reveal-img">
      </div>

    </div>
  </div>
</section>

<!-- ================= SECTION 3 : CONVEX SOLAR FPC ================= -->
<section class="py-5 section1 tight-section">
  <div class="container">
    <div class="row align-items-center">

      <!-- IMAGE -->
      <div class="col-md-6 mb-4 mb-md-0 text-center">
        <img src="<?= base_url()?>assets/image/waterheater.webp"
             alt="Convex Solar FPC"
             class="img-fluid reveal-img">
      </div>

      <!-- CONTENT -->
      <div class="col-md-6 reveal-content">
        <h2 class="fw-bold mb-3">Convex Solar FPC</h2>

        <p class="text-muted mb-4">
          Convex Solar FPC uses advanced Flat Plate Collector technology,
          ensuring high efficiency and long-term durability.
        </p>

        <h5 class="fw-bold mb-2 text-success">Available Capacity</h5>

        <ul class="list-unstyled d-flex flex-wrap gap-2">
          <li class="capacity-box">100 LPD</li>
          <li class="capacity-box">200 LPD</li>
          <li class="capacity-box">300 LPD</li>
          <li class="capacity-box">500 LPD</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- ================= SCROLL ANIMATION JS ================= -->
<script>
document.addEventListener("DOMContentLoaded", function () {

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {

        entry.target.classList.add('show');

        if (entry.target.classList.contains('reveal-content')) {
          const boxes = entry.target.querySelectorAll('.capacity-box');
          boxes.forEach((box, i) => {
            setTimeout(() => {
              box.classList.add('show');
            }, 140 * i); // smoother wave
          });
        }

        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.35 });

  document.querySelectorAll('.reveal-img, .reveal-content')
    .forEach(el => observer.observe(el));

});
</script>
