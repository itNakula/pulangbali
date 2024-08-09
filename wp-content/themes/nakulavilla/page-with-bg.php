<?php

/*Template Name: Page Offer*/

get_header();
?>
	<section class="bg-offers" data-jarallax="" data-speed="0.2" style="background-image: url('<?php the_field('image_bg'); ?>');">
        <div class="jumbotron d-flex flex-column min-vh-100 bg-home-gradient text-white">
            <div class="contaniner p-0 overflow-hidden">
                <div class="row">
                    <div class="col-12">
                        <div class="jumbotron d-flex flex-column px-4 px-md-5 py-8 justify-content-end vh-100 bg-gradient-left text-white">
                            <div class="row ">
                                <div class="col-md-5">
									<?php while ( have_posts() ) : the_post(); ?>
										<h1 class="fs-1" data-aos="fade-up"><?php the_title(); ?></h1>
										
									<?php endwhile; ?>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- bg Home -->
	
	
	<section class="mt-60">
    	<div class="container">
		<?php the_content(); ?>
    	</div>
    </section>

<?php
get_footer();
