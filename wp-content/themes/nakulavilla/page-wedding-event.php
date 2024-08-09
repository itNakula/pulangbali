<?php
/*Template Name: Wedding Event*/

get_header();
?>

    <section class="bg-celebrate" data-jarallax="" data-speed="0.2">
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
    
                    

    <section class="mt-40">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">

                    <ul class="nav tabpill justify-content-center mb-60" id="pills-tab" role="tablist">
                        <?php if( have_rows('info_event') ): $i = 0; while ( have_rows('info_event') ): the_row(); ?>    
                            <li class="nav-item" role="presentation">
                                <a class="nav-link <?php if ($i==0) {echo "active";} ?> px-4 subtitle text-blue" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-<?php echo $i; ?>" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><?php the_sub_field('title_event'); ?></a>
                            </li>
                        <?php $i++; endwhile; endif; ?>
                    </ul>
                    
                    <div class="tab-content" id="pills-tabContent">
                        <?php if( have_rows('info_event') ): $i = 0; while ( have_rows('info_event') ): the_row(); ?>    
                         <div class="tab-pane fade <?php if ($i==0) {echo "show active";} ?> " id="pills-<?php echo $i; ?>" role="tabpanel" aria-labelledby="pills-home-tab">
                            <p><?php the_sub_field('description_event'); ?></p>
                        </div>
                        <?php $i++; endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-60">
        <div class="container">
            <!-- Jumbotron -->
            <div class="text-center mb-5 text-white" style="background-image: url('https://puritempodoeloesanur.com/wp-content/uploads/2023/11/puri-tempo-doeloe-wedding-event.jpg');">
                <div class="pt-120 pb-120 bg-seasonal-offer-dark">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
						<?php the_field ('banner_content'); ?>
                    </div>
                </div>
                </div>
            </div>
            <!-- Jumbotron -->
        </div>
    </section>
    
    <section class="mt-100">
        <div class="container">
            <h2 class="text-blue mb-60">Wedding Gallery</h2>
        </div>
        <div class="carousel" data-flickity='{"contain": true, "groupCells": false, "pageDots": false, "imagesLoaded": true, "imagesLoaded": true}'>
		
		<?php
			$count = 0; 
			if( have_rows('slider') ){ while ( have_rows('slider') ){ the_row();
			$image = get_sub_field('image_slider');
			if( !empty($image) ):
		?>

		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid img-square pe-1" width="960">
		
		<?php 
			endif; $count=$count+1; } }
		?>
	</div><!-- carousel -->
    </section>

    <section class="bg-red text-white pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Featured Services</h2>
                    <p>Additional services provided by<br />Nakula Villa Management</p>
                </div>
                <div class="col-md-8">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 g-2">
                        <div class="col d-flex align-items-start mb-3 aos-init aos-animate" data-aos="fade-up"><i class="i-chef-white flex-shrink-0 me-3"></i>
                            <div><span class="subtitle">Catering</span>
                                <p>Create an unforgettable experience and make your special day even more magical with Villa Nelayan's premier catering services</p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start mb-3 aos-init aos-animate" data-aos="fade-up"><i class="i-decoration-white flex-shrink-0 me-3"></i>
                            <div><span class="subtitle">Decoration</span>
                                <p>Choose from a wide variety of decorations to make your wedding dreams come true. Make sure that every detail matches and that the whole ambience reflects your personality, style, and love story</p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start mb-3 aos-init aos-animate" data-aos="fade-up"><i class="i-entertaiment-white flex-shrink-0 me-3"></i>
                            <div><span class="subtitle">Entertainment</span>
                                <p>Experience an unforgettable event or wedding with the best entertainment in town. Get in touch with us now at Villa Nelayan</p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start mb-3 aos-init aos-animate" data-aos="fade-up"><i class="i-camera-white flex-shrink-0 me-3"></i>
                            <div><span class="subtitle">Photographer</span>
                                <p>Planning your dream wedding? Get beautiful, timeless photos you'll treasure for years to come. With a talented photographer by your side on the big day, you can be sure that the best moments of your special day will be captured</p>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    

    <section class="mt-80 mb-100 text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-blue text-center mb-60">Event & Wedding Enquiry<h2>
                </div>
                
            <div class="row">
                <div class="col-md-8 offset-md-2">
                        <?php echo do_shortcode('[forminator_form id="1003"]'); ?>
                </div>
            </div>
            </div>
        </div>
    </section>

<?php
get_footer();