<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="page-header-bigger">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php
		the_content();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->

	<div class="form">

	<?php if ( have_rows( 'career_form', 'option' ) ) : ?>
	<div class="container my-5 contact">
	<div class="row gx-0">

	<?php while ( have_rows( 'career_form', 'option' ) ) : the_row(); ?>

	<div class="col-sm-12 col-md-12 col-lg-4">
	<h2><?php the_sub_field( 'form_title' ); ?></h2>
	<p class="mt-3">
		<?php the_sub_field( 'form_content' ); ?>
	</p>
	
	</div>

	<div class="col-sm-12 col-md-12 col-lg-8">
		<div class="contact-form p-2 p-sm-2 p-md-5 p-lg-5">
			<?php the_sub_field( 'form_short_code' ); ?>
		</div>
	</div>
	
		<?php endwhile; ?>
		</div>
		</div>
	<?php endif; ?>
	</div>

				
	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
