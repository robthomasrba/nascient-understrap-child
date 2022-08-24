<?php if ( have_rows( 'section_with_left_image' ) ) : ?>
<div class=" position-relative">
    <div class="container py-5 ">
	<?php while ( have_rows( 'section_with_left_image' ) ) : the_row(); ?>
		<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                <?php $section_image = get_sub_field( 'section_image' ); ?>
                <?php if ( $section_image ) : ?>
                    <img class="img-fluid" src="<?php echo esc_url( $section_image['url'] ); ?>" alt="<?php echo esc_attr( $section_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 d-flex align-items-end">
          
            <div>

                
                <p class="sub-page-h"><?php the_sub_field( 'section_sub_title' ); ?></p>

                <h2 class="page-header-bigger"><?php the_sub_field( 'section_title' ); ?></h2>
                <?php the_sub_field( 'section_content' ); ?>
                
                <?php $section_button_link = get_sub_field( 'section_button_link' ); ?>
                <?php if ( $section_button_link ) : ?>
                    <a class="btn btn-secondary text-uppercase text-white mt-5" href="<?php echo esc_url( $section_button_link); ?>"><?php the_sub_field( 'section_button_label' ); ?></a>
                <?php endif; ?>
            </div>
            </div>
        </div>
	<?php endwhile; ?>
    </div>
</div>
<?php endif; ?>