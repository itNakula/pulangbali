<?php
/*Template Name: Page Experience*/

get_header();
?>

<section class="bg-experience" data-jarallax="" data-speed="0.2">
    <div class="jumbotron d-flex flex-column min-vh-100 bg-home-gradient text-white">
        <div class="contaniner p-0 overflow-hidden">
            <div class="row">
                <div class="col-12">
                    <div class="jumbotron d-flex flex-column px-4 px-md-5 py-8 justify-content-end vh-100 bg-gradient-left text-white">
                        <div class="row">
                            <div class="col-md-5" data-aos="fade-up">
                                <?php while ( have_posts() ) : the_post(); ?>
                                <h1><?php the_title(); ?></h1>
                                    <?php the_excerpt(); ?>
                                <?php endwhile; ?>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- bg Home -->

<?php while ( have_posts() ) : the_post(); ?>
<div data-aos="fade-up">
    <?php the_content(); ?>
</div>
<?php endwhile; ?>

<section class="mt-100 mb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <h2 class="text-blue">Destination Guides &amp; Highlight</h2>
            </div>
            <div class="col-md-12 mt-40" data-aos="fade-up">
                <div class="carousel" data-flickity='{ "contain": true, "groupCells": true, "pageDots": false, "imagesLoaded": true }'>
                    <?php echo_post_destination(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo_directions(); ?>
<?php
get_footer();