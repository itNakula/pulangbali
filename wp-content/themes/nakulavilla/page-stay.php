<?php
/*Template Name: Page Stay*/

get_header();
?>

  <section class="bg-stay" data-jarallax="" data-speed="0.2">
      <div class="jumbotron d-flex flex-column min-vh-100 bg-home-gradient text-white">
          <div class="contaniner p-0 overflow-hidden">
              <div class="row">
                  <div class="col">
                      <div class="jumbotron d-flex flex-column px-4 px-md-5 py-8 justify-content-end vh-100 bg-gradient-left text-white">
                          <div class="row" data-aos="fade-up">
                              <div class="col-md-5">
                                  <h1><?php the_title(); ?></h1>
                                  <p><?php the_content(); ?></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section><!-- bg Home -->

  <main class="mt-60">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="mb-60" id="the-villa"  data-aos="fade-up">
          <h3 class="text-blue fw-light mb-4 fs-3"><?php //the_field('villa_title'); ?>The Villa</h3>
          <?php the_field('villa_description'); ?>	
          <a href="https://api.whatsapp.com/send?phone=%2b6282145811275 &amp;text=Hi,%20I%20would%20like%20to%20book%20the%20Pulang%20villa%20by%20Nakula,%20Is%20it%20available?." class="btn btn-outline-red rounded-0">Enquire</a>
          </div>
          <hr />
          <div class="mt-60 mb-60" id="quick-facts" data-aos="fade-up">
          <h3 class="text-blue fw-light mb-4 fs-3">Quick Facts</h3>
          <?php the_field('quick_facts'); ?>   
          </div>
          <hr />
          <div class="mt-60 mb-60" id="rates" data-aos="fade-up">
            <h3 class="text-blue fw-light mb-4 fs-3">Rates &amp; Availability</h3>
            <div id="calendar-widget-container" data-enable-rates="true"></div>
            <div class="mt-40">
              <h4 class="subtitle text-blue">Need to Know</h4>
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
          <hr />
          <div class="mt-60 mb-60" id="reviews" data-aos="fade-up">
            <h3 class="text-blue fw-light mb-4 fs-3">Reviews</h3>
            <div class="carousel" data-flickity='{ "contain": true, "groupCells": false, "pageDots": false, "adaptiveHeight": true }' >
              <?php if( have_rows('reviews') ): $q = 0;  ?>
              <?php while ( have_rows('reviews') ): the_row(); ?>
                  <div class="w-100" style="position: absolute; left: 0%; background-color: #F8F8F8;">
                      <div class="row p-4">
                          <div class="col-md-3">
                          <span><i class="ic-star mb-2"></i></span>
                          <p><strong><?php the_sub_field('name'); ?></strong></p>
                          </div>
                          <div class="col-md-9">
                          <?php the_sub_field('comment'); ?>
                          </div>
                      </div>
                  </div>
              <?php $q++; endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-none d-md-block">
          <div class="sticky-top">
            <div id="reservation-box-widget-container"> </div>
          </div>
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </main>

  <section class="mt-60"  data-aos="fade-up">
    <div class="carousel" data-flickity='{"contain": true, "groupCells": false, "pageDots": false, "imagesLoaded": true, "imagesLoaded": true}'>
      <?php
        $count = 0; 
        if( have_rows('slide') ){ while ( have_rows('slide') ){ the_row();
        $image = get_sub_field('image_slide');
        if( !empty($image) ):
      ?>
      <a href="<?php echo $image['url']; ?>" data-fancybox="gallery" class="gallery_product filter <?php echo $image['title']; ?>" data-caption="<?php echo $image['caption']; ?>">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid img-square pe-1" width="622">
      </a>
      <?php endif; $count=$count+1; } } ?>
    </div><!-- carousel -->
  </section><!-- about Villa -->

  <section class="mt-60 bg-discover text-white">
    <div class="bg-discover-gardient">
      <div class="container my-auto" data-aos="fade-up">
        <h2>Discover All <br />Our Luxury Villas</h2>
        <a href="https://nakula.com" class="btn btn-outline-light rounded-0">Visit Nakula.com</a>
      </div>
    </div>
  </section>
  <script src="https://booking.nakula.com/api/v1/<?php the_field('book_now', 'option') ?>/calendar_widget.js"></script>
  <script src="https://booking.nakula.com/api/v1/<?php the_field('book_now', 'option') ?>/reservation_box_widget.js"></script>
  
<?php
get_footer();

