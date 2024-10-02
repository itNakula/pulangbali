<?php
/**
 * NakulaVilla functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NakulaVilla
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nakulavilla_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on NakulaVilla, use a find and replace
		* to change 'nakulavilla' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'nakulavilla', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'post-custom', 777, 480, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'nakulavilla' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'nakulavilla_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'nakulavilla_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nakulavilla_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nakulavilla_content_width', 640 );
}
add_action( 'after_setup_theme', 'nakulavilla_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nakulavilla_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nakulavilla' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nakulavilla' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nakulavilla_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nakulavilla_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', _S_VERSION );
	wp_enqueue_style( 'flickity', 'https://unpkg.com/flickity@2/dist/flickity.min.css' );
	wp_enqueue_style( 'nakulavilla-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/fancybox.css', _S_VERSION );
	wp_enqueue_style( 'aoscss', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
	wp_style_add_data( 'nakulavilla-style', 'rtl', 'replace' );
    wp_enqueue_script( 'jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js' );
    wp_enqueue_script( 'fbengine1-js', get_template_directory_uri() . '/js/fbparam.js' );
	wp_enqueue_script( 'fbengine2-js', get_template_directory_uri() . '/js/fblib.js' );
	wp_enqueue_script( 'nakulaflickityhotel-js', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js' );
	wp_enqueue_script( 'nakulajarralaxhotel-js', 'https://cdn.jsdelivr.net/npm/jarallax@2/dist/jarallax.min.js' );
	wp_enqueue_script( 'nakulafancyhotel-js', get_template_directory_uri() . '/js/fancybox.umd.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'nakulapopperhotel-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js' );
	wp_enqueue_script( 'aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js' );
	wp_enqueue_script( 'nakulabootstraphotel-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true );	
	wp_enqueue_script( 'nakulavilla-js', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'sm-js', 'https://widget.siteminder.com/ibe.min.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nakulavilla_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
//remove_filter( 'acf_the_content', 'wpautop' );

require_once('bootstrap-5-wordpress-navbar-walker.php');


function get_boxpage($atts) {
	extract( shortcode_atts( array
	('pageid' => get_the_ID(),
	'orderby'=> 'rand', 
	'order' => 'desc'
    ), 
	$atts ) 
	);
	query_posts(array( 'post_type' =>'room','posts_per_page' => 1, 'orderby' => $orderby, 'order' => $order ) );
	global $more;
	$more = 0; 
?>
  	
	<?php while  (have_posts()) : the_post(); ?>
		<div class="container py-3">
			<div class="row">
				<div class="col-12 col-md-9">
					<h2 class="text-blue mb-4"><?php the_title(); ?></h2>
				</div>
				<!--<div class="col-12 col-md-3 my-auto">Previous Next</div>-->
			</div>
		</div><!-- container -->

		<div class="carousel" data-flickity='{"contain": true, "groupCells": false, "pageDots": false, "imagesLoaded": true, "imagesLoaded": true}'>
			
			<?php
				$count = 0; 
				if( have_rows('villa_image') ){ while ( have_rows('villa_image') ){ the_row();
				$image = get_sub_field('image');
				if( !empty($image) ):
			?>

			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid img-square pe-1" width="660">
			
			<?php 
				endif; $count=$count+1; } }
			?>
		</div><!-- carousel -->

		<div class="container pt-40">
			<div class="row">
				<div class="col-12 col-md-6 pe-5 mb-4" data-aos="fade-up">
					<h3 class="text-blue">The Property</h3>
					<?php the_field('villa_description'); ?>
					<a href="<?php the_permalink(); ?>" class="btn btn-outline-red rounded-0">See Room</a>            
				</div>
				<div class="col-12 col-md-6 mb-4" data-aos="fade-up">
					<h3 class="text-blue">Facilities</h3>
					<div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-lg-3 g-2">
						<?php the_field('facilities_homepage'); ?>
					</div>
				</div>
			</div>
		</div>		
	<?php endwhile; wp_reset_query();  ?>

<?php  } 
function cleanboxpageloop($atts){
	ob_start();
	get_boxpage($atts);
	$output_string=ob_get_contents();
	ob_end_clean();
	return $output_string;
}
add_shortcode('stayhome', 'cleanboxpageloop');


/**/

function get_boxexperience2($atts) {
	extract( shortcode_atts( array(
		'pageid' => get_the_ID(),
		'orderby'=> 'date',
		'order' => 'asc',),
		$atts, 'chef' ) 
	);
	query_posts(array( 
		'post_type' =>'experience', 
		'page_id' => 76,
		'orderby' => $orderby, 
		'order' => $order, 
		'posts_per_page' => 100,
		'paged' => $paged,
		) 
	);
	global $more;
	$more = 0; 
?>

<?php while  (have_posts()) : the_post(); ?>
		
	<section class="mb-8">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
				<?php the_post_thumbnail('post-custom', array('class' => 'img-fluid img-square')); ?>				
				</div>
				<div class="col-md-5 my-auto p-5">
					<h2 class="text-blue"><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>

<?php endwhile; wp_reset_query();  ?>

<?php  } 
function cleanboxexperience2loop($atts){
	ob_start();
	get_boxexperience2($atts);
	$output_string=ob_get_contents();
	ob_end_clean();
	return $output_string;
}
add_shortcode('chef', 'cleanboxexperience2loop');

function get_boxexperience3($atts) {
	extract( shortcode_atts( array(
		'pageid' => get_the_ID(),
		'orderby'=> 'date',
		'order' => 'asc',),
		$atts, 'family' ) 
	);
	query_posts(array( 
		'post_type' =>'experience', 
		'page_id' => 77,
		'orderby' => $orderby, 
		'order' => $order, 
		'posts_per_page' => 100,
		'paged' => $paged,
		) 
	);
	global $more;
	$more = 0; 
?>

<?php while  (have_posts()) : the_post(); ?>
		
	<section class="mb-8">
		<div class="container">
			<div class="row">
				<div class="col-md-5 my-auto p-5">
					<h2 class="text-blue mb-4"><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
				<div class="col-md-7">
					<?php the_post_thumbnail('post-custom', array('class' => 'img-fluid img-square')); ?>
				</div>				
			</div>
		</div>
	</section>

<?php endwhile; wp_reset_query();  ?>

<?php  } 
function cleanboxexperience3loop($atts){
	ob_start();
	get_boxexperience3($atts);
	$output_string=ob_get_contents();
	ob_end_clean();
	return $output_string;
}
add_shortcode('family', 'cleanboxexperience3loop');

function get_boxexperience($atts) {

	extract( shortcode_atts( array(
		'pageid' => get_the_ID(),
		'orderby'=> $ids,
		'order' => 'ASC',),
		$atts, 'homeexperience' ) 
	);
	query_posts(array( 
		'post_type' =>'experience', 
		'orderby' => $orderby, 
		'order' => $order,
		'posts_per_page' => 4,
		'paged' => $paged,
		) 
	);
	global $more;
	$more = 0; 
?>

<?php while  (have_posts()) : the_post(); ?>
		
	<div class="w-100 px-2" style="max-width: 390px;">
		<div class="card border-0">
			<?php the_post_thumbnail('full', array('class' => 'img-fluid img-square')); ?>
			<div class="card-body px-0">
				<h4 class="text-blue"><?php the_title(); ?></h4>
				<?php the_content(); ?>
			</div>
		</div>
	</div>

<?php endwhile; wp_reset_query();  ?>

<?php  } 
function cleanboxexperienceloop($atts){
	ob_start();
	get_boxexperience($atts);
	$output_string=ob_get_contents();
	ob_end_clean();
	return $output_string;
}
add_shortcode('homeexperience', 'cleanboxexperienceloop');

function experiences($atts) {
		$a = shortcode_atts( array(
			'posts_per_page' => '',
			'experience_id'  =>  ''
		), $atts );

		$experiences = '';
		$post_in = esc_attr($a['experience_id']);
		$posts_per_page = esc_attr($a['posts_per_page']);

		$post_artay = explode(',', $post_in);
		$args = array(
			'post__in' => $post_artay,
			'posts_per_page' => $posts_per_page,
			'post_type'        => 'experience',
			'order_by' => 'post__in',
		);
		
		$the_query = new WP_Query( $args );
		
		if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post(); 

		ob_start();
		
		?>

			<section class="mt-100">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<h2 class="text-blue mt-8"><?php the_title(); ?></h2>
					<div class="row">
								<div class="col-md-8 offset-md-1 align-self-center">
									<div class="bg-acti-1"><?php the_content(); ?>
									</div>
								</div>
							</div>
						</div> 
						<div class="col-md-7">
							<?php the_post_thumbnail('post-custom', array('class' => 'img-fluid img-square')); ?>
						</div>
					</div>
				</div>
			</section>
		
		<?php
			$output = ob_get_clean();
			endwhile; endif; return $output;
  	}

	add_shortcode('experience1', 'experiences');

function experiences2($atts) {
		$a = shortcode_atts( array(
			'posts_per_page' => '',
			'experience_id'  =>  ''
		), $atts );

		$experiences2 = '';
		$post_in = esc_attr($a['experience_id']);
		$posts_per_page = esc_attr($a['posts_per_page']);

		$post_artay = explode(',', $post_in);
		$args = array(
			'post__in' => $post_artay,
			'posts_per_page' => $posts_per_page,
			'post_type'        => 'experience',
			'order_by' => 'post__in',
		);
		
		$the_query = new WP_Query( $args );
		
		if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post(); 

		ob_start();
		
		?>

			<section class="mt-20">
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<?php the_post_thumbnail('post-custom', array('class' => 'img-fluid img-square')); ?>
						</div>

						<div class="col-md-5 my-auto p-5">
							<h2 class="text-blue"><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</div>					
					</div>
				</div>
			</section>
		
		<?php
			$output = ob_get_clean();
			endwhile; endif; return $output;
  	}

	add_shortcode('experience2', 'experiences2');
	
	function experiences3($atts) {
		$a = shortcode_atts( array(
			'posts_per_page' => '',
			'experience_id'  =>  ''
		), $atts );

		$experiences3 = '';
		$post_in = esc_attr($a['experience_id']);
		$posts_per_page = esc_attr($a['posts_per_page']);

		$post_artay = explode(',', $post_in);
		$args = array(
			'post__in' => $post_artay,
			'posts_per_page' => $posts_per_page,
			'post_type'        => 'experience',
			'order_by' => 'post__in',
		);
		
		$the_query = new WP_Query( $args );
		
		if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post(); 

		ob_start();
		
		?>

			<section class="mt-100">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php the_post_thumbnail('full', array('class' => 'img-fluid img-square')); ?>
						</div>
                    </div>

					<div class="row">
					    <div class="col-md-3 my-auto">
							<h2 class="text-blue"><?php the_title(); ?></h2>
                        </div>
					    <div class="col-md-9 my-auto p-5">
                            <?php the_content(); ?>
						</div>					
					</div>
				</div>
			</section>
		
		<?php
			$output = ob_get_clean();
			endwhile; endif; return $output;
  	}

	add_shortcode('experience3', 'experiences3');
	
	function echo_post_destination() {    
		wp_reset_query(); 
		$count = 0; 
		$args = array('post_type' => 'highlight', 'group' => 'destination', 'orderby' => 'ID', 'order' => 'desc');
		$event_loop = new WP_Query($args);
		if($event_loop->have_posts()):while($event_loop->have_posts()):$event_loop->the_post();
		?>
			
			<div class="w-100 px-2" style="max-width: 390px;">
				<div class="card border-0">
					<?php the_post_thumbnail('full', array('class' => 'img-fluid img-square')); ?>
					<div class="card-body px-0">
						<h4 class="text-blue fw-light"><?php the_title(); ?></h4>
						<?php the_content(); ?>
						<p>
						    <a class="btn btn-outline-red rounded-0" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?php the_ID(); ?>">Get Directions</a>
						</p>
					</div>
				</div>
				<?php //the_field('modal_popup'); ?>
			</div>

	
		<?php endwhile; endif; ?>
		<?php
	}
	
	
	function echo_post_experience() {    
		
		$args = array('post_type' => 'highlight', 'group' => 'experience', 'orderby' => 'ID', 'order' => 'desc');
		$event_loop = new WP_Query($args);
		if($event_loop->have_posts()):while($event_loop->have_posts()):$event_loop->the_post();
		?>
			
			<div class="w-100 px-2" style="max-width: 390px;">
				<div class="card border-0">
					<?php the_post_thumbnail('full', array('class' => 'img-fluid img-square')); ?>
					<div class="card-body px-0">
						<h4 class="text-blue fw-light"><?php the_title(); ?></h4>
						<?php the_content(); ?>
						<a href="/experiences/#<?php the_ID(); ?>" class="btn btn-outline-red rounded-0">More Info</a>
					</div>
				</div>
			</div>
	
		<?php wp_reset_query(); endwhile; endif; ?>
		<?php
	}

	function experiencesnew($atts) {
		$a = shortcode_atts( array( 'posts_per_page' => '', 'highlight_id'  => '' ), $atts );
	
			$experiencesnew = '';
			$post_in = esc_attr($a['highlight_id']);
			$posts_per_page = esc_attr($a['posts_per_page']);
	
			$post_artay = explode(',', $post_in);
			$args = array( 'post__in' => $post_artay, 'posts_per_page' => $posts_per_page, 'post_type' => 'highlight', 'group' => 'experience', 'order_by' => 'post__in',);
			
			$the_query = new WP_Query( $args );
			
			if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) : $the_query->the_post(); 
	
			ob_start();
			
			?>
	
			<section class="mob mt-60">
				<div class="container">
					<div class="row">
						<div class="col-md-4 d-flex align-content-center justify-content-center flex-wrap border-top border-bottom p-4 text-center">
							<h2 class="text-blue fw-light mt-4 fs-2"><?php the_title(); ?></h2>
							<?php the_content(); ?>
							<?php the_field('modal_popup'); ?>
						</div>
						
						<div class="col-md-8">
							<?php the_post_thumbnail('post-custom', array('class' => 'img-fluid img-square')); ?>
						</div>
					</div>
				</div>
			</section>
			
			<?php
				$output = ob_get_clean();
				endwhile; endif; return $output;
		}
	
	add_shortcode('experiencenew', 'experiencesnew');
	
	function experiencesnew2($atts) {
		$a = shortcode_atts( array( 'posts_per_page' => '', 'highlight_id'  => '' ), $atts );
	
			$experiencesnew2 = '';
			$post_in = esc_attr($a['highlight_id']);
			$posts_per_page = esc_attr($a['posts_per_page']);
	
			$post_artay = explode(',', $post_in);
			$args = array( 'post__in' => $post_artay, 'posts_per_page' => $posts_per_page, 'post_type' => 'highlight', 'group' => 'experience', 'order_by' => 'post__in',);
			
			$the_query = new WP_Query( $args );
			
			if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) : $the_query->the_post(); 
	
			ob_start();
			
			?>
	
			<section class="mob mt-60">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<?php the_post_thumbnail('post-custom', array('class' => 'img-fluid img-square')); ?>
						</div>
						<div class="col-md-4 d-flex align-content-center justify-content-center flex-wrap border-top border-bottom p-4 text-center">
							<h2 class="text-blue fw-light mt-4 fs-2"><?php the_title(); ?></h2>
							<?php the_content(); ?>
							<?php the_field('modal_popup'); ?>
						</div>
					</div>
				</div>
			</section>
			
			<?php
				$output = ob_get_clean();
				endwhile; endif; return $output;
		}
	
	add_shortcode('experiencenew2', 'experiencesnew2');

	function echo_directions() {    
		wp_reset_query(); 
		$id = get_the_ID();
		$args = array('post_type' => 'highlight', 'group' => 'destination', 'orderby' => 'ID', 'order' => 'desc');
		$event_loop = new WP_Query($args);
		if($event_loop->have_posts()):while($event_loop->have_posts()):$event_loop->the_post();
		?>
	
		<div id='exampleModal<?php the_ID(); ?>'; class="modal fade" tabindex="-1" aria-labelledby='exampleModal<?php the_ID() ?>Label' aria-hidden="true">
			<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">
						<h1 id='exampleModal<?php the_ID(); ?>Label' class="modal-title fs-5">Directions to <?php the_title(); ?></h1>
						<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-21by9">
							<iframe class="embed-responsive-item" src="<?php the_field('map_url'); ?>" width="100%" height="350"></iframe>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	
		<?php endwhile; endif; ?>
		
		<?php
	}

?>