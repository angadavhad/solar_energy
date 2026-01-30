<footer class="ms-footer">

  <div class="footer-container footer-grid">

    <div class="footer-col">
      <h3><span>convex</span></h3>
      <p>
        Convex delivers reliable, affordable and sustainable solar energy
        solutions for residential, commercial and industrial customers.
      </p>
    </div>

    <div class="footer-col">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="<?= base_url('user/index') ?>">Home</a></li>
        <li><a href="<?= base_url('user/about') ?>">About Us</a></li>
        <li><a href="<?= base_url('user/services') ?>">Services</a></li>
        <li><a href="<?= base_url('user/product') ?>">Products</a></li>
        <li><a href="<?= base_url('user/contact') ?>">Contact</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Our Services</h4>
      <ul>
        <li><a href="<?= base_url('user/residential') ?>">Residential Solar</a></li>
        <li><a href="<?= base_url('user/commercial') ?>">Commercial Solar</a></li>
        <li><a href="<?= base_url('user/industrial') ?>">Industrial Solar</a></li>
        <li><a href="<?= base_url('user/on_grid_solar') ?>">On-Grid Solar</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Contact Info</h4>
      <p>📍 Pune, Maharashtra</p>
      <p>📞 +91 9XXXXXXXXX</p>
      <p>✉ info@convexsolar.com</p>
    </div>

  </div>

  <div class="footer-bottom">
    © <?= date('Y') ?> Convex Solar. All Rights Reserved.
  </div>

</footer>

<a href="https://wa.me/9850400900?text=Hello%20Convex%20Solar%2C%20I%20would%20like%20to%20inquire%20about%20your%20services."
   class="whatsapp-chat"
   target="_blank"
   aria-label="Chat with us">

  <span class="chat-text">Chat with us</span>

  <span class="chat-icon">
    <ion-icon name="logo-whatsapp"></ion-icon>
  </span>

</a>


<!-- Get Quote Modal -->
<div class="modal fade" id="quoteModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Get a Free Quotation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Your Name / Company *</label>
              <input type="text" class="form-control" placeholder="Enter name">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Phone No *</label>
              <input type="text" class="form-control" placeholder="Enter mobile number">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Email *</label>
              <input type="email" class="form-control" placeholder="Enter email">
            </div>

<div class="col-md-6 mb-3">
  <label class="form-label">What Are You Looking For *</label>
  <select class="form-select" >
    <option value="">Select</option>

    <!-- Services -->
    <option value="service">Residential Solar Service</option>
    <option value="service">Industrial Solar Service</option>
    <option value="service">Commercial Solar Service</option>
    <option value="service">Solar Consultation</option>
    <option value="service">Solar Maintenance & AMC</option>

    <!-- Products -->
    <option value="product">Solar Water Heater</option>
    <option value="product">Solar Cooker</option>
    <option value="product">Solar Street Lights</option>
    <option value="product">Solar Water Pump</option>
    <option value="product">Rooftop Solar System</option>
  </select>
</div>

<div class="col-md-6 mb-3">
  <label class="form-label">Quantity</label>
  <input type="number" id="qtyField" class="form-control" value="1" min="1">
  <small class="text-muted">
    Optional for solar services
  </small>
</div>

<div class="col-md-6 mb-3">
  <label class="form-label">How did you know about us?</label>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="source[]" value="Social Media">
    <label class="form-check-label">Social Media</label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="source[]" value="Google Search">
    <label class="form-check-label">Google Search</label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="source[]" value="Reference">
    <label class="form-check-label">Reference</label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="source[]" value="Newspaper">
    <label class="form-check-label">Newspaper Advertisement</label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="source[]" value="Outdoor Ads">
    <label class="form-check-label">Hoarding / Banner</label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="source[]" value="Our Executive">
    <label class="form-check-label">Our Executive</label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="source[]" value="Other">
    <label class="form-check-label">Other</label>
  </div>
</div>

            <div class="col-md-12 mb-3">
              <label class="form-label">Site Address *</label>
              <textarea class="form-control" rows="3" placeholder="Enter site address"></textarea>
            </div>

          </div>

<button type="submit" class="quote-submit-btn w-100">
  Submit Quotation
</button>

        </form>
      </div>

    </div>
  </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



