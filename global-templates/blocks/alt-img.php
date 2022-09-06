<?php if ( have_rows( 'alternate_images_and_content_section' ) ): ?>
    <div class="container">
	<?php while ( have_rows( 'alternate_images_and_content_section' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'add_a_new_section' ) : ?>
			<?php if ( have_rows( 'image_and_content' ) ) : ?>
				<?php while ( have_rows( 'image_and_content' ) ) : the_row(); ?>
					<?php if ( have_rows( 'section_row' ) ) : ?>
						<?php while ( have_rows( 'section_row' ) ) : the_row(); 
                        
                        
                        if( get_row_index() % 2 == 0 ){
                        
                        ?>

                        <div id="<?php the_sub_field( 'section_id' ); ?>" class="row d-flex align-items-center mb-5">
                            <div class="col-sm-12 col-md-12 col-lg-4 text-center">
                                <?php $section_image = get_sub_field( 'section_image' ); ?>
                                <?php if ( $section_image ) : ?>
                                    <img class="img-fluid" src="<?php echo esc_url( $section_image['url'] ); ?>" alt="<?php echo esc_attr( $section_image['alt'] ); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-8 px-5">
                                <h2 class="page-header"><?php the_sub_field( 'section_title' ); ?></h2>

                                <?php the_sub_field( 'section_content' ); ?>
							
                                <?php $section_button_link = get_sub_field( 'section_button_link' ); ?>
                                <?php if ( $section_button_link ) : ?>
                                    <p class="mt-4"><a class="btn btn-secondary text-white text-uppercase" href="<?php echo esc_url( $section_button_link); ?>"><?php the_sub_field( 'section_button_label' ); ?></a></p>
                                <?php endif; ?>

                            </div>
                        </div>
							

                        <?php } else { ?>

                            <div class="row d-flex align-items-center mb-5">
                            <div class="col-sm-12 col-md-12 col-lg-8 px-5">
                                <h2 class="page-header"><?php the_sub_field( 'section_title' ); ?></h2>

                                <?php the_sub_field( 'section_content' ); ?>
							
                                <?php $section_button_link = get_sub_field( 'section_button_link' ); ?>
                                <?php if ( $section_button_link ) : ?>
                                    <p class="mt-4"><a class="btn btn-secondary text-white text-uppercase" href="<?php echo esc_url( $section_button_link); ?>"><?php the_sub_field( 'section_button_label' ); ?></a></p>
                                <?php endif; ?>

                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4 text-center">
                                <?php $section_image = get_sub_field( 'section_image' ); ?>
                                <?php if ( $section_image ) : ?>
                                    <img class="img-fluid" src="<?php echo esc_url( $section_image['url'] ); ?>" alt="<?php echo esc_attr( $section_image['alt'] ); ?>" />
                                <?php endif; ?>
                            </div>
                        </div>

                            
                        <?php } ?>
						<?php endwhile; ?>
					<?php else : ?>
						<?php // No rows found ?>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		<?php endif; ?>
	<?php endwhile; ?>
    </div>
<?php else: ?>
	<?php // No layouts found ?>
<?php endif; ?>