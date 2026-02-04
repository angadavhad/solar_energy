<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Solar Energy Dashboard</title>

  <link href="<?=base_url() ?>assets/admin/css/app.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
<div class="wrapper">

  <!-- SIDEBAR -->
  <nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content">
      <a class="sidebar-brand" href="dashboard.php">
        <span class="align-middle">Solar Project</span>
      </a>

      <ul class="sidebar-nav">
        <li class="sidebar-item active">
          <a class="sidebar-link" href="<?=base_url()?>admin">
            <span class="align-middle">Dashboard</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="blog.php">
            <span class="align-middle">Blog</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="contact.php">
            <span class="align-middle">Contact</span>
          </a>
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
