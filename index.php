<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

    <div class="sub-banner-no-img py-5 position-relative">
        <lottie-player class="left-anima" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/animations/Left Pattern 1.json' ); ?>" background="transparent" speed="1" style="width: 427.26px; height: 599.97px;" loop autoplay></lottie-player>
            <div class="container">


    <div class="row mb-5">
        <div class="col-">
            <h3>
            <lottie-player class="" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/animations/workforce solutions icon.json' ); ?>" background="transparent" speed="1" style="width: 37.14px; height: 39.84px;" loop autoplay></lottie-player>    
            Insights
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-1"></div>
        <div class="col-sm-12 col-md-12 col-lg-8">
            <h1 class="page-header-bigger">Industry leading insights backed by experience</h1>
           <p>
		   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
		   </p>
        </div>
    </div>
            </div>
    </div>

	<div class="container mb-5">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php $loop = new WP_Query( array( 'post_type' => 'post', 'offset'=> 0, 'orderby' => 'post_id', 'order' => 'DSC', 'posts_per_page'=>'1' ) ); ?>

		<div class="row featured-post d-flex align-items-center">

		<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

		<div class="col-sm-12 col-md-12 col-lg-8 text-center">

		<a href="<?php the_permalink() ?>">  
			<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
			} else { ?>
			<img class="img-fluid" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/post-placeholder.jpg' ); ?>" alt="<?php the_title(); ?>" />
			<?php } ?>
		</a>

		</div>

		<div class="col-sm-12 col-md-12 col-lg-4">

			<h2>
				<span><?php the_category( ' ' ); ?></span>
				<a href="<?php the_permalink() ?>">
				<?php echo substr(the_title('', '', FALSE), 0, 84); ?>...</a>
			</h2>

				<p>
					<?php
						$char_limit = 270; //character limit
						$content = $post->post_content; //contents saved in a variable
						echo substr(strip_tags($content), 0, $char_limit);
					?> ...
				</p>
			
			<p><a href="<?php the_permalink() ?>" class="btn btn-secondary text-uppercase text-white">read more</a></p>

		</div>


		</div>

		<?php endwhile;
					wp_reset_query(); ?>

		</div><!-- end row -->

		</article><!-- #post-## -->

		
	</div>

	<div class="container">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php $loop = new WP_Query( array( 'post_type' => 'post', 'offset'=> 1, 'orderby' => 'post_id', 'order' => 'DSC', 'posts_per_page'=>'3' ) ); ?>

			<div class="row">

			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

			<div class="col-sm-12 col-md-12 col-lg-4 text-center small-post">

			<a href="<?php the_permalink() ?>">  
				<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
				} else { ?>
				<img class="img-fluid" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/post-placeholder.jpg' ); ?>" alt="<?php the_title(); ?>" />
				<?php } ?>
			</a>

				<h3 class="mt-3">
					<span><?php the_category( ' ' ); ?></span>
					<a href="<?php the_permalink() ?>">
						<?php echo substr(the_title('', '', FALSE), 0, 70); ?>...
					</a>
				</h3>
				<p>
					<?php
						$char_limit = 170; //character limit
						$content = $post->post_content; //contents saved in a variable
						echo substr(strip_tags($content), 0, $char_limit);
					?> ...
				</p>
				<p><a href="<?php the_permalink() ?>" class="btn btn-secondary text-uppercase text-white">read more</a></p>

			</div>

			<?php endwhile;
						wp_reset_query(); ?>

			</div><!-- end row -->

			</article><!-- #post-## -->
	</div>

<?php
get_footer();
