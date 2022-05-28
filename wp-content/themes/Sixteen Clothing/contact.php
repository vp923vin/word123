<?php 
/*
 * Template Name: Contact us 
 */ 

?>

<?php $page = 'contact';include('header.php'); ?>

<div class="head_image" style="background-image:url('<?php bloginfo("template_directory");?>/pro_images/contact-heading.jpg' )">
    
    <div class=" container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="text-danger">CONTACT US</h4>
          <h1 class="text-light">LET'S GET IN TOUCH</h1>
        </div>
      </div>
    </div>
  </div>


  

<div class="container mt-5">
    <h3 class="fw-normal">Our Location on map</h3>
    <hr>
    <div class="row mt-5 mb-5 text-secondary">
      <div class="col-md-8 mb-3">
        <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
         width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>

      </div>
      <div class="col-md-4">
        <p class="color_text">About our office</p>
        <p>Lorem ipsum dolor sit amet, consectetur 
          adipisic elit. Sed voluptate nihil eumester 
          consectetur similiqu consectetur.
        </p>
        <p>Lorem ipsum dolor sit amet, 
          consectetur adipisic elit. Et, consequuntur, modi
           mollitia corporis ipsa voluptate corrupti.
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



<div class="container">
    <h3 class="fw-normal">Send us a Message</h3>
    <hr>
    <div class="row">
        <div class="col-md-8">
          <?php echo apply_shortcodes( '[contact-form-7 id="41" title="Send Message"]' ); ?>
            <!-- <form action="#" class=""><br>
                <input class="form-control " type="text" placeholder="Full Name" required/><br>
                <input class="form-control " type="text" placeholder="E-mail address" required/><br>
                <input class="form-control " type="number" placeholder="Phone Number" required/><br>
                <input class="form-control " type="text" placeholder="Subject" required/><br>
                <fieldset>
                  <textarea name="message" id="message" class="form-control" placeholder="Your Message" 
                  cols="30" rows="5" required></textarea>
                </fieldset><br>
                <button type="submit" class="button button1">
                  <a class="newbutton" href="<?php echo get_site_url()?>/Contact us">Send Message</a>
                </button>
            </form> -->
        </div>

        <div class="col-md-4 accordion accordion-flush" id="accordionFlushExample">
          
          <div class="accordion-item">
          <hr>
            <h2 class="accordion-header" id="flush-headingOne">
            <a class="accordion text-decoration-none fs-5 pb-3 fw-normal newlink collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Accordion Title One
            </a>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur 
                  adipisic elit. Sed voluptate nihil eumester 
                  consectetur similiqu consectetur.<br><br>

                  Lorem ipsum dolor sit amet, consectetur 
                  adipisic elit. Et, consequuntur, modi mollitia
                  corporis ipsa voluptate corrupti elite.
                </p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
            <a class="accordion text-decoration-none fs-5 pb-3 fw-normal newlink collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Second title here
            </a>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur 
                  adipisic elit. Sed voluptate nihil eumester 
                  consectetur similiqu consectetur.<br><br>

                  Lorem ipsum dolor sit amet, consectetur 
                  adipisic elit. Et, consequuntur, modi mollitia
                  corporis ipsa voluptate corrupti elite.
                </p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
            <a class="accordion text-decoration-none fs-5 pb-3 fw-normal newlink collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Accordion Third Title
            </a>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur 
                  adipisic elit. Sed voluptate nihil eumester 
                  consectetur similiqu consectetur.<br><br>

                  Lorem ipsum dolor sit amet, consectetur 
                  adipisic elit. Et, consequuntur, modi mollitia
                  corporis ipsa voluptate corrupti elite.
                </p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFourth">
            <a class="accordion text-decoration-none fs-5 pb-3 fw-normal newlink collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFourth" aria-expanded="false" aria-controls="flush-collapseFourth">
              Fourth Accordion title 
            </a>
            </h2>
            <div id="flush-collapseFourth" class="accordion-collapse collapse" aria-labelledby="flush-headingFourth" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur 
                  adipisic elit. Sed voluptate nihil eumester 
                  consectetur similiqu consectetur.<br><br>

                  Lorem ipsum dolor sit amet, consectetur 
                  adipisic elit. Et, consequuntur, modi mollitia
                  corporis ipsa voluptate corrupti elite.
                </p>
              </div>
            </div>
            <hr>
          </div>
          
        </div> 
    </div>          
</div>
        <!-- <div class="col-md-4 mt-2 text-secondary">
            <hr>
            <h5 class="text-danger">Accordion Title One</h5>
            <p>Lorem ipsum dolor sit amet, 
              consectetur adipisic elit. Sed voluptate nihil eumester
                consectetur similiqu consectetur.</p>
            <p>Lorem ipsum dolor sit amet, consectetur
                adipisic elit. Et, consequuntur, modi 
                mollitia corporis ipsa voluptate corrupti elite.
            </p>
            <hr>
            <a class="text-decoration-none color_text" href="#">Second Title Here</a><hr>
            <a class="text-decoration-none color_text" href="#">Accordion Title Three</a><hr>
            <a class="text-decoration-none color_text" href="#">Fourth Accordion Title</a><hr>
        </div> -->



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




<?php include('footer.php'); ?>