<link rel="stylesheet" href="<?= base_url('assets/css/product.css'); ?>">

<!-- Section I -->
<section class="about-hero">
  <div class="slides">
    <div class="slide active" style="background-image:url('<?= base_url('assets/image/about_bg1.webp'); ?>')"></div>
    <div class="slide" style="background-image:url('<?= base_url('assets/image/about_bg2.webp'); ?>')"></div>
    <div class="slide" style="background-image:url('<?= base_url('assets/image/about_bg3.webp'); ?>')"></div>
  </div>

  <div class="overlay"></div>

  <div class="hero-content">
    <h1>Our Products</h1>
  </div>

  <!-- CURVE -->
  <div class="triangle-curve"></div>
</section>

<?php if(!empty($products)): ?>
  <?php foreach($products as $index => $p): ?>

    <?php
      $isLeft = ($p->section_type == 'left');
      $bgClass = ($index % 2 == 1) ? 'bg-light' : '';
      $marginTop = ($index >= 2) ? 'margin-top:-100px;' : '';
    ?>

    <section style="<?= $marginTop ?>" class="py-5 overflow-hidden <?= $bgClass ?>">
      <div class="container">
        <div class="row align-items-center">

          <?php if($isLeft): ?>
            <!-- Image LEFT -->
            <div class="col-md-7 text-center">
              <img src="<?= base_url('assets/image/'.$p->image) ?>"
                   class="img-fluid animate-left"
                   alt="<?= $p->title ?>">
            </div>

            <!-- Content RIGHT -->
            <div class="col-md-5 animate-right">
              <h1 class="fw-bold"><?= $p->title ?></h1>
              <button class="btn btn-warning px-4 py-2 mt-3"
                      onclick="goToProduct('<?= $p->page_slug ?>')">
                Know More
              </button>
            </div>

          <?php else: ?>
            <!-- Content LEFT -->
            <div class="col-md-5 animate-left">
              <h1 class="fw-bold"><?= $p->title ?></h1>
              <button class="btn btn-warning px-4 py-2 mt-3"
                      onclick="goToProduct('<?= $p->page_slug ?>')">
                Know More
              </button>
            </div>

            <!-- Image RIGHT -->
            <div class="col-md-7 text-center">
              <img src="<?= base_url('assets/image/'.$p->image) ?>"
                   class="img-fluid animate-right"
                   alt="<?= $p->title ?>">
            </div>
          <?php endif; ?>

        </div>
      </div>
    </section>

  <?php endforeach; ?>
<?php endif; ?>



<!-- ================= JS ================= -->
<script>
  function goToProduct(page) {
    window.location.href = page;
  }

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.3 }
  );

  document.querySelectorAll('.animate-left, .animate-right')
    .forEach(el => observer.observe(el));
</script>
