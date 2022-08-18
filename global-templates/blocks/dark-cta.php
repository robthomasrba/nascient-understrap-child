<?php if ( have_rows( 'dark_cta_section' ) ) : ?>
    <div class="dark-bg mt-5">
	<?php while ( have_rows( 'dark_cta_section' ) ) : the_row(); ?>
		<div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3"></div>
                <div class="col-sm-12 col-md-12 col-lg-6 text-center text-white">
                    <h2 class="text-white page-header mb-5"><?php the_sub_field( 'section_title' ); ?></h2>
                    <?php the_sub_field( 'section_content' ); ?>
                    <?php $section_button_link = get_sub_field( 'section_button_link' ); ?>
                    <?php if ( $section_button_link ) : ?>
                        <a class="btn btn-secondary text-white text-uppercase mt-5" href="<?php echo esc_url( $section_button_link); ?>"><?php the_sub_field( 'section_button_label' ); ?></a>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3"></div>
            </div>
        </div>
	<?php endwhile; ?>
    </div>
<?php endif; ?>
