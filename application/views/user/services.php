<!-- ================= HERO ================= -->
<section class="services-hero">

  <div class="hero-slide active"
       style="background-image:url('<?= base_url("assets/image/blog1.jpg") ?>')"></div>

  <div class="hero-slide"
       style="background-image:url('<?= base_url("assets/image/blog2.jpg") ?>')"></div>

  <div class="hero-slide"
       style="background-image:url('<?= base_url("assets/image/blog3.jpg") ?>')"></div>

  <div class="hero-content">
    <h1>Our Solar Services</h1>
    <p>Smart & Sustainable Solar Solutions</p>
  </div>

  <div class="hero-curve"></div>
</section>


<!-- ================= SERVICE FIT ================= -->



<!-- ================= SERVICES CARDS ================= -->
<section class="services-list">
  <div class="container">

    <div class="service-card">
      <div class="card-img">
        <img src="<?= base_url('assets/image/residential.jpg') ?>">
      </div>
      <div class="card-body">
        <h3>Residential Solar</h3>
        <p>Affordable rooftop solar solutions for homes.</p>
        <a href="<?= base_url('user/residential') ?>" class="btn-primary">View Details</a>
      </div>
    </div>

    <div class="service-card">
      <div class="card-img">
        <img src="<?= base_url('assets/image/commercial.jpg') ?>">
      </div>
      <div class="card-body">
        <h3>Commercial Solar</h3>
        <p>Customized systems for offices and institutions.</p>
        <a href="<?= base_url('user/commercial') ?>" class="btn-primary">View Details</a>
      </div>
    </div>

    <div class="service-card">
      <div class="card-img">
        <img src="<?= base_url('assets/image/industrial.jpg') ?>">
      </div>
      <div class="card-body">
        <h3>Industrial Solar</h3>
        <p>High-capacity solar solutions for industries.</p>
        <a href="<?= base_url('user/industrial') ?>" class="btn-primary">View Details</a>
      </div>
    </div>

  </div>
</section>


<!-- ================= HERO SLIDER ================= -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(".hero-slide");
  let i = 0;
  setInterval(() => {
    slides[i].classList.remove("active");
    i = (i + 1) % slides.length;
    slides[i].classList.add("active");
  }, 3500);
});
</script>
