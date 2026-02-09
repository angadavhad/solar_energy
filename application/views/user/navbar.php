<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/footer.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/about.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/services.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/residential.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/commercial.css') ?>">
<link rel="stylesheet" href="<?= base_url("assets/css/contact.css") ?>">

<link rel="stylesheet" href="<?= base_url('assets/css/quote.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/solar_water_heater.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/solar_water_pump.css') ?>">

<link rel="stylesheet" href="<?= base_url('assets/css/industrial.css') ?>">


<link rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<link rel="stylesheet" href="<?= base_url('assets/css/blogs.css') ?>">
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4r5jHk9vKx5C5dYl3Q=="
crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="<?php echo base_url('assets/js/about.js'); ?>" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<head>
  <script src="<?= base_url('assets/js/navbar.js') ?>"></script>


<body>
<header class="ms-navbar">
  <div class="ms-container">
<div class="ms-toggle">
  <span></span>
  <span></span>
  <span></span>
</div>

    <!-- Logo -->
<div class="ms-logo">
  <img src='<?=base_url()?>assets/image/web_logo.webp' alt="Convex Solar Solutions Logo">
</div>

<!-- Menu -->
<nav class="ms-menu">

  <a href="<?= base_url('user/index') ?>"
     class="<?= ($this->uri->segment(2) == 'index' || $this->uri->segment(2) == '') ? 'active' : '' ?>">
     Home
  </a>

  <a href="<?= base_url('user/about') ?>"
     class="<?= ($this->uri->segment(2) == 'about') ? 'active' : '' ?>">
     About
  </a>

  <div class="ms-dropdown">
    <a href="<?= base_url('user/product') ?>"
       class="<?= ($this->uri->segment(2) == 'product') ? 'active' : '' ?>">
       Products
    </a>

    <div class="ms-dropdown-menu">
      <a href="<?= base_url('user/solar_water_heater') ?>">Solar Water Heater</a>
      <a href="<?= base_url('user/solar_water_pump') ?>">Solar Pumps</a>
      <a href="<?= base_url('user/on_grid_solar') ?>">On Grid Solar</a>
      <a href="<?= base_url('user/solar_street_light') ?>">Street Light</a>
    </div>
  </div>

<div class="ms-dropdown">
  <a href="<?= base_url('user/services') ?>"
     class="<?= in_array($this->uri->segment(2), ['services','residential','commercial','industrial']) ? 'active' : '' ?>">
     Services
  </a>

  <div class="ms-dropdown-menu">
    <a href="<?= base_url('user/residential') ?>"
       class="<?= ($this->uri->segment(2) == 'residential') ? 'active' : '' ?>">
       Residential
    </a>

    <a href="<?= base_url('user/industrial') ?>"
       class="<?= ($this->uri->segment(2) == 'industrial') ? 'active' : '' ?>">
       Industrial
    </a>

    <a href="<?= base_url('user/commercial') ?>"
       class="<?= ($this->uri->segment(2) == 'commercial') ? 'active' : '' ?>">
       Commercial
    </a>
  </div>
</div>


  <a href="<?= base_url('user/blogs') ?>"
     class="<?= ($this->uri->segment(2) == 'blogs') ? 'active' : '' ?>">
     Blogs
  </a>

  <a href="<?= base_url('user/contact') ?>"
     class="<?= ($this->uri->segment(2) == 'contact') ? 'active' : '' ?>">
     Contact
  </a>

<a href="javascript:void(0)"
   class="ms-btn"
   data-bs-toggle="modal"
   data-bs-target="#quoteModal">
    Get Quote 
</a>
</nav>


  </div>
</header>

