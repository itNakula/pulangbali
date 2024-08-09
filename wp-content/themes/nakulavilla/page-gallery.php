<?php
/*Template Name: Page Gallery*/

get_header();
?>
	<section class="mt-120">
    	<div class="container">
    		<div class="row">
    			<div class="col-12 text-center" data-aos="fade-up">				
    				<h1 class="text-blue"><?php the_title(); ?></h1>
    				<p data-aos="fade-up"><?php the_content(); ?></p>					
    			</div>
    			
    			<div class="col-12 my-5" data-aos="fade-up">
					<div class="dropdown d-lg-none">
						<ul class="btn btn-outline-dark dropdown-toggle list-unstyled w-100 hide-caret text-start border border-dark rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<li role="presentation" class=""> <a href="#" class="dropdown-toggle" id="drop4" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> View All</a>
								<ul class="dropdown-menu" id="menu1" aria-labelledby="drop4">
									<?php if( have_rows('category') ): $i = 0; ?>
						<?php while ( have_rows('category') ): the_row(); ?>
						<li class="nav-item">
							
						<a class="nav-link <?php if($i == 0) echo 'active'; ?> px-4" id="<?php the_sub_field('id'); ?>" onclick="call(this.id)"><?php the_sub_field('title_category'); ?></a>
						</li>
						<?php $i++; endwhile; ?>
						<?php endif; ?>
								</ul>
							</li>
						</ul>
					</div>
		
					<ul class="nav tabpill justify-content-center mb-5 d-none d-lg-flex">
					    
                        <?php if( have_rows('category') ): $i = 0; ?>
						    <?php while ( have_rows('category') ): the_row(); ?>
						    <li class="nav-item">
<a class="nav-link px-4 <?php if ($i==0) {echo "active";} ?>" id="<?php the_sub_field('id'); ?>" onclick="call(this.id)"><?php the_sub_field('title_category'); ?></a>
						        
						    </li>
						<?php $i++; endwhile;?>
						<?php endif; ?>
					</ul>
    			
					<div class="row mt80 mb-100">
					
					<?php while ( have_posts() ) : the_post(); ?>
						<?php $images = get_field('gallery'); if( $images ):  ?>
								
						
							<?php foreach( $images as $image ): ?>
		
								<a href="<?php echo $image['url']; ?>" data-fancybox="gallery" class="gallery_product col-sm-6 col-lg-4 mb-4 filter <?php echo $image['title']; ?>" data-caption="<?php echo $image['caption']; ?>">
									<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
								</a><?php $counter++; if($counter % 3 === 0) : endif; ?>
							<?php endforeach; ?>
						
		
						<?php endif; ?>
					<?php endwhile; ?>
					</div>
				</div>
    		</div>
    	</div>
    </section>

<?php
get_footer();
