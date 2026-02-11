<!-- PAGE SPECIFIC CSS -->
<link rel="stylesheet" href="<?= base_url('assets/css/solar_water_heater.css'); ?>">

<?php if(!empty($heaters)): ?>
<?php $i = 0; foreach($heaters as $h): $i++; ?>

<section class="py-5 <?= ($i % 2 == 0) ? 'section2' : 'section1' ?> tight-section">
  <div class="container">
    <div class="row align-items-center">

      <?php if($i % 2 != 0): ?>
      <!-- IMAGE LEFT -->
      <div class="col-md-6 text-center">
        <img src="<?= base_url('uploads/'.$h->heater_image) ?>"
             alt="<?= $h->heater_title ?>"
             class="img-fluid reveal-img">
      </div>
      <?php endif; ?>

      <!-- CONTENT -->
      <div class="col-md-6 reveal-content">
        <h2 class="fw-bold mb-3"><?= $h->heater_title ?></h2>

        <p class="text-muted mb-4">
          <?= $h->heater_details ?>
        </p>

        <h5 class="fw-bold mb-2 text-success">Available Capacity</h5>

        <ul class="list-unstyled d-flex flex-wrap gap-2">
          <?php
            $caps = explode(',', $h->heater_capacity);
            foreach ($caps as $cap):
          ?>
            <li class="capacity-box"><?= trim($cap) ?> LPD</li>
          <?php endforeach; ?>
        </ul>
      </div>

      <?php if($i % 2 == 0): ?>
      <!-- IMAGE RIGHT -->
      <div class="col-md-6 text-center">
        <img src="<?= base_url('uploads/'.$h->heater_image) ?>"
             alt="<?= $h->heater_title ?>"
             class="img-fluid reveal-img">
      </div>
      <?php endif; ?>

    </div>
  </div>
</section>

<?php endforeach; ?>


<?php else: ?>
  <div class="text-center py-5">
    <h4 class="text-danger">No Solar Water Heaters Available</h4>
  </div>
<?php endif; ?>

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
            }, 140 * i);
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
