<?php 
/*
 * Template Name: Header
 */ 

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Live View Page - 546 sixteen clothing Template</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fontawesome/css/all.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/CSS/bootstrap.min.css"> 
  <!-- Bootstrap CSS File required if you want to use predefined classes of bootstrap
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
  crossorigin="anonymous"> -->
   <script src="<?php echo get_template_directory_uri(); ?>/JS/bootstrap.bundle.min.js"></script>
  

  <!-- Bootstrap Bundle with  Popper File required if you want to use predefined classes of bootstrap-->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
  crossorigin="anonymous"></script> -->


  <?php wp_head(); ?>
</head> 

<body class="text-secondary">

<!-- Navigation Bar code -->
<header >
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <div class="container">
        <h1><a href="<?php echo home_url(); ?>/" class="navbar-brand">SIXTEEN <span class="text-danger">CLOTHING</span></a></h1>
        <button  class="navbar-toggler " data-bs-toggle="collapse" data-bs-target="#mynavdrop">
          <span class="navbar-toggler-icon"></span>
        </button>
        
    <div class="collapse navbar-collapse justify-content-end  " id="mynavdrop">
      <ul class="navbar-nav al">
        <li class="navbar-item btn " > <a class="nav-link <?php if ($page == 'Home') {
          echo 'active';
          
           }?>"
          href="<?php echo get_site_url()?>/Home">Home</a></li>
        <li class="navbar-item btn"> <a class="nav-link <?php if ($page == 'products') {
          echo 'active';
          
           }?>"
         href="<?php echo get_site_url()?>/Our products">Our Products</a></li>
        <li class="navbar-item btn"> <a class="nav-link <?php if ($page == 'About') {
          echo 'active';
          
           }?> "
         href="<?php echo get_site_url()?>/About us">About Us</a></li>
        <li class="navbar-item btn"> <a class="nav-link  <?php if ($page == 'contact') {
          echo 'active';
          
           }?>"
         href="<?php echo get_site_url()?>/Contact us">Contact Us</a></li>
      </ul>
    </div>

      </div>
    </div>
  
  </div>
</nav>
</header>
<!--Navigation ends Here-->
