<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
		
		<?php if ( is_front_page() ) : ?>
		
		<div class="jumbotron">
			<div class="entry-title">
			<div class="bio row mt-sm-4 mt-md-0">
				<div class="col-sm-12 col-md-4">
				<img src="http://www.candicedavidson.com/images/candice-wyn.jpg" alt="Candice Wyncode Academy">
				</div>
				<div class="col-sm-12 col-md-8 text-sm-center text-md-left">
				<h3>Hello, My name is Candice!</h3>
				<p class="lead">I am a Full-Stack Developer, based in Miami, FL, who is devoted to combining the art of design with functional programming.</p>
				</div>
			</div>
			</div>
		</div>

		<nav class="navbar navbar-expand-md">

				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => '',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav row justify-content-center',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
					
				<?php else : ?>

				<nav class="navbar navbar-expand-md">

					<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

					<?php wp_nav_menu(
					array(
						'theme_location'  => 'secondary-menu',
						'container_class' => '',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav row justify-content-center',
						'fallback_cb'     => '',
						'menu_id'         => 'second-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
				
				<?php endif; ?>
					
				

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
