<section class="contact-hero">

    <!-- Background Image -->
    <div class="contact-bg"
         style="background-image:url('<?= base_url('assets/image/blog1.webp') ?>')">
    </div>

    <!-- Yellow Overlay -->
    <div class="contact-overlay"></div>

    <!-- Center Text -->
    <div class="contact-hero-content">
        <h1>Contact Us</h1>
    </div>

    <!-- Bottom Curve (EXACT LIKE ABOUT US) -->
    <svg class="contact-curve" viewBox="0 0 1440 120" preserveAspectRatio="none">
        <path fill="#ffffff"
              d="M0,64 
                 C240,100 480,100 720,80 
                 960,60 1200,40 1440,60 
                 L1440,120 
                 L0,120 Z">
        </path>
    </svg>

</section>


<!-- ================= CONTACT DETAILS ================= -->
<section class="contact-section">
    <div class="contact-container">

        <!-- LEFT -->
        <div class="contact-left">
            <h3 class="company-name">Convex SOLAR SYSTEMS PVT. LTD.</h3>

            <p class="company-info">
                702 Onyx, North Main Road,<br>
                Koregaon Park, Pune 411001<br>
                <a href="mailto:info@agnisolar.com">info@agnisolar.com</a><br>
                <span class="phone">020 66434111</span>
            </p>

            <div class="map-box">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120637.94989531246!2d74.66027025875806!3d19.110466281412023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcb05d46788921%3A0x6677e92c1a5181b6!2sAhilyanagar%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1769666723270!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
        </div>

        <!-- RIGHT -->
        <div class="contact-right">
            <h3>Contact Us</h3>

            <form>
                <div class="form-row">
                    <div class="form-group">
                        <label>Full Name *</label>
                        <input type="text">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Phone *</label>
                        <input type="text">
                    </div>
                    <div class="form-group">
                        <label>Solar For *</label>
                        <select>
                            <option>Residential</option>
                            <option>Commercial</option>
                            <option>Industrial</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Solution *</label>
                        <select>
                            <option>Solar Water Heating</option>
                            <option>On Grid Solar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Address *</label>
                        <input type="text">
                    </div>
                </div>

                <div class="captcha-box">
                    <input type="checkbox"> I'm not a robot
                </div>

                <button class="btn-connect">CONNECT</button>
            </form>
        </div>

    </div>
</section>


<!-- ================= SLIDER JS ================= -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll(".slide");
    let index = 0;

    setInterval(() => {
        slides[index].classList.remove("active");
        index = (index + 1) % slides.length;
        slides[index].classList.add("active");
    }, 3000);
});
</script>
