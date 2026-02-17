<section class="services-section">
  <div class="container">
    <h1 class="section-title">Our Services</h1>

    <div class="services-grid">

      <?php foreach($services as $service): ?>

      <div class="service-card">
        <div class="card-img">
          <img src="<?= base_url('assets/image/'.$service->image) ?>">

          <div class="card-overlay">
            <h3><?= $service->title ?></h3>
            <p><?= $service->short_desc ?></p>

            <a href="<?= base_url('user/'.$service->type) ?>">
              Explore
            </a>
          </div>
        </div>
      </div>

      <?php endforeach; ?>

    </div>
  </div>
</section>

<!-- ================= SERVICE DETAILS SECTION ================= -->
 <section class="service-details">
  <div class="container">

    <?php $i = 0; foreach($details as $detail): $i++; ?>

    <div class="row align-items-center detail-row <?= ($i % 2 == 0) ? 'reverse' : '' ?>">

      <?php if($i % 2 != 0): ?>
      <div class="col-md-6 detail-text">
      <?php else: ?>
      <div class="col-md-6 detail-img">
          <img src="<?= base_url('assets/image/'.$detail->detail_image) ?>" class="img-fluid">
      </div>
      <div class="col-md-6 detail-text">
      <?php endif; ?>

        <h2><?= $detail->title ?></h2>
        <p><?= $detail->long_desc ?></p>

        <ul>
          <li>✔ <?= $detail->point1 ?></li>
          <li>✔ <?= $detail->point2 ?></li>
          <li>✔ <?= $detail->point3 ?></li>
        </ul>

      </div>

      <?php if($i % 2 != 0): ?>
      <div class="col-md-6 detail-img">
          <img src="<?= base_url('assets/image/'.$detail->detail_image) ?>" class="img-fluid">
      </div>
      <?php endif; ?>

    </div>

    <?php endforeach; ?>

  </div>
</section>

<script>
  const rows = document.querySelectorAll('.detail-row');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add('active');
      }
    });
  }, { threshold: 0.3 });

  rows.forEach(row => observer.observe(row));
</script>
