<link rel="stylesheet" href="<?= base_url('assets/css/solar_water_pump.css'); ?>">

<section class="py-5 solar-pump-overview section1">

  <div class="container">
    <div class="row align-items-center">

      <!-- IMAGE SIDE -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="image-break-wrapper reveal-image">

          <!-- image pieces -->
          <div class="img-piece p1"></div>
          <div class="img-piece p2"></div>
          <div class="img-piece p3"></div>
          <div class="img-piece p4"></div>

        </div>
      </div>

      <!-- CONTENT SIDE -->
      <div class="col-md-6">
        <h1 class="fw-bold mb-3">Solar Water Pumps</h1>

        <p class="text-muted">
          Solar Water Pumps use renewable solar energy to efficiently pump water
          without relying on electricity or fuel. They are ideal for agriculture,
          farms, gardens, households, and commercial applications.
        </p>

        <div class="d-flex flex-wrap gap-2 mt-3">
          <span class="app-tag">Agriculture</span>
          <span class="app-tag">Farms</span>
          <span class="app-tag">Gardens</span>
          <span class="app-tag">Households</span>
          <span class="app-tag">Commercial Use</span>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="py-5 bg-white section2">
  <div class="container">
    <div class="row align-items-center">

      <!-- CONTENT SIDE -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="fw-bold mb-3 text-uppercase">
          Let the Sun Fulfill Your Water Supply Needs!
        </h2>

        <p class="text-muted mb-3">
          In many rural and remote areas, access to a reliable water supply
          remains a major challenge. Traditional water pumping systems often
          depend on diesel fuel or unstable grid electricity, which leads to
          high operating costs, fuel shortages, and frequent power interruptions.
        </p>

        <p class="text-muted mb-3">
          Solar water pumping systems provide a sustainable and cost-effective
          solution by utilizing abundant solar energy. These systems eliminate
          fuel dependency, reduce operational expenses, and ensure uninterrupted
          water supply throughout the day.
        </p>

        <p class="text-muted">
          Solar water pumps are ideal for agriculture, irrigation, and domestic
          water usage, helping farmers and households achieve energy independence
          while supporting environmentally friendly water management.
        </p>
      </div>

      <!-- IMAGE SIDE -->
      <div class="col-md-6 text-center">
        <img src="<?= base_url()?>assets/image/subpump2.webp"
             alt="Solar Water Pump System for Agriculture and Irrigation"
             class="img-fluid rounded">
      </div>

    </div>
  </div>
</section>


<script>
const imageObserver = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
        imageObserver.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.4 }
);

document.querySelectorAll(".reveal-image")
  .forEach(el => imageObserver.observe(el));
</script>
