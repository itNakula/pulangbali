<?php
/*Template Name: Page Contact*/

get_header();
?>
	<section class="mt-120">
    	<div class="container">
    		<div class="row">
      			<div class="col-md-8 offset-md-2">				
    				<h1 class="text-blue" data-aos="fade-up"><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
    		</div>
    	</div>
    </section>

<?php
get_footer();
