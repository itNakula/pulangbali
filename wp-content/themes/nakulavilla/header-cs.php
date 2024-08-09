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
	<nav class="navbar navbar-expand-lg navbar-togglable fixed-top bg-white" style="height: 105px;">
	<!--<nav class="navbar navbar-expand-lg navbar-togglable fixed-top absolute">-->
		<div class="container mobrmgtr">

			<!-- Navbar brand (mobile) -->
			<a class="navbar-brand d-lg-none" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php if( get_field('logo_2', 'option') ): ?>
					<img src="<?php the_field('logo_2', 'option'); ?>" alt="logo nakula villas" width="38">
				<?php else: ?>
					<!--<img src="<?php //echo get_template_directory_uri(); ?>/img/logo-nakula.png" alt="logo nakula villas" width="38">-->
					<h1>Villa Pulang by Nakula</h1>
				<?php endif; ?>
			</a>

			<!-- Navbar collapse -->
			<div class="navbar-collapse collapse" id="navbarCollapse" >
				<!-- Navbar brand -->
				<a class="navbar-brand d-none d-lg-flex mx-lg-auto" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php if( get_field('logo_2', 'option') ): ?>
						<img src="<?php the_field('logo_2', 'option'); ?>" alt="logo nakula villas" height="75">
					<?php else: ?>
						<!--<img src="<?php// echo get_template_directory_uri(); ?>/img/logo-nakula.png" alt="logo nakula villas" width="58">-->
						<h1>Villa Pulang by Nakula</h1>
					<?php endif; ?>
				</a>
			</div>
		</div>
	</nav>