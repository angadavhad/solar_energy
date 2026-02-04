<footer class="site-footer">

  <div class="footer-container">

    <!-- BRAND -->
    <div class="footer-box footer-brand">
      <h3>convex<span>solar</span></h3>
      <p>
        Convex Solar provides reliable, affordable and sustainable solar
        energy solutions for residential, commercial and industrial customers.
      </p>
    </div>

    <!-- QUICK LINKS -->
    <div class="footer-box">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="<?= base_url('user/index') ?>">Home</a></li>
        <li><a href="<?= base_url('user/about') ?>">About Us</a></li>
        <li><a href="<?= base_url('user/services') ?>">Services</a></li>
        <li><a href="<?= base_url('user/product') ?>">Products</a></li>
        <li><a href="<?= base_url('user/contact') ?>">Contact</a></li>
      </ul>
    </div>

    <!-- SERVICES -->
    <div class="footer-box">
      <h4>Our Services</h4>
      <ul>
        <li>Residential Solar</li>
        <li>Commercial Solar</li>
        <li>Industrial Solar</li>
        <li>On-Grid Solar</li>
      </ul>
    </div>

    <!-- CONTACT -->
    <div class="footer-box">
      <h4>Contact Info</h4>
      <p>Pune, Maharashtra</p>
      <p>+91 9XXXXXXXXX</p>
      <p>info@convexsolar.com</p>
    </div>

  </div>

  <!-- BOTTOM -->
  <div class="footer-bottom">
    © <?= date('Y') ?> Convex Solar. All Rights Reserved.
  </div>

</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- Get Quote Modal -->
<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="quoteModalLabel"><i class="fas fa-sun"></i> Get a Quote</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="quoteForm">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="name" class="form-label">Name *</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="email" class="form-label">Email *</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="phone" class="form-label">Phone *</label>
              <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="service" class="form-label">Service Type *</label>
              <select class="form-control" id="service" name="service" required>
                <option value="">Select Service</option>
                <option value="residential">Residential</option>
                <option value="commercial">Commercial</option>
                <option value="industrial">Industrial</option>
                <option value="solar_water_heater">Solar Water Heater</option>
                <option value="solar_water_pump">Solar Water Pump</option>
                <option value="on_grid_solar">On Grid Solar</option>
                <option value="solar_street_light">Solar Street Light</option>
              </select>
            </div>
          </div>
          <div class="mb-3">
            <label for="quantity" class="form-label">Quantity Of Product</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1">
            <small class="form-text text-muted">Optional For solar services leave blank</small>
          </div>
          <div class="mb-3">
            <label for="source" class="form-label">How Did You Come To Know About Convex Solar? *</label>
            <select class="form-control" id="source" name="source" required>
              <option value="">Select</option>
              <option value="Casual Internet Surfing">Casual Internet Surfing</option>
              <option value="Outdoor Advertisement">Outdoor Advertisement</option>
              <option value="Social Media">Social Media</option>
              <option value="Reference">Reference</option>
              <option value="Our Executive">Our Executive</option>
              <option value="Newspaper Advertisement">Newspaper Advertisement</option>
              <option value="Others">Others</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us more about your requirements..."></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Close</button>
        <button type="button" class="btn btn-primary" onclick="submitQuote()"><i class="fas fa-paper-plane"></i> Submit Quote Request</button>
      </div>
    </div>
  </div>
</div>
<!-- WhatsApp Floating Button -->
<a href="https://api.whatsapp.com/send?phone=9850400900&text=Hi%2C%20I%20want%20to%20know%20about%20your%20services"
   target="_blank"
   class="whatsapp-float">

   <i class="fa-brands fa-whatsapp"></i>
   <span class="whatsapp-text">Connect with us</span>
</a>

</body>
</html>

<script>
function submitQuote() {
  // Simple validation
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const phone = document.getElementById('phone').value;
  const service = document.getElementById('service').value;
  const source = document.getElementById('source').value;
  
  if (!name || !email || !phone || !service || !source) {
    alert('Please fill in all required fields.');
    return;
  }
  
  // For now, just show an alert. In a real app, submit to server.
  alert('Thank you for your quote request! We will contact you soon.');
  
  // Close the modal
  const modal = bootstrap.Modal.getInstance(document.getElementById('quoteModal'));
  modal.hide();
  
  // Reset form
  document.getElementById('quoteForm').reset();
}
</script>
