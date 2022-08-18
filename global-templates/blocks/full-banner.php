<?php if ( have_rows( 'full_banner_section' ) ) : ?>
    <div class="full-banner d-flex align-items-center">
    <img class="banner-shape" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/yellow-blue-overlay.svg' ); ?>" alt="Yellow and Blue Overlay" width="" />
	<?php while ( have_rows( 'full_banner_section' ) ) : the_row(); ?>
	
        <div class="container position-relative">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <h1 class="banner-h"><?php the_sub_field( 'banner_title' ); ?></h1>
                    <?php the_sub_field( 'banner_content' ); ?>

                    <?php $banner_button_link = get_sub_field( 'banner_button_link' ); ?>
                    <?php if ( $banner_button_link ) : ?>
                        <a class="btn btn-secondary text-uppercase" href="<?php echo esc_url( $banner_button_link); ?>"><?php the_sub_field( 'banner_button_label' ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
		
	<?php endwhile; ?>
    </div>
<?php endif; ?>