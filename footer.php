<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-3">
			<img class="mb-4" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/dark-logo.svg' ); ?>" alt="Footer Logo" width="256" />

			<p>
				<img class="mb-4" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/phone.svg' ); ?>" alt="Footer Logo" width="" />
				424.346.8022
			</p>
			<p>
				<img class="mb-4" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/pin.svg' ); ?>" alt="Footer Logo" width="" />
				22287 Mulholland Highway #592
				Calabasas, CA 91302
			</p>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3">
				<h4>About</h4>
				<ul class="nav flex-column p-0 m-0">
					<li class="nav-item">
						<a class="nav-link" href="#">Humanity</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Team</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3">
			<h4>Solutions</h4>
			<ul class="nav flex-column p-0 m-0">
					<li class="nav-item">
						<a class="nav-link" href="#">Workforce</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Leadership &amp; Consulting</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Infrastructure Management</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3">
			<h4>insights</h4>
			<h4>contact</h4>
			<nav class="nav social-nav">
				<a class="nav-link" href="#">
					<img class="mb-4" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/insta.svg' ); ?>" alt="Instagram Logo" width="28" height="28" />
				</a>
				<a class="nav-link" href="#">
					<img class="mb-4" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/facebook.svg' ); ?>" alt="Facebook Logo" width="28" height="28" />
				</a>
				<a class="nav-link" href="#">
					<img class="mb-4" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/linkedin.svg' ); ?>" alt="LinkedIn Logo" width="28" height="28" />
				</a>
			</nav>
			</div>
		</div>
	</div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

