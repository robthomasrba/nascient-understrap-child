<?php if ( have_rows( 'how_we_work_section' ) ) : ?>
    <div class="how-we-work my-5">
	<?php while ( have_rows( 'how_we_work_section' ) ) : the_row(); ?>
		<div class="container">
            <div class="row mb-5 d-flex align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h2 class="page-header text-white"><?php the_sub_field( 'section_title' ); ?></h2>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <?php $section_button_link = get_sub_field( 'section_button_link' ); ?>
                    <?php if ( $section_button_link ) : ?>
                        <a class="btn btn-secondary text-uppercase text-white pull-right" href="<?php echo esc_url( $section_button_link); ?>"><?php the_sub_field( 'section_button_label' ); ?></a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="work-scroll">
                    <?php if ( have_rows( 'steps' ) ) : ?>
                        <div class="work-box">
                        <div class="row d-flex align-items-center">
                            <?php while ( have_rows( 'steps' ) ) : the_row(); ?>
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-sm-12 col-md-12 col-lg-6">
                                                <?php $step_image = get_sub_field( 'step_image' ); ?>
                                                <?php if ( $step_image ) : ?>
                                                    <img class="img-fluid" src="<?php echo esc_url( $step_image['url'] ); ?>" alt="<?php echo esc_attr( $step_image['alt'] ); ?>" />
                                                <?php endif; ?>
                                            </div>

                                            <div class="col-sm-12 col-md-12 col-lg-6">
                                                <h2> <?php the_sub_field( 'step_number' ); ?></h2>
                                                <h3> <?php the_sub_field( 'step_title' ); ?></h3>
                                                <p><?php the_sub_field( 'step_content' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                            <?php endwhile; ?>
                            </div>
                        </div>
                            <?php else : ?>
                                <?php // No rows found ?>
                    <?php endif; ?>

            </div>
        </div>
		
	<?php endwhile; ?>
    </div>
<?php endif; ?>