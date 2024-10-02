<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NakulaVilla
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="fixed-top <?php the_field('header_setting'); ?>" id="hight-top">
	<nav class="navbar navbar-expand-lg navbar-togglable navbar-dark">
		<div class="container mobrmgtr">
			<!-- Navbar toggler -->
			<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span> <span class="mnmob">Menu</span>
			</button>

			<!-- Navbar brand (mobile) -->
			<a class="navbar-brand d-lg-none" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php if( get_field('logo_1', 'option') ): ?>
					<img src="<?php the_field('logo_1', 'option'); ?>" alt="logo nakula villas" height="38" />
				<?php else: ?>
					<h4>Villa Pulang Bali</h4>
				<?php endif; ?>
			</a>

			<a class="d-lg-none nav-link btn btn-outline-light rounded-0 fbmob" href="#">Book Now</a>
			

			<!-- Navbar collapse -->
			<div class="navbar-collapse collapse" id="navbarCollapse" >
		
				<!-- Navbar nav -->
				<?php
					wp_nav_menu(array(
						'menu'           => 'menu-left',
						'theme_location' => 'menu-left',
						'depth'          => 3,
						'container'      => false,
						'menu_class'     => 'navbar-nav d-lg-flex col-lg-5 justify-content-lg-start',
						'walker'         => new bootstrap_5_wp_nav_menu_walker()
					));
				?>
				
				<!-- Navbar brand -->
				<a class="navbar-brand d-none d-lg-flex mx-lg-auto mx-lg-auto col-lg-2 justify-content-lg-center" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php if ( get_field('logo_1', 'option') ): ?>
						<img src="<?php the_field('logo_1', 'option'); ?>" alt="logo nakula villas" height="50">
					<?php else: ?>
						<h1>Villa Pulang Bali</h1>
					<?php endif; ?>
				</a>
		
				<!-- Navbar nav -->
				<?php
					wp_nav_menu(array(
						'menu'           => 'menu-right',
						'theme_location' => 'menu-right',
						'depth'          => 3,
						'container'      => false,
						'menu_class'     => 'navbar-nav d-lg-flex col-lg-5 justify-content-lg-end',
						'walker'         => new bootstrap_5_wp_nav_menu_walker()
					));
				?>

				<?php
					// wp_nav_menu(array(
					// 	'menu'           => 'mobile',
					// 	'theme_location' => 'mobile',
					// 	'depth'          => 3,
					// 	'container'      => false,
					// 	'menu_class'     => 'navbar-nav d-lg-flex col-lg-5 justify-content-lg-end d-lg-none',
					// 	'walker'         => new bootstrap_5_wp_nav_menu_walker()
					// ));				
				?>
			</div>
		</div>
	</nav>
	<header class="submenu-stay link-stay">
		<ul class="nav justify-content-center">
			<li class="nav-item">
              <a class="nav-link" href="/stay/#the-villa">The Villa</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/stay/#quick-facts">Quick Facts</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/stay/#rates">Rates & Availability</a>
          </li> 
          <li class="nav-item">
              <a class="nav-link" href="/stay/#reviews">Reviews</a>
          </li>   
		</ul>
	</header>
</div>