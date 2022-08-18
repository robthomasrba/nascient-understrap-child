<?php if ( have_rows( 'how_we_work_section' ) ) : ?>
    <div class="how-we-work my-5">
	<?php while ( have_rows( 'how_we_work_section' ) ) : the_row(); ?>
		<div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <h2 class="page-header text-white"><?php the_sub_field( 'section_title' ); ?></h2>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <?php $section_button_link = get_sub_field( 'section_button_link' ); ?>
                <?php if ( $section_button_link ) : ?>
                    <a class="btn btn-secondary text-uppercase text-white float-pull" href="<?php echo esc_url( $section_button_link); ?>"><?php the_sub_field( 'section_button_label' ); ?></a>
                <?php endif; ?>
            </div>
        </div>
        </div>
		
	<?php endwhile; ?>
    </div>
<?php endif; ?>