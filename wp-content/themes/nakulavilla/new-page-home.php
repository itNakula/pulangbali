<?php
/*Template Name: New Homepage*/

get_header();
?>
    <!-- Modal -->
    <!-- <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-dow">
            <div class="modal-content bg-transparent border border-0">
                <div class="modal-body" style="padding: 0px;">
                    <button type="button" class="btn-close bg-white position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close"></button>
                    <a href="https://book-directonline.com/properties/PulangVillasPererenanbyNakulaDIRECT">
                    <img src="<?php //echo get_template_directory_uri(); ?>/img/Pulang-Villas-Offer-april2025.jpg" alt="Free airport transport" class="img-fluid" />
                    </a>
                    <div class="position-absolute bottom-0 start-50 translate-middle-x p-4">
                    <a class="btn btn-light" href="https://book-directonline.com/properties/PulangVillasPererenanbyNakulaDIRECT">Book Now</a> 
                    </div>
                </div>
            </div>
        </div>
    </div> -->

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

    <!-- START OFFERS -->
    <section class="section-offers">
        <div class="container">
            <div class="row h-section">
                <div class="col">
                    <h2>Offers & Packages</h2>
                </div>
                <div class="col col-link">
                    <a href="https://pulangbali.com/offers/">
                        View all offers
                        <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="row">
                <div id="offers-home" class="list-offer">
                    <div class="item-offers">
                        <div class="item-offer-detail">
                            <a href="https://pulangbali.com/room-breakfast">
                                <div class="item-offer-thumb" style="background-image: url(https://pulangbali.com/wp-content/uploads/2025/06/rb-342x369-1.webp)">
                                </div>
                                <div class="item-offer-name">                                
                                    <h3>Room & Breakfast</h3>                                
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="item-offers">
                        <div class="item-offer-detail">
                            <a href="https://pulangbali.com/stay-4-pay-3/">
                                <div class="item-offer-thumb" style="background-image: url(https://pulangbali.com/wp-content/uploads/2025/05/Thumb-home_Room_Pulang_342x369.jpg)">
                                </div>
                                <div class="item-offer-name">                                
                                    <h3>Stay 4 Pay 3</h3>                                
                                </div>
                            </a>
                        </div>
                    </div> -->
                     <!--
                    <div class="item-offers">
                        <div class="item-offer-detail">
                            <a href="https://pulangbali.com/stay-longer-save-bigger">
                                <div class="item-offer-thumb" style="background-image: url(https://pulangbali.com/wp-content/uploads/2025/05/Thumb-home_Room_Sara_342x369.jpg)">
                                </div>
                                <div class="item-offer-name">
                                    <h3>Stay Longer, Save Bigger</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item-offers">
                        <div class="item-offer-detail">
                            <a href="https://amartaretreat.com/last-minute-promo">
                                <div class="item-offer-thumb" style="background-image: url(https://amartaretreat.com/wp-content/uploads/2025/05/wdding-thumb.jpg)">
                                </div>
                                <div class="item-offer-name">
                                    <h3>Wedding Package at Amarta Beach Reatreat</h3>
                                </div>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- END OFFERS -->

    <section class="mt-60" data-aos="fade-up">
        <?php echo do_shortcode('[stayhome]'); ?>
    </section><!-- about Villa -->

    <!-- <section class="mt-60">
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
    </section> -->
    <!-- Experience -->

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

    <section class="bg-red text-white section-why-book-us">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 header-why-book-us text-center">
                    <h3>Why Book with Us?</h3>
                    <p>Reasons why Nakula is the #1 villa rental service in Bali!</p>
                </div>
                <div class="col-12 col-md-12 detail-why-book-us">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 g-2">
                        <div class="col d-flex align-items-start mb-3 item-why-book-us">
                            <i class="ic-payment flex-shrink-0 me-3"></i>
                            <div>
                            <h5>Guaranteed Best Rates</h5>
                            <p>Book directly with us and secure the best available rates for our villas.</p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start mb-3 item-why-book-us">
                            <i class="ic-combfast flex-shrink-0 me-3"></i>
                            <div>
                                <h5>Complimentary Daily Breakfast</h5>
                                <p>Indulge in our Chef's exclusive complimentary daily breakfast, crafted just for you.</p>
                            </div>
                        </div>
                        <!--<div class="col d-flex align-items-start mb-3 item-why-book-us">
                            <i class="ic-plane flex-shrink-0 me-3"></i>
                            <div>
                            <h5>Complimentary Airport Transfer*</h5>
                            <p>Experience a hassle-free stay with complimentary airport transfer service *t&c applied</p>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="col-12 col-md-12 col-learn-more">
                    <a href="https://nakula.com" class="link-learn-more">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!--Why Book with us-->
    

    <section class="bg-ig pt-100 pb-100">
        <div class="container mb-5" data-aos="fade-up">
            <h2 class="text-blue mb-4">Our Instagram</h2>
            <p>Reach out our Instagram Account @pulangvillas</p>
            <a href="https://www.instagram.com/pulangvillas/" class="btn btn-outline-red rounded-0">Follow Us</a>
        </div>
       <!-- <div class="container-fluid p-0" data-aos="fade-up">
			<?php echo do_shortcode('[instagram-feed feed=1]'); ?>   
        </div> -->
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
