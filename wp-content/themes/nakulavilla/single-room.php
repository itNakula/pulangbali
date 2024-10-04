<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package NakulaVilla
 */
get_header('stay');
?>

  <section class="bg-stay" data-jarallax="" data-speed="0.2" style="background-image: url('<?php the_field('image_bg'); ?>');">
    <div class="jumbotron d-flex flex-column min-vh-100 bg-home-gradient text-white">
      <div class="contaniner p-0 overflow-hidden">
        <div class="row">
          <div class="col-12">
            <div class="jumbotron d-flex flex-column px-4 px-md-5 py-8 justify-content-end vh-100 bg-gradient-left text-white">
              <div class="row" data-aos="fade-up">
                <div class="col-md-5">
                  <h1><?php the_title(); ?></h1>
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- bg Home -->

  <section class="mt-60" id="the-villa">
    <div class="container">
      <div class="row">
        <div class="col-md-4 d-flex align-content-center justify-content-center flex-wrap border-top border-bottom p-4 text-center">
          <h2 class="text-blue fw-light mt-4 fs-2"><?php //the_field('villa_title'); ?>The Property</h2>
          <?php the_field('villa_description'); ?>						
        </div>
        <div class="col-md-8">
          <div class="carousel" data-flickity='{"wrapAround": true, "imagesLoaded": true, "pageDots": false }'>
            <?php
              $count = 0; 
              if( have_rows('villa_image') ){ while ( have_rows('villa_image') ){ the_row();
              $image = get_sub_field('image');
              if( !empty($image) ):
            ?>           
            <div class="w-100"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid"></div>
          <?php endif; $count=$count+1; } } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="mt-60" id="quick-facts">
    <div class="container">
      <div class="row">
        <h3 class="text-blue text-center">Quick Facts</h3>
        <!--<div class="tablebg" contenteditable>-->
        <?php the_field('quick_facts'); ?>
        <!--</div>-->
      </div>
    </div>
  </section>

  <section class="mt-60" id="rates">
    <div class="container">
      <div class="row">
        <h2 class="text-blue text-center mb-40">Rates &amp; Availability</h2>
        <div class="col-md-12">
        <div class="ibe" data-region="apac" data-channelcode="PulangVillasPererenanbyNakulaDIRECT" data-widget="property_grid" style="height: 350px"></div>
        //<a class="btn btn-outline-red rounded-0 d-none d-lg-inline-block w-25 mx-auto m-5" href="https://app-apac.thebookingbutton.com/properties/PulangVillasPererenanbyNakulaDIRECT">Book Now</a>
         </div>
        <div class="col-md-12">
          <hr class="style-eight mt-60">
          <h3 class="subtitle text-blue">Need to Know</h3>
          <ul>
            <li>A complimentary breakfast is provided as part of the service at our villa.</li>
            <li>The above rates are nightly rates inclusive of government tax and service charge.</li>
            <li>Special Internet rates are only valid when booking directly to us.</li>
            <li>The above rates and details are correct at the time of publication and are subject to change without notice.</li>
            <li>Check-in time: 2 pm / Check-out time: 12 noon</li>
            <li>Late check-out until 6 pm can be arranged at half the rental rate (subject to availability)</li>
            <li>Reservations are required prior to arrival.</li>
            <li>Reservations are only valid with a Guarantee Deposit.</li>
          </ul>
        </div>
      </div>
    </div>    
  </section>

  <section class="mt-80" id="reviews">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-20">
            <h2 class="text-blue text-center">Reviews</h2>
            </div>
            
            <div class="col-12 my-5">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-10 col-offset-md-1">
                        <div class="carousel" data-flickity='{ "contain": true, "groupCells": false, "pageDots": false, "adaptiveHeight": true }' >
                            <?php if( have_rows('reviews', 'option') ): $q = 0;  ?>
                            <?php while ( have_rows('reviews', 'option') ): the_row(); ?>
                                <div class="w-100" style="position: absolute; left: 0%; background-color: #F8F8F8;">
                                    <div class="row p-4">
                                        <div class="col-md-3">
                                        <span><i class="ic-star mb-2"></i></span>
                                        <p><strong><?php the_sub_field('name', 'option'); ?></strong></p>
                                        </div>
                                        <div class="col-md-9">
                                        <?php the_sub_field('comment', 'option'); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php $q++; endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <section class="mt-60 bg-discover text-white">
    <div class="bg-discover-gardient">
      <div class="container my-auto">
        <h2>Discover All <br />Our Luxury Villas</h2>
        <a href="https://nakula.com" class="btn btn-outline-light rounded-0">Visit Nakula.com</a>
      </div>
    </div>
  </section>

<?php
get_footer();