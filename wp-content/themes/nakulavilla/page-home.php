<?php
/*Template Name: Homepage*/

get_header();
?>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-dow">
            <div class="modal-content bg-transparent border border-0">
                <div class="modal-body" style="padding: 0px;">
                    <button type="button" class="btn-close bg-white position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close"></button>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/popup-unlock-exclusive-perks.jpg" alt="Free airport transport" class="img-fluid" />
                    <div class="position-absolute bottom-0 start-50 translate-middle-x p-4">
                    <a class="btn btn-light" href="/stay/#rates">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-home" data-jarallax="" data-speed="0.2">
        <div class="jumbotron d-flex flex-column min-vh-100 bg-home-gradient text-white">
            <div class="contaniner p-0 overflow-hidden">
                <div class="row">
                    <div class="col-12">
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

    <div class="container mt-60"></div>

    <section class="mt-60">
        <div class="container-fluid p-0 overflow-hidden">
            <div class="row mb-1 g-1 g-lg-1">                
                <div class="col-sm-3 order-lg-3 my-auto p-4" data-aos="fade-up">
                    <?php the_field('collage_content_1'); ?>
                </div>
                <div class="col-sm-6 order-lg-1 ms-0" data-aos="fade-up">
                    <div class="box h-100">
                        <?php $image = get_field('collage_image_1'); if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid img-home-collage img" />
                            <div class="overlay">
                                <div class="textover"><?php echo $image['caption']; ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-3 order-lg-2" data-aos="fade-up">
                    <div class="box h-100">
                        <?php $image = get_field('collage_image_2'); if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid img-home-collage img" />
                            <div class="overlay">
                                <div class="textover"><?php echo $image['caption']; ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row mb-1 g-1 g-lg-1">
                <div class="col-sm-3 order-lg-2" data-aos="fade-up">
                    <div class="box h-100">
                        <?php $image = get_field('collage_image_3'); if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid img-home-collage img" />
                            <div class="overlay">
                                <div class="textover"><?php echo $image['caption']; ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-3 order-lg-3" data-aos="fade-up">
                    <div class="box h-100">
                        <?php $image = get_field('collage_image_4'); if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid img-home-collage img" />
                            <div class="overlay">
                                <div class="textover"><?php echo $image['caption']; ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-3 order-lg-4" data-aos="fade-up">
                    <div class="box h-100">
                    <?php $image = get_field('collage_image_5'); if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid img-home-collage img" />
                        <div class="overlay">
                            <div class="textover"><?php echo $image['caption']; ?></div>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-3 order-lg-1 my-auto p-4" data-aos="fade-up">
                    <?php the_field('collage_content_2'); ?>
                </div>
            </div>
        </div>
    </section> <!-- collapse -->

    <section class="mt-60" data-aos="fade-up">
        <?php echo do_shortcode('[stayhome]'); ?>
    </section><!-- about Villa -->

    <section class="mt-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9" data-aos="fade-up">
                    <h2 class="text-blue mb-4">Destination Guide & Highlights</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12" data-aos="fade-up">
                    <div class="carousel" data-flickity='{ "contain": true, "groupCells": true, "pageDots": false, "imagesLoaded": true }'>
						<?php echo_post_destination(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Experience -->

    <section class="mt-60">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-8 order-lg-2 ps-md-1 p-0" data-aos="fade-up">
                   <?php the_field('google_map', 'option'); ?>                   
                </div>
                <div class="col-12 col-md-4 order-lg-1 bg-red text-white p-4 p-md-5 m-0 my-auto" data-aos="fade-up">
                    <h2>Location</h2>
                    <?php the_field('location', 'option'); ?>
                </div>
            </div>
        </div>
    </section><!-- location & map -->

    <section data-jarallax="" data-speed="0.2" class="bg-parallax"></section>

    <section class="bg-red py-8 text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3" data-aos="fade-up">
                    <h4>Why Book with Us?</h4>
                    <p>Reasons why Nakula is the #1 villa rental service in Bali!</p>
                </div>
                <div class="col-12 col-md-9">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-2">
                        <div class="col d-flex align-items-start mb-3" data-aos="fade-up">
                            <i class="ic-payment flex-shrink-0 me-3"></i>
                            <div>
                            <h4>Guaranteed Best Rates</h4>
                            <p>Book directly with us and secure the best available rates for our villas.</p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start mb-3" data-aos="fade-up">
                            <i class="ic-combfast flex-shrink-0 me-3"></i>
                            <div>
                                <h4>Complimentary Daily Breakfast</h4>
                                <p>Indulge in our Chef's exclusive complimentary daily breakfast, crafted just for you.</p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start mb-3" data-aos="fade-up">
                            <i class="ic-plane flex-shrink-0 me-3"></i>
                            <div>
                            <h4>Complimentary Airport Transfer*</h4>
                            <p>Experience a hassle-free stay with complimentary airport transfer service *t&amp;c applied</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section><!--Why Book with us-->
    

    <section class="bg-ig pt-100 pb-100">
        <div class="container mb-5" data-aos="fade-up">
            <h2 class="text-blue mb-4">Our Instagram</h2>
            <p>Reach out our Instagram Account @pulangbali!</p>
            <a href="https://www.instagram.com/pulangbali/" class="btn btn-outline-red rounded-0">Follow Us</a>
        </div>
        <div class="container-fluid p-0" data-aos="fade-up">
			<?php echo do_shortcode('[instagram-feed feed=1]'); ?>   
        </div>
    </section><!--IG Feed-->
    
    <section class="bg-discover text-white">
        <div class="bg-discover-gardient">
            <div class="container my-auto" data-aos="fade-up">
                <h2>Discover All<br />Our Luxury Villas</h2>
                <a href="https://nakula.com" class="btn btn-outline-light rounded-0">Visit Nakula.com</a>
            </div>
        </div>
    </section>
    
<?php echo_directions(); ?>
<?php
get_footer();