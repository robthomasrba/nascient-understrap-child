<?php if ( have_rows( 'testimonial_section' ) ) : ?>
    <div class="testimonials-holder mt-5">
	<?php while ( have_rows( 'testimonial_section' ) ) : the_row(); ?>
		<div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="page-header text-white text-center"><?php the_sub_field( 'section_title' ); ?></h2>
                </div>
            </div>

            
		<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3"></div>
            <div class="col-sm-12 col-md-12 col-lg-6 text-center text-white">
                <?php if ( have_rows( 'section_testimonials' ) ) : ?>
                <?php while ( have_rows( 'section_testimonials' ) ) : the_row(); ?>
                    <?php the_sub_field( 'testimonial_content' ); ?>
                    <p>
                        <?php the_sub_field( 'testimonial_name' ); ?>
                    </p>
                <?php endwhile; ?>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3"></div>
        </div>
		
        <div class="row">
            <div class="col text-center">
            <?php $section_button_link = get_sub_field( 'section_button_link' ); ?>
        <?php if ( $section_button_link ) : ?>
            <a class="btn btn-primary text-uppercase text-white mt-5" href="<?php echo esc_url( $section_button_link); ?>"><?php the_sub_field( 'section_button_label' ); ?></a>
        <?php endif; ?>
            </div>
        </div>
        </div>
	<?php endwhile; ?>
    </div>
<?php endif; ?>