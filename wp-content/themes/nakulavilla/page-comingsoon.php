<?php
/**
 **Template Name: Page Coming Soon
 */

get_header('cs');
?>
	<section class="bg-home" data-jarallax="" data-speed="0.2">
        <div class="jumbotron d-flex flex-column min-vh-100 bg-home-gradient text-white">
            <div class="contaniner p-0 overflow-hidden">
                <div class="row">
                    <div class="col-12">
                        <div class="jumbotron d-flex flex-column px-4 px-md-5 py-8 justify-content-end vh-100 bg-gradient-left text-white">
                            <div class="row ">
                                <div class="col-md-5">
                                    <h1 data-aos="fade-up"><?php the_title(); ?></h1>
                                    <p data-aos="fade-up"><?php the_content(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- bg Home -->


<?php
get_footer('cs');
