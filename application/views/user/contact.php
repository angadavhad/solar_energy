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
<script src="https://js.hcaptcha.com/1/api.js" async defer></script>
<!-- ================= CONTACT DETAILS ================= -->
<section class="contact-section">
    <div class="contact-container">

        <!-- LEFT SIDE -->
        <div class="contact-left">
            <h2>Feel Free To Call Us !</h2>

            <p class="desc">
                You can chat with us on WhatsApp by clicking the WhatsApp icon on your bottom left.
            </p>

            <h3 class="phone">+91 98504 00900</h3>

            <p><strong>Email :</strong> convex@gmail.com</p>

            <p class="address">
                <strong>Address :</strong> 702 Onyx, North Main Road,  
                Koregaon Park, Pune 411001
            </p>
        </div>

		<?php if($this->session->flashdata('error')): ?>
<div class="alert alert-danger text-center">
    <?= $this->session->flashdata('error'); ?>
</div>
<?php endif; ?>

<?php if($this->session->flashdata('success')): ?>
<div class="alert alert-success text-center">
    <?= $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>


        <!-- RIGHT SIDE -->
        <div class="contact-right">

            <!-- FORM -->
            <div class="contact-form">
                <form method="post" action="<?= base_url('contact/submit') ?>">

                    <input type="text" name="name" placeholder="Name" required>
                    <input type="text" name="phone" placeholder="Phone Number" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <textarea name="message" placeholder="Message"></textarea>

                    <div class="h-captcha" 
                        data-sitekey="694ee9aa-f820-409e-848a-74fc55fa7196">
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>

            <!-- MAP -->
            <div class="map-box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.2626023104426!2d74.72194297381834!3d19.13997904996365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcbbef3f276619%3A0xe7e3d5f4326201cc!2sConvex%20Solar%20Solutions!5e0!3m2!1sen!2sin!4v1771059507729!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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
