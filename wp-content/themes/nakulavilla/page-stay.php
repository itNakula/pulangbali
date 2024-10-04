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
                          <div class="row ">
                              <div class="col-md-5">
                                  <h1 data-aos="fade-up"><?php the_title(); ?></h1>
                                  <p data-aos="fade-up"><?php the_excerpt(); ?></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section><!-- bg Home -->
  <?php the_content(); ?>
  
  <section class="mt-80" id="reviews" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-20">
            <h2 class="text-blue text-center">Reviews</h2>
            </div>
            
            <div class="col-12 my-5">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12">
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

