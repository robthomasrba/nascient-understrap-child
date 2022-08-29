    


<?php if ( have_rows( 'services_tabs_section' ) ) : ?>
    <div class="services-tabs">
	<?php while ( have_rows( 'services_tabs_section' ) ) : the_row(); ?>
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h2 class="page-header"><?php the_sub_field( 'section_title' ); ?></h2>
                <?php the_sub_field( 'section_content' ); ?>
            </div>
        </div>
		
		
		<?php if ( have_rows( 'section_services_list' ) ) : ?>
            <div class="row gx-0">

            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <?php $i=0; while ( have_rows('section_services_list') ) : the_row(); ?>

                <?php 
				    $string = sanitize_title( get_sub_field('service_list_title') ); 
			    ?>
                
                <button class="nav-link <?php if ($i==0) { ?>active<?php } ?>" id="v-pills-<?php echo $string ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?php echo $string ?>" type="button" role="tab" aria-controls="v-pills-<?php echo $string ?>" aria-selected="true"><?php the_sub_field( 'service_list_title' ); ?></button>
                <?php $i++; endwhile; ?>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="tab-content" id="v-pills-tabContent">
                <?php $i=0; while ( have_rows('section_services_list') ) : the_row(); ?>
                <?php 
				    $string = sanitize_title( get_sub_field('service_list_title') ); 
			    ?>
                    <div class="tab-pane fade <?php if ($i==0) { ?>show active<?php } ?>" id="v-pills-<?php echo $string; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $string; ?>-tab" tabindex="0">
                        <h2><?php the_sub_field( 'service_list_title' ); ?></h2>
                        <?php the_sub_field( 'service_list_content' ); ?>

                        <?php $section_button_link = get_sub_field( 'section_button_link' ); ?>
                        <?php if ( $section_button_link ) : ?>
                            <p>
                                <a class="btn btn-secondary text-white text-uppercase" href="<?php echo esc_url( $section_button_link); ?>"><?php the_sub_field( 'service_list_button_label' ); ?></a>
                            </p>
                        <?php endif; ?>

                    </div>
                <?php $i++; endwhile; ?>
                </div>
            </div>

            </div>
		<?php else : ?>
			<?php // No rows found ?>
		<?php endif; ?>

    </div>
	<?php endwhile; ?>
    </div>
<?php endif; ?>