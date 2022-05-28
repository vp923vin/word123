<?php 
/*
 * Template Name: Home
 */ 

?>

<?php $page = 'Home';  include('header.php'); ?>

<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>

<!--carousel starts here -->
<!-- 
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></li>
  </ol>


  <div class="carousel-inner" role="listbox">
    
    <div class="carousel-item active">

      <img src="/pro_images/slide_01.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-danger">BEST OFFERS</h5>
          <h1>NEW ARRIVALS ON SALE</h1>
        </div>
    </div>
    
    <div class="carousel-item">
      <img src="/pro_images/slide_02.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-danger">FLASH DEALS</h5>
        <h1>GET YOUR BEST PRODUCTS</h1>
      </div>
    </div>
    <
    <div class="carousel-item">
      <img src="pro_images/slide_03.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-danger">LAST MINUTE</h5>
        <h1>GRAB YOUR LAST MINUTE DEALS</h1>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev invisible" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
  <button class="carousel-control-next invisible" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
</div> -->

 <!--carousel end here-->





 
 


<div class="container border-1 mt-5">
  <div class="row ">
    <div class="col-md-6">
      <span class="fs-4 text-dark">Latest Products</span>
    </div>
    <div class="col-md-6 d-flex flex-row-reverse">
      <a href="<?php echo get_site_url() ?>/our products" class="text-danger text-decoration-none " >VIEW ALL PRODUCTS></a>
    </div>
  </div>
  <hr class="border-0">
  <!--cards start from here--> 

  <div class="row mt-5 ">
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="<?php echo get_template_directory_uri() .'/pro_images/product_01.jpg'; ?>" alt="boots">
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <a class="text-decoration-none color_text " href="#">Title goes here</a>
              </div>
              <div class="col-6 d-flex flex-row-reverse">
                <span class="fw-bold">$25.75</span>
              </div>
            </div> 
            <p>Lorem ipsume dolor sit amet, adipisicing 
             elite. Itaque, corporis nulla aspernatur.</p>
            <div class="row">
              <div class="col-6 list-style-none text-danger d-flex flex-row">  
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star " aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i> 
              </div>
              <div class="col-6 d-flex flex-row-reverse">
                <span class="text-danger">Reviews(24)</span>
              </div>
            </div>  
          </div>
      </div>
    </div>

    <div class="col-md-4 ">
      <div class="card mb-4">
        <img src="<?php echo get_template_directory_uri() .'/pro_images/product_02.jpg'; ?>"  alt="boots">
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <a class="text-decoration-none color_text" href="#">Title goes here</a>
              </div>
              <div class="col-6 d-flex flex-row-reverse">
                <span class="fw-bold">$30.25</span>
              </div>
            </div> 
            <p>Lorem ipsume dolor sit amet, adipisicing 
            elite. Itaque, corporis nulla aspernatur.</p>
            <div class="row">
              <div class="col-6 list-style-none text-danger d-flex flex-row">  
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star " aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i> 
              </div>
              <div class="col-6 d-flex flex-row-reverse">
                <span class="text-danger">Reviews(21)</span>
              </div>
            </div> 
          </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card mb-4">
        <img src="<?php echo get_template_directory_uri() .'/pro_images/product_03.jpg'; ?>" alt="boots">
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <a class="text-decoration-none color_text" href="#">Title goes here</a>
              </div>
              <div class="col-6 d-flex flex-row-reverse">
                <span class="fw-bold">$20.45</span>
              </div>
            </div>
            <p>Lorem ipsume dolor sit amet, adipisicing 
             elite. Itaque, corporis nulla aspernatur.</p>
            <div class="row">
              <div class="col-6 list-style-none text-danger d-flex flex-row">  
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star " aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i> 
              </div>
              <div class="col-6 d-flex flex-row-reverse">
                <span class="text-danger">Reviews(36)</span>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card mb-4">
        <img src="<?php echo get_template_directory_uri() .'/pro_images/product_04.jpg'; ?>" alt="boots">
        <div class="card-body">
            <div class="row">
              <div class="col-6">
                <a class="text-decoration-none color_text" href="#">Title goes here</a>
              </div>
              <div class="col-6 d-flex flex-row-reverse">
                <span class="fw-bold">$15.50</span>
              </div>
            </div>
            <p>Lorem ipsume dolor sit amet, adipisicing 
             elite. Itaque, corporis nulla aspernatur.</p>
            <div class="row">
              <div class="col-6 list-style-none text-danger d-flex flex-row">  
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star " aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i> 
              </div>
              <div class="col-6 d-flex flex-row-reverse">
                <span class="text-danger">Reviews(48)</span>
              </div>
            </div> 
        </div>
      </div>  
    </div>

    <div class="col-md-4">
      <div class="card mb-4">
        <img src="<?php echo get_template_directory_uri() .'/pro_images/product_05.jpg'; ?>" alt="boots">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <a class="text-decoration-none color_text" href="#">Title goes here</a>
            </div>
            <div class="col-6 d-flex flex-row-reverse">
              <span class="fw-bold">$12.50</span>
            </div>
          </div>
          <p>Lorem ipsume dolor sit amet, adipisicing 
           elite. Itaque, corporis nulla aspernatur.</p>
          <div class="row">
            <div class="col-6 list-style-none text-danger d-flex flex-row">  
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star " aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i> 
            </div>
            <div class="col-6 d-flex flex-row-reverse">
              <span class="text-danger">Reviews(16)</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="<?php echo get_template_directory_uri() .'/pro_images/product_06.jpg'; ?>" alt="boots">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <a class="text-decoration-none color_text" href="#">Title goes here</a>
            </div>
            <div class="col-6 d-flex flex-row-reverse">
              <span class="fw-bold">$22.50</span>
            </div>
          </div>
          <p>Lorem ipsume dolor sit amet, adipisicing 
           elite. Itaque, corporis nulla aspernatur.</p>
          <div class="row">
            <div class="col-6 list-style-none text-danger d-flex flex-row">  
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star " aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i> 
            </div>
            <div class="col-6 d-flex flex-row-reverse">
              <span class="text-danger">Reviews(32)</span>
            </div>
          </div>
        </div>
     </div>
    </div> 
  </div>
<!-- Cards end here -->

  <div class="container mt-5">
    <h2 class="text-dark">About Sixteen Clothing</h2>
    <hr>
    <div class="row mt-5 mb-5 text-secondary">
      <div class="col-md-6 text-left mb-3">
        <a class="mb-3 text-decoration-none color_text" href="#">Looking for the best products?</a>
        <br><br>
        <p class="mt-0">
        <a class="text-decoration-none" href="#">This template</a> is free to use for your business 
        websites. However, you have <br> no permission to redistribute the downloadable ZIP file on any
        template <br>collection website. <a class="text-decoration-none" href="<?php echo get_site_url()?>/Contact us">Contact us</a> 
        for more info.
        </p>
        <ul class="list mt-0">
          <li >Lorem ipsum dolor sit amet</li>
          <li>Consectetur an adipisicing elit</li>
          <li>It aquecorporis nulla aspernatur</li>
          <li>Corporis, omnis doloremque</li>
          <li>Non cum id reprehenderit</li>
        </ul>
        <button type="button" class="button button1"><a class="newbutton button1" href="<?php echo get_site_url() ?>/About">Read More</a></button>
      </div>
      <div class="col-md-6 float-right ">
        <img  src="<?php echo get_template_directory_uri() .'/pro_images/feature-image.jpg'; ?>" alt="#" width="100%" height="90%">
      </div>
    </div>     
    <hr>
  </div>

  <div class="container mt-5 text-secondary ">
    <div class="row ">
      <div class="col-md-9">
        <h5 class="color_text">Creative & Unique Sixteen Products</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
           Itaque corporis amet elite author nulla.</p>
      </div>
      <div class="col-md-3">
        <button class="button2 button1"><a class="newbutton button1" href="<?php echo get_site_url() ?>/Home">Purchase Now</a></button>
      </div>
    </div>

    <?php include('footer.php'); ?>