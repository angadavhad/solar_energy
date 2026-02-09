<link rel="stylesheet" href="<?= base_url() ?>assets/css/solar_street_light.css">

<section class="py-5 ssl-hero section1">
  <div class="container">
    <div class="row align-items-center">

      <!-- CONTENT -->
      <div class="col-md-6 mb-4 mb-md-0 ssl-reveal-left">
        <span class="ssl-badge">SMART OUTDOOR LIGHTING</span>
        <h1 class="fw-bold mt-3 mb-3">Solar Street Light</h1>

        <p class="text-muted">
          Reliable outdoor lighting powered entirely by solar energy —
          designed for streets, highways, villages, campuses, and public areas
          without any grid dependency.
        </p>
      </div>

      <!-- IMAGE -->
      <div class="col-md-6 text-center ssl-reveal-right">
        <img src="<?= base_url()?>assets/image/streetlight1.webp"
             alt="Solar Street Light System"
             class="img-fluid ssl-img">
      </div>

    </div>
  </div>
</section>



<!-- ================= WHERE IT MAKES IMPACT ================= -->
<section class="py-5 ssl-impact section2">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-lg-9 text-center ssl-reveal-up">
        <h2 class="fw-bold mb-3">
          Lighting That Works Anywhere, Anytime
        </h2>

        <p class="text-muted">
          Solar Street Lights operate independently using built-in panels,
          batteries, and smart controllers. They charge during the day and
          automatically illuminate at night — perfect for areas where power
          supply is unreliable or unavailable.
        </p>
      </div>

    </div>
  </div>
</section>


<!-- ================= BENEFITS ================= -->
<section class="py-5 ssl-benefits section1">
  <div class="container">
    <div class="row align-items-center">

      <!-- IMAGE -->
      <div class="col-md-6 mb-4 mb-md-0 ssl-reveal-left text-center">
        <img src="<?= base_url()?>assets/image/streetlight3.webp"
             class="img-fluid ssl-img-small"
             alt="Benefits of Solar Street Light">
      </div>

      <!-- CONTENT -->
      <div class="col-md-6 ssl-reveal-right">
        <h2 class="fw-bold mb-3">Why Choose Solar Street Lights?</h2>

        <ul class="ssl-list">
          <li>No electricity bills</li>
          <li>Easy installation & low maintenance</li>
          <li>Eco-friendly renewable solution</li>
          <li>Automatic dusk-to-dawn operation</li>
          <li>Ideal for remote & rural locations</li>
        </ul>
      </div>

    </div>
  </div>
</section>


<script>
const sslObserver = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add("show");
        sslObserver.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.25 }
);

document.querySelectorAll(
  ".ssl-reveal-left, .ssl-reveal-right, .ssl-reveal-up"
).forEach(el => sslObserver.observe(el));
</script>
