
<?php if ( have_rows( 'sub_banner_with_no_image_section' ) ) : ?>
    <div class="sub-banner-no-img py-5 position-relative">
        <lottie-player class="left-anima" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/animations/Left Pattern 1.json' ); ?>" background="transparent" speed="1" style="width: 427.26px; height: 599.97px;" loop autoplay></lottie-player>
            <div class="container">

	<?php while ( have_rows( 'sub_banner_with_no_image_section' ) ) : the_row(); ?>

    <div class="row mb-5">
        <div class="col-">
            <h3>
            <lottie-player class="" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/animations/workforce solutions icon.json' ); ?>" background="transparent" speed="1" style="width: 37.14px; height: 39.84px;" loop autoplay></lottie-player>    
            <?php the_sub_field( 'section_menu_title' ); ?>

           
            <?php if ( have_rows( 'section_menu' ) ) : ?>
                <ul class="nav">
			<?php while ( have_rows( 'section_menu' ) ) : the_row(); ?>

				<?php $section_menu_link = get_sub_field( 'section_menu_link' ); ?>
				<?php if ( $section_menu_link ) : ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo esc_url( $section_menu_link); ?>"><?php the_sub_field( 'section_menu_label' ); ?></a>
                    </li>
				<?php endif; ?>
                <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
                
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-1"></div>
        <div class="col-sm-12 col-md-12 col-lg-8">
            <h1 class="page-header-bigger"><?php the_sub_field( 'section_title' ); ?></h1>
            <?php the_sub_field( 'section_content' ); ?>
        </div>
    </div>
		
	<?php endwhile; ?>
            </div>
    </div>
<?php endif; ?>