<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Solar Energy Dashboard</title>
<link rel="icon" type="image/png" href="<?= base_url('assets/image/web_logo.webp') ?>">
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <link href="<?=base_url() ?>assets/admin/css/app.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
<div class="wrapper">

  <!-- SIDEBAR -->
  <nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content">
      <a class="sidebar-brand" href="<?=base_url()?>admin">
        <span class="align-middle" style="letter-spacing:3px;">Solar Project</span>
      </a>

      <ul class="sidebar-nav">
        <li class="sidebar-item active">
          <a class="sidebar-link" href="<?=base_url()?>admin">
            <span class="align-middle">Dashboard</span>
          </a>
        </li>

        <li class="sidebar-item">
  <a data-bs-toggle="collapse" href="#homePages" class="sidebar-link">
    <span class="align-middle">Home Page</span>
  </a>

  <ul id="homePages" class="sidebar-dropdown list-unstyled collapse">
    <li class="sidebar-item">
      <a class="sidebar-link" href="<?=base_url('home/home_hero')?>">Hero Section</a>
    </li>

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?=base_url('home/about')?>">About Section</a>
    </li>

        <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('home/home_products') ?>">Products</a>
    </li>

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?=base_url('home/home_services') ?>">Services</a>
    </li>


    <li class="sidebar-item">
      <a class="sidebar-link" href="<?=base_url('home/home_blogs')?>">Blog</a>
    </li>
      <li class="sidebar-item">
      <a class="sidebar-link" href="<?=base_url('home/home_leading')?>">leading solar </a>
    </li>
      <li class="sidebar-item">
      <a class="sidebar-link" href="<?=base_url('home/home_faq')?>">Feq </a>
    </li>




    <li class="sidebar-item">
      <a class="sidebar-link" href="home-contact.php">Contact Info</a>
    </li>
  </ul>
</li> 

      <li class="sidebar-item">
  <a data-bs-toggle="collapse" href="#aboutPages" class="sidebar-link">
    <span class="align-middle">About Page</span>
  </a>

<li class="sidebar-item">
  <a data-bs-toggle="collapse" href="#productPages" class="sidebar-link">
    <span class="align-middle">Products Page</span>
  </a>

  <ul id="productPages" class="sidebar-dropdown list-unstyled collapse">

    <!-- Main Products Page -->
    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('product') ?>">
        Products
      </a>
    </li>

    <!-- Future individual product pages -->
    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('product/solar_water_heater') ?>">
        Solar Water Heater
      </a>
    </li>

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('product/solar_pumps') ?>">
        Solar Pumps
      </a>
    </li>

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('product/on_grid_solar') ?>">
        On Grid Solar
      </a>
    </li>

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('product/street_light') ?>">
        Street Light
      </a>
    </li>

  </ul>
</li>

<li class="sidebar-item">
  <a data-bs-toggle="collapse" href="#productPages" class="sidebar-link">
    <span class="align-middle">Products Page</span>
  </a>

  <ul id="productPages" class="sidebar-dropdown list-unstyled collapse">

    <!-- Main Products Page -->
    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('product') ?>">
        Products
      </a>
    </li>

    <!-- Future individual product pages -->
    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('product/solar_water_heater') ?>">
        Solar Water Heater
      </a>
    </li>

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('product/solar_pumps') ?>">
        Solar Pumps
      </a>
    </li>

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('product/on_grid_solar') ?>">
        On Grid Solar
      </a>
    </li>

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('product/street_light') ?>">
        Street Light
      </a>
    </li>

  </ul>
</li>


      <li class="sidebar-item">
  <a data-bs-toggle="collapse" href="#servicePages" class="sidebar-link">
    <span class="align-middle ">service Page </span>
  </a>

  <ul id="servicePages" class="sidebar-dropdown list-unstyled collapse">
   

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('service/service_card') ?>"> Card Section</a>
    </li>

     <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('service/service_points') ?>"> Points Section</a>
    </li>

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('service/service_details') ?>"> Details Section</a>
    </li>
  </ul>
</li>




  <ul id="aboutPages" class="sidebar-dropdown list-unstyled collapse">
   

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('about/home_brand') ?>">Brand Section</a>
    </li>

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('about/home_vision') ?>">Vision Section</a>
    </li>

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('about/home_team') ?>">Our Team</a>
    </li>

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('about/home_verticals') ?>">Business Verticals</a>
    </li>
  </ul>
</li>

      <li class="sidebar-item">
  <a data-bs-toggle="collapse" href="#industrialPages" class="sidebar-link">
    <span class="align-middle ">Industrial Page </span>
  </a>

  <ul id="industrialPages" class="sidebar-dropdown list-unstyled collapse">
   

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('industrial/industrial_about') ?>">About Section</a>
    </li>

     <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('industrial/industrial_points') ?>">Points Section</a>
    </li>

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('industrial/industrial_capabilities') ?>">Capabilities Section</a>
    </li>

  

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('industrial/industrial_why') ?>">Why Choose Us</a>
    </li>
     
   
  </ul>
</li>


      <li class="sidebar-item">
  <a data-bs-toggle="collapse" href="#residentialPages" class="sidebar-link">
    <span class="align-middle">Residential Page</span>
  </a>

  <ul id="residentialPages" class="sidebar-dropdown list-unstyled collapse">
   

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('residential/residential_about') ?>">About Section</a>
    </li>

     <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('residential/residential_points') ?>">Points Section</a>
    </li>

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('residential/residential_capabilities') ?>">Capabilities Section</a>
    </li>
  </ul>
</li>


      <li class="sidebar-item">
  <a data-bs-toggle="collapse" href="#commercialPages" class="sidebar-link">
    <span class="align-middle">Commercial Page</span>
  </a>

  <ul id="commercialPages" class="sidebar-dropdown list-unstyled collapse">
   

    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('commercial/commercial_about') ?>">About Section</a>
    </li>

     <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('commercial/commercial_points') ?>">Points Section</a>
    </li>

     <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('commercial/commercial_suitable') ?>">Suitable Section</a>
    </li>


    <li class="sidebar-item">
      <a class="sidebar-link" href="<?= base_url('commercial/commercial_benefits') ?>">Benefits Section</a>
    </li>
  </ul>
</li>


<li class="sidebar-item">
   <a class="sidebar-link" href="<?= base_url('blog') ?>">Blog Page</a>
</li>


      </ul>
    </div>
  </nav>

  <!-- MAIN -->
  <div class="main">
    <nav class="navbar navbar-expand navbar-light navbar-bg">
      <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
      </a>

      <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
          <li class="nav-item">
            <span class="nav-link text-dark fw-bold">
              Solar Energy Management System
            </span>
          </li>
        </ul>
      </div>
    </nav>
