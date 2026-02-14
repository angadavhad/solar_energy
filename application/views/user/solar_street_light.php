<link rel="stylesheet" href="<?= base_url() ?>assets/css/solar_street_light.css">

<!-- ================= HERO SECTION ================= -->
<?php foreach($hero as $h): ?>
<section class="py-5 ssl-hero section1">
  <div class="container">
    <div class="row align-items-center">

      <!-- CONTENT -->
      <div class="col-md-6 mb-4 mb-md-0 ssl-reveal-left">
        <span class="ssl-badge"><?= $h->badge ?></span>
        <h1 class="fw-bold mt-3 mb-3"><?= $h->title ?></h1>

        <p class="text-muted">
          <?= $h->description ?>
        </p>
      </div>

      <!-- IMAGE -->
      <div class="col-md-6 text-center ssl-reveal-right">
        <?php if(!empty($h->image)): ?>
        <img src="<?= base_url('uploads/'.$h->image) ?>"
             alt="Solar Street Light System"
             class="img-fluid ssl-img">
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>
<?php endforeach; ?>


<!-- ================= IMPACT SECTION ================= -->
<?php foreach($impact as $i): ?>
<section class="py-5 ssl-impact section2">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-lg-9 text-center ssl-reveal-up">
        <h2 class="fw-bold mb-3">
          <?= $i->impact_title ?>
        </h2>

        <p class="text-muted">
          <?= $i->impact_description ?>
        </p>
      </div>

    </div>
  </div>
</section>
<?php endforeach; ?>


<!-- ================= BENEFITS SECTION ================= -->
<?php foreach($benefits as $b): ?>
<section class="py-5 ssl-benefits section1">
  <div class="container">
    <div class="row align-items-center">

      <!-- IMAGE -->
      <div class="col-md-6 mb-4 mb-md-0 ssl-reveal-left text-center">
        <?php if(!empty($b->image)): ?>
        <img src="<?= base_url('uploads/'.$b->image) ?>"
             class="img-fluid ssl-img-small"
             alt="Benefits of Solar Street Light">
        <?php endif; ?>
      </div>

      <!-- CONTENT -->
      <div class="col-md-6 ssl-reveal-right">
        <h2 class="fw-bold mb-3">Why Choose Solar Street Lights?</h2>

        <ul class="ssl-list">
          <?php if(!empty($b->benefit1)): ?><li><?= $b->benefit1 ?></li><?php endif; ?>
          <?php if(!empty($b->benefit2)): ?><li><?= $b->benefit2 ?></li><?php endif; ?>
          <?php if(!empty($b->benefit3)): ?><li><?= $b->benefit3 ?></li><?php endif; ?>
          <?php if(!empty($b->benefit4)): ?><li><?= $b->benefit4 ?></li><?php endif; ?>
          <?php if(!empty($b->benefit5)): ?><li><?= $b->benefit5 ?></li><?php endif; ?>
        </ul>
      </div>

    </div>
  </div>
</section>
<?php endforeach; ?>


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
