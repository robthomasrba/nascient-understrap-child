<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-1"></div>
		<div class="col-sm-12 col-md-12 col-lg-11">
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<header class="entry-header">

					<p class="cat">
						<?php the_category() ?>
					</p>

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				</header><!-- .entry-header -->

				<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

				<div class="entry-content">

					<?php
					the_content();
					understrap_link_pages();
					?>

				</div><!-- .entry-content -->

				<footer class="entry-footer">

					<?php understrap_entry_footer(); ?>

				</footer><!-- .entry-footer -->

			</article><!-- #post-## -->
		</div>
	</div>
</div>
