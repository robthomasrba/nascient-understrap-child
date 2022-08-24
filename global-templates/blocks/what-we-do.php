<?php if ( have_rows( 'what_we_do_section' ) ) : ?>
    <div class="container py-5 what-we-do">
	<?php while ( have_rows( 'what_we_do_section' ) ) : the_row(); ?>
		<div class="row text-center pb-4 mb-5">
            <div class="col">
            <p class="sub-page-h"><?php the_sub_field( 'section_sub_title' ); ?></p>
            <h2 class="page-header"><?php the_sub_field( 'section_title' ); ?></h2>
            <?php the_sub_field( 'section_content' ); ?>
            </div>
        </div>
        <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-2"></div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <?php if ( have_rows( 'left_list_section' ) ) : ?>
                <ul>
                <?php while ( have_rows( 'left_list_section' ) ) : the_row(); ?>
                    <li>
                    <img class="" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/checkmark.svg' ); ?>" alt="Checkmark" width="29.64" height="26.75" />
                        <?php the_sub_field( 'list_item' ); ?>
                    </li>
                <?php endwhile; ?>
                </ul>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <?php if ( have_rows( 'right_list_section' ) ) : ?>
                    <ul>
                <?php while ( have_rows( 'right_list_section' ) ) : the_row(); ?>
                    <li>
                        <img class="" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/checkmark.svg' ); ?>" alt="Checkmark" width="29.64" height="26.75" />
                        <?php the_sub_field( 'list_item' ); ?>
                    </li>
                <?php endwhile; ?>
                </ul>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-2"></div>
        </div>
        		
		
		<div class="row mt-5">
            <div class="col text-center">
            <p class="short-text mb-5">… and more!</p>
            <?php $section_button_link = get_sub_field( 'section_button_link' ); ?>
            <?php if ( $section_button_link ) : ?>
                <a class="btn btn-secondary text-uppercase text-white" href="<?php echo esc_url( $section_button_link); ?>"><?php the_sub_field( 'section_button_label' ); ?>
</a>
            <?php endif; ?>
            </div>
        </div>
	<?php endwhile; ?>
    </div>
<?php endif; ?>