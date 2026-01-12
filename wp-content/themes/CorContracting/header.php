<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php wp_title(); ?>
  </title>
  <?php global $asset_path;
  $asset_path = get_stylesheet_directory_uri();
  global $redirect_url;
  $redirect_url = get_home_url(); ?>
  <?php include('stylesheet-manager.php'); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <main>
    <header class="sticky-top">
      <div class="container-fluid">
        <div class="wrapper">
          <nav class="navbar navbar-expand-xl p-0">
            <a class="navbar-brand" href="<?php echo $redirect_url; ?>">
              <img src="<?php echo $redirect_url; ?>/wp-content/uploads/2026/01/corcontracting-logo.webp"
                class="d-block w-100" alt="CorContracting & Home Improvement LLC Logo">
              <div class="logo_name">
                <span class="logo-header"><b>CorContracting</b></span>
                <span class="small-text fw-normal">& Home Improvement</span>
              </div>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php
              wp_nav_menu(
                array(
                  'Primary Menu' => 'CorContracting Main Menu',
                  'menu_class' => 'd-flex links-nav navbar-nav',
                  'container' => false
                )
              );
              ?>
            </div>
            <div class="contact-details">
              <a href="tel:(732) 343-3709" class="phone">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-phone h-4 w-4">
                  <path
                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                  </path>
                </svg> (732) 343-3709</a>
              <a href="<?php echo $redirect_url; ?>/contact/" class="bg-cta h-40 fs-14">Get Free Quote</a>
              <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" style="stroke: #fff;"
                    stroke-linejoin="round" class="lucide lucide-menu h-6 w-6">
                    <line x1="4" x2="20" y1="12" y2="12"></line>
                    <line x1="4" x2="20" y1="6" y2="6"></line>
                    <line x1="4" x2="20" y1="18" y2="18"></line>
                  </svg>
                </span>
              </button>
            </div>
          </nav>
        </div>
      </div>
    </header>