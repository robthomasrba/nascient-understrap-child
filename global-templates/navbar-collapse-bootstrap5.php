<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<nav id="main-nav" class="navbar navbar-expand-md clear-nav" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</h2>


	<div class="<?php echo esc_attr( $container ); ?>">

		<a class="navbar-brand img-logo" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
			<img class="float-sm-none float-md-end" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/nc-logo.svg' ); ?>" alt="User Menu" width="" />
		</a>

		<a class="navbar-brand non-img-logo" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
			<img class="float-sm-none float-md-end" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/nascient-logo-package-rgb-02.svg' ); ?>" alt="User Menu" width="" />
		</a>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- The WordPress Menu goes here -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ms-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>

	</div><!-- .container(-fluid) -->

</nav><!-- .site-navigation -->
