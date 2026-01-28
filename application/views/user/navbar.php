<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/footer.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/about.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/services.css') ?>">

  <script src="<?php echo base_url('assets/js/about.js'); ?>" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<head>
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
  <span>convex</span>
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
    <a href="<?= base_url('user/products') ?>"
       class="<?= ($this->uri->segment(2) == 'products') ? 'active' : '' ?>">
       Products
    </a>

    <div class="ms-dropdown-menu">
      <a href="<?= base_url('user/solar_water_heater') ?>">Solar Water Heater</a>
      <a href="<?= base_url('user/solar_pumps') ?>">Solar Pumps</a>
      <a href="<?= base_url('user/on_grid_solar') ?>">On Grid Solar</a>
      <a href="<?= base_url('user/street_light') ?>">Street Light</a>
    </div>
  </div>

  <div class="ms-dropdown">
    <a href="<?= base_url('user/services') ?>"
       class="<?= ($this->uri->segment(2) == 'services') ? 'active' : '' ?>">
       Services
    </a>

    <div class="ms-dropdown-menu">
      <a href="<?= base_url('user/residential') ?>">Residential</a>
      <a href="<?= base_url('user/industrial') ?>">Industrial</a>
      <a href="<?= base_url('user/commercial') ?>">Commercial</a>
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

  <a href="#" class="ms-btn">Get Quote</a>
</nav>


  </div>
</header>
