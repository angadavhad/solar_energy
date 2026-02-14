<link rel="stylesheet" href="<?= base_url() ?>assets/css/on_grid_solar.css">

<?php if(!empty($solar)): ?>

<?php 
    // Description split logic
    $descParts = explode('.', $solar->description);
?>

<!-- ================= HERO SECTION ================= -->
<section class="py-5 bg-white on-grid-hero">
  <div class="container">
    <div class="row align-items-center">

      <!-- CONTENT -->
      <div class="col-md-6 mb-4 mb-md-0 og-reveal-left">
        <h1 class="fw-bold mb-3">
            <?= $solar->title ?>
        </h1>

        <p class="text-muted">
            <?= $solar->description ?>
        </p>
      </div>

      <!-- IMAGE -->
      <div class="col-md-6 text-center og-reveal-right">
        <img src="<?= base_url('uploads/'.$solar->image1) ?>"
             alt="<?= $solar->title ?>"
             class="img-fluid rounded">
      </div>

    </div>
  </div>
</section>

<!-- ================= WHY ON GRID SOLAR ================= -->
<section class="py-5 on-grid-info">
  <div class="container">
    <div class="row align-items-center">

      <!-- IMAGE SIDE -->
      <div class="col-md-6 mb-4 mb-md-0 og-reveal-left text-center">
        <img src="<?= base_url('uploads/'.$solar->image2) ?>"
             alt="On Grid Solar Power Flow"
             class="img-fluid ongrid-img">
      </div>

      <!-- CONTENT SIDE -->
      <div class="col-md-6 og-reveal-right">
        <span class="og-badge">SMART SOLAR SOLUTION</span>

        <h2 class="fw-bold mt-3 mb-3">
            Why Choose <?= $solar->title ?>?
        </h2>

        <p class="text-muted">
            <?= isset($descParts[0]) ? $descParts[0].'.' : '' ?>
        </p>

        <p class="text-muted">
            <?= isset($descParts[1]) ? $descParts[1].'.' : '' ?>
        </p>

      </div>

    </div>
  </div>
</section>

<?php endif; ?>

<!-- ================= POWER FLOW (STATIC AS IT IS) ================= -->
<section class="py-5 on-grid-process">
  <div class="container">
    <div class="row text-center">

      <div class="col-md-3 mb-4 og-reveal-up">
        <div class="process-card">
          <h5 class="fw-bold">Sunlight Capture</h5>
          <p>High-efficiency panels absorb solar energy</p>
        </div>
      </div>

      <div class="col-md-3 mb-4 og-reveal-up">
        <div class="process-card">
          <h5 class="fw-bold">Smart Conversion</h5>
          <p>Grid inverter converts power instantly</p>
        </div>
      </div>

      <div class="col-md-3 mb-4 og-reveal-up">
        <div class="process-card">
          <h5 class="fw-bold">Energy Sharing</h5>
          <p>Unused power flows back to the grid</p>
        </div>
      </div>

      <div class="col-md-3 mb-4 og-reveal-up">
        <div class="process-card">
          <h5 class="fw-bold">Bill Reduction</h5>
          <p>Net metering lowers monthly electricity cost</p>
        </div>
      </div>

    </div>
  </div>
</section>

<?php if(!empty($solar)): ?>

<!-- ================= BENEFITS ================= -->
<section class="py-5 bg-light on-grid-benefits">
  <div class="container">
    <div class="row align-items-center">

      <!-- IMAGE -->
      <div class="col-md-6 mb-4 mb-md-0 og-reveal-left">
        <img src="<?= base_url('uploads/'.$solar->image3) ?>"
             class="img-fluid rounded"
             alt="Benefits of On Grid Solar">
      </div>

      <!-- CONTENT -->
      <div class="col-md-6 og-reveal-right">
        <h2 class="fw-bold mb-3">
            Benefits of <?= $solar->title ?>
        </h2>

        <ul class="text-muted ps-3">
          <li>Significant reduction in electricity bills</li>
          <li>No need for batteries – low maintenance</li>
          <li>Net metering benefits</li>
          <li>Environment friendly energy solution</li>
          <li>High return on investment (ROI)</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<?php endif; ?>

<script>
const ogObserver = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
        ogObserver.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.25 }
);

document
  .querySelectorAll(".og-reveal-left, .og-reveal-right, .og-reveal-up")
  .forEach(el => ogObserver.observe(el));
</script>
