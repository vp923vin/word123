<?php 
/*
 * Template Name: About us
 */ 

?>

<?php $page = 'About'; include('header.php'); ?>


<div class=" head_image1" style="background-image:url('<?php bloginfo("template_directory");?>/pro_images/about-heading.jpg' )">
    
  <div class=" container">
    <div class="row">
      <div class="col-md-12">
        <h4 class="text-danger">ABOUT US</h4>
        <h1 class="text-light">OUR COMPANY</h1>
      </div>
    </div>
  </div>
</div>

<!-- Image Banner After the Navbar Ends here-->

<!-- Company Bacground code starts from Here-->

<div class="container mt-5">
  <h3 class="fw-normal">Our Background</h3>
  <hr>
  <div class="row mt-5 mb-5 text-secondary">
    <div class="col-md-6 ">
      <img  src="<?php echo get_template_directory_uri() .'/pro_images/feature-image.jpg'; ?>" alt="#" width="100%" height="90%">
    </div>
    <div class="col-md-6 text-secondary ">
      <p class="color_text fw-bold ">Who we are & What we do?</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil 
        eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores 
        delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis
        ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur,
         modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium 
         quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis.
      </p>
      <hr>

      <div>
        <button  class="butt01" type="button">
          <a href="#"><i class="fa-brands fa-facebook-f "></i></a>
        </button>
        <button class="butt01" type="button">
          <a href="#"><i class="fa-brands fa-twitter "></i></a>
        </button>
        <button class="butt01" type="button">
          <a href="#"><i class="fa-brands fa-linkedin-in "></i></a>
        </button>
        <button class="butt01" type="button">
          <a href="#"><i class="fa-brands fa-behance "></i></a>
        </button>
      </div>
    </div>
  </div>     
</div>

   <!-- CARDS starts from here-->
<div class="container mt-5">
  <h3 class="fw-normal"> Our Team Members</h3>
  <hr>
  <div class="row mt-5 text-secondary">
    <div class="col-md-4 text-center">
      <div class="card mb-4">
        <img  class="images" src="<?php echo get_template_directory_uri() .'/pro_images/team_01.jpg'; ?>" alt="boots">
         <div class="image_overlay">
        <div >
          <button  class="butt02" type="button">
            <a href="#"><i class="fa-brands fa-facebook-f "></i></a>
          </button>
          <button class="butt02" type="button">
            <a href="#"><i class="fa-brands fa-twitter "></i></a>
          </button>
          <button class="butt02" type="button">
            <a href="#"><i class="fa-brands fa-linkedin-in "></i></a>
          </button>
          <button class="butt02" type="button">
            <a href="#"><i class="fa-brands fa-behance "></i></a>
          </button>
        </div>
      </div>
        <div class="card-body">
          <a class="text-decoration-none color_text fw-bold" href="#">Jhonny William</a>
          <p class="text-danger">CO-Founder</p>
          <p>Lorem ipsume dolor sit amet, adipisicing 
            elite. Itaque, corporis nulla aspernatur.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 text-center">
      <div class="card mb-4">
        <img class="images" src="<?php echo get_template_directory_uri() .'/pro_images/team_02.jpg'; ?>" alt="boots">
        <div class="image_overlay">
          <div >
            <button  class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-facebook-f "></i></a>
            </button>
            <button class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-twitter "></i></a>
            </button>
            <button class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-linkedin-in "></i></a>
            </button>
            <button class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-behance "></i></a>
            </button>
          </div>
        </div>
        <div class="card-body">
          <a class="text-decoration-none color_text fw-bold" href="#">Karry Pitcher</a>
          <p class="text-danger">Product Expert</p>
          <p>Lorem ipsume dolor sit amet, adipisicing 
            elite. Itaque, corporis nulla aspernatur.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 text-center">
      <div class="card mb-4">
        <img class="images" src="<?php echo get_template_directory_uri() .'/pro_images/team_03.jpg'; ?>" alt="boots">
        <div class="image_overlay">
          <div >
            <button  class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-facebook-f "></i></a>
            </button>
            <button class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-twitter "></i></a>
            </button>
            <button class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-linkedin-in "></i></a>
            </button>
            <button class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-behance "></i></a>
            </button>
          </div>
        </div>
        <div class="card-body">
          <a class="text-decoration-none color_text fw-bold" href="#">Michael Soft</a>
          <p class="text-danger">Chief Marketing</p>
          <p>Lorem ipsume dolor sit amet, adipisicing 
            elite. Itaque, corporis nulla aspernatur.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 text-center">
      <div class="card mb-4">
        <img class="images" src="<?php echo get_template_directory_uri() .'/pro_images/team_04.jpg'; ?>" alt="boots">
        <div class="image_overlay">
          <div >
            <button  class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-facebook-f "></i></a>
            </button>
            <button class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-twitter "></i></a>
            </button>
            <button class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-linkedin-in "></i></a>
            </button>
            <button class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-behance "></i></a>
            </button>
          </div>
        </div>
        <div class="card-body">
          <a class="text-decoration-none color_text fw-bold" href="#">Mary Cool</a>
          <p class="text-danger">Product Specialist</p>
          <p>Lorem ipsume dolor sit amet, adipisicing 
            elite. Itaque, corporis nulla aspernatur.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 text-center">
      <div class="card mb-4">
        <img class="images" src="<?php echo get_template_directory_uri() .'/pro_images/team_05.jpg'; ?>" alt="boots">
        <div class="image_overlay">
          <div >
            <button  class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-facebook-f "></i></a>
            </button>
            <button class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-twitter "></i></a>
            </button>
            <button class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-linkedin-in "></i></a>
            </button>
            <button class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-behance "></i></a>
            </button>
          </div>
        </div>
        <div class="card-body">
          <a class="text-decoration-none color_text fw-bold" href="#">George Walker</a>
          <p class="text-danger">Product Photographer</p>
          <p>Lorem ipsume dolor sit amet, adipisicing 
           elite. Itaque, corporis nulla aspernatur.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 text-center">
      <div class="card">
        <img class="images" src="<?php echo get_template_directory_uri() .'/pro_images/team_06.jpg'; ?>" alt="boots">
        <div class="image_overlay">
          <div >
            <button  class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-facebook-f "></i></a>
            </button>
            <button class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-twitter "></i></a>
            </button>
            <button class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-linkedin-in "></i></a>
            </button>
            <button class="butt02" type="button">
              <a href="#"><i class="fa-brands fa-behance "></i></a>
            </button>
          </div>
        </div>
        <div class="card-body">
          <a class="text-decoration-none color_text fw-bold" href="#">Kate Town</a>
          <p class="text-danger">Genral Manager</p>
          <p>Lorem ipsume dolor sit amet, adipisicing 
           elite. Itaque, corporis nulla aspernatur.</p>
        </div>
      </div>
    </div> 
  </div>
</div>
<!-- Cards end here -->



<div class="running" style="background-image:url('<?php bloginfo("template_directory");?>/pro_images/services-bg.jpg' )">
  <div class="container mt-3">
    <div class="row text-secondary">
      <div class="col-md-4 mt-5">
        <div class="card mt-5 mb-3">
          <div class="text-center">
            <button type="button" class="bt01">
              <i class="fa fa-gear"></i>
            </button><br> <br><hr>
          </div> 
          
          <div class="card-body text-center">
            <h4 class="color_text">Product Management</h4><br>
            <p >Lorem ipsum dolor sit amet, consectetur 
              an adipisicing elit. Itaque, corporis
              nulla at quia quaerat.
            </p><br>
            <button type="button" class="but01">
            <a class="newbutton" href="<?php echo get_site_url() ?>/About">Read More</a>
            </button>
          </div>
        </div>
      </div>

      <div class="col-md-4 mt-5">
        <div class="card mt-5 mb-3">
          <div class="text-center">
          <button type="button" class="bt01">
            <i class="fa fa-gear"></i>
          </button><br><br> <hr>
        </div>
          <div class="card-body text-center">
            <h4 class="color_text">Customer Relations</h4><br>
            <p>Lorem ipsum dolor sit amet, consectetur 
              an adipisicing elit. Itaque, corporis
              nulla at quia quaerat.
            </p><br>
            <button type="button" class="but01">
            <a class="newbutton" href="<?php echo get_site_url() ?>/About">Details</a>
            </button>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 mt-5">
        <div class="card mt-5">
          <div class="text-center">
          <button type="button" class="bt01">
            <i class="fa fa-gear"></i>
          </button><br><br><hr>
        </div>
          <div class="card-body text-center ">
            <h4 class="color_text">Global collection</h4><br>
            <p>Lorem ipsum dolor sit amet, consectetur 
              an adipisicing elit. Itaque, corporis
              nulla at quia quaerat.
            </p><br>
            <button type="button" class="but01">
              <a class="newbutton" href="<?php echo get_site_url() ?>/About">Read More</a>
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<div class="container mt-5">
    
  <h3 class="fw-normal">Our Happy Customers</h3>
  <hr>
  <div class="row mt-5">
    <div class=" col-md-2 mb-3 ">
      <img src="<?php echo get_template_directory_uri() .'/pro_images/client-01.jpg'; ?>" alt="">
    </div>
    <div class=" col-md-2 mb-3 ml-2">
      <img src="<?php echo get_template_directory_uri() .'/pro_images/client-01.jpg'; ?>" alt="">
    </div>
    <div class=" col-md-2 mb-3 ml-2">
      <img src="<?php echo get_template_directory_uri() .'/pro_images/client-01.jpg'; ?>" alt="">
    </div>
    <div class=" col-md-2 mb-3 ml-2">
      <img src="<?php echo get_template_directory_uri() .'/pro_images/client-01.jpg'; ?>" alt="">
    </div>
    <div class=" col-md-2 mb-3 ml-2">
      <img src="<?php echo get_template_directory_uri() .'/pro_images/client-01.jpg'; ?>" alt="">
    </div>
    <div class=" col-md-2 mb-3 ml-2">
      <img src="<?php echo get_template_directory_uri() .'/pro_images/client-01.jpg'; ?>" alt="">
    </div>
  </div>




<?php include('footer.php') ?>