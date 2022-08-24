<?php if ( have_rows( 'green_cta_section_with_images' ) ) : ?>
    <div class="green-cta d-flex align-items-center">
	<?php while ( have_rows( 'green_cta_section_with_images' ) ) : the_row(); ?>
    <div class="container ">

    <div class="row">
        <div class="col text-center">
        <?php $section_sub_title = get_sub_field( 'section_sub_title' ); ?>
        <?php if ( $section_sub_title ) : ?>
            <p class="sub-page-h"><?php the_sub_field( 'section_sub_title' ); ?></p>
        <?php endif; ?>

        <?php $section_header = get_sub_field( 'section_header' ); ?>
        <?php if ( $section_header ) : ?>
            <h2><?php the_sub_field( 'section_header' ); ?></h2>
        <?php endif; ?>
        </div>
    </div>

		<?php if ( have_rows( 'section_content' ) ) : ?>
            <div class="row d-flex align-items-center ">
			<?php while ( have_rows( 'section_content' ) ) : the_row(); ?>

            <div class="col-sm-12 col-md-12 col-lg-6 p-5 text-lg-center">
            <?php $section_content_image = get_sub_field( 'section_content_image' ); ?>
				<?php if ( $section_content_image ) : ?>
					<img class="img-fluid mb-4" src="<?php echo esc_url( $section_content_image['url'] ); ?>" alt="<?php echo esc_attr( $section_content_image['alt'] ); ?>" />
				<?php endif; ?>
                <h3><?php the_sub_field( 'section_content_title' ); ?></h3>
                <?php the_sub_field( 'section_content_text' ); ?>

				<?php $section_content_button_link = get_sub_field( 'section_content_button_link' ); ?>
				<?php if ( $section_content_button_link ) : ?>
					<a class="btn btn-primary text-white text-uppercase" href="<?php echo esc_url( $section_content_button_link); ?>"> <?php the_sub_field( 'section_content_button_label_' ); ?></a>
				<?php endif; ?>
            </div>
			
            
			<?php endwhile; ?>
            </div>
		<?php else : ?>
			<?php // No rows found ?>
		<?php endif; ?>
    </div>
	<?php endwhile; ?>
    </div>
<?php endif; ?>