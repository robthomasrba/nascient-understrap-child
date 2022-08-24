
<?php if ( have_rows( 'sub_banner_with_image' ) ) : ?> 

	<?php while ( have_rows( 'sub_banner_with_image' ) ) : the_row(); ?>

    <?php $section_background_image = get_sub_field( 'section_background_image' ); ?>
		<?php if ( $section_background_image ) : ?>
            <div class="sub-banner-w-img d-flex align-items-center mb-5" style="background: url('<?php echo esc_url( $section_background_image['url'] ); ?>') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;;">

		<?php endif; ?>
        <img class="banner-shape" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/yellow-blue-overlay.svg' ); ?>" alt="Yellow and Blue Overlay" width="" />
        <div class="container position-relative">

            <div class="row mb">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <h1><?php the_sub_field( 'section_title' ); ?></h1>
                    
                    <?php the_sub_field( 'section_content' ); ?>
                </div>
            </div>
            
        </div>
    </div>
	<?php endwhile; ?>
    
<?php endif; ?>

