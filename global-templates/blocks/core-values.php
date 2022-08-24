    
        

<?php if ( have_rows( 'core_values_section' ) ) : ?>
    <div class="container-lg py-5">
	<?php while ( have_rows( 'core_values_section' ) ) : the_row(); ?>
    <div class="row text-center mb-5">
        <div class="col">
            <h2 class="page-header"><?php the_sub_field( 'section_title' ); ?></h2>
        </div>
    </div>
		
		<?php if ( have_rows( 'core_section_one' ) ) : ?>
            <div class="row">
			<?php while ( have_rows( 'core_section_one' ) ) : the_row(); ?>
                <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="core-block">
                <?php $section_image = get_sub_field( 'section_image' ); ?>
				<?php if ( $section_image ) : ?>
					<img class="core-image" src="<?php echo esc_url( $section_image['url'] ); ?>" alt="<?php echo esc_attr( $section_image['alt'] ); ?>" />
				<?php endif; ?>
                    <div class="overlay overlay-blue d-flex align-items-center p-5">
                        <div>
                            <h3><?php the_sub_field( 'section_title' ); ?></h3>
                            <?php the_sub_field( 'section_content' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8"></div>
				
			<?php endwhile; ?>
            </div>
		<?php endif; ?>

		<?php if ( have_rows( 'core_section_two' ) ) : ?>
            <div class="row">
			<?php while ( have_rows( 'core_section_two' ) ) : the_row(); ?>
            
            <div class="col-sm-12 col-md-12 col-lg-8"></div>

            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="core-block">
                <?php $section_image = get_sub_field( 'section_image' ); ?>
				<?php if ( $section_image ) : ?>
					<img class="core-image" src="<?php echo esc_url( $section_image['url'] ); ?>" alt="<?php echo esc_attr( $section_image['alt'] ); ?>" />
				<?php endif; ?>
                    <div class="overlay overlay-green d-flex align-items-center p-5">
                        <div>
                            <h3><?php the_sub_field( 'section_title' ); ?></h3>
                            <?php the_sub_field( 'section_content' ); ?>
                        </div>
                    </div>
                </div>
            </div>
				
			<?php endwhile; ?>
            </div>
		<?php endif; ?>

		<?php if ( have_rows( 'core_section_three' ) ) : ?>
            <div class="row">
			<?php while ( have_rows( 'core_section_three' ) ) : the_row(); ?>
            <div class="col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="core-block">
                <?php $section_image = get_sub_field( 'section_image' ); ?>
				<?php if ( $section_image ) : ?>
					<img class="core-image" src="<?php echo esc_url( $section_image['url'] ); ?>" alt="<?php echo esc_attr( $section_image['alt'] ); ?>" />
				<?php endif; ?>
                    <div class="overlay overlay-yellow d-flex align-items-center p-5">
                        <div>
                        <h3><?php the_sub_field( 'section_title' ); ?></h3>
                        <?php the_sub_field( 'section_content' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-7"></div>
				
			<?php endwhile; ?>
            </div>
		<?php endif; ?>


	<?php endwhile; ?>
    </div>
<?php endif; ?>