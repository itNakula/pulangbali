<?php

/*Template Name: Page Offer*/

get_header();
?>
	<section class="bg-offers" data-jarallax="" data-speed="0.2">
        <div class="jumbotron d-flex flex-column min-vh-100 bg-home-gradient text-white">
            <div class="contaniner p-0 overflow-hidden">
                <div class="row">
                    <div class="col-12">
                        <div class="jumbotron d-flex flex-column px-4 px-md-5 py-8 justify-content-end vh-100 bg-gradient-left text-white">
                            <div class="row ">
                                <div class="col-md-5">
									<?php while ( have_posts() ) : the_post(); ?>
										<h1 class="fs-1" data-aos="fade-up"><?php the_title(); ?></h1>
										<?php the_content(); ?>
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
		<hr class="style-eight">
            <h2 class="text-blue text-center"><?php //the_title(); ?></h2>
			<?php if( get_field('image_offer_1') ): ?> 
        	<div class="row text-center mt-60" data-aos="fade-up">
            	
				
				<div class="col-md-7 order-lg-2 mb-4">    
				<img src="<?php the_field('image_offer_1'); ?>" class="img-fluid" alt="" />
                </div>
				<?php endif; ?>
				<?php if( get_field('main_offer') ): ?>    	
		        <div class="col-md-5 order-lg-1 d-flex align-content-center justify-content-center flex-wrap border-top border-bottom p-4 text-center">
                   <?php the_field('main_offer'); ?>
		        </div>
				
        	</div>    
			<?php endif; ?>
			<?php if( get_field('offer_multiple') ): ?>
        	<div class="row mt-60 mb-60">
				<?php if( have_rows('offer_multiple') ): $i = 0; ?>
        		    <?php while ( have_rows('offer_multiple') ): the_row();
					
					$image = get_sub_field('image_offer');
					
					?>
        				    
            			<div class="col-md-6 mb-4" data-aos="fade-up">
            			    
                            <img src="<?php echo $image['url']; ?>" class="img-fluid mb-3" alt="<?php echo $image['alt']; ?>" />
            			    <?php the_sub_field('text_offer'); ?>
            		    </div>
        			<?php $i++; endwhile; ?>
				<?php endif; ?>
        	</div>	
			
			<?php endif; ?>
    	</div>
    </section>

<?php
get_footer();
