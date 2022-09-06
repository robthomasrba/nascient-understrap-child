<?php if ( have_rows( 'three_column_section' ) ) : ?>


	<div id="<?php the_sub_field( 'section_id' ); ?>" class=" position-relative">
	<lottie-player class="left-anima" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/animations/Left Pattern 1.json' ); ?>" background="transparent" speed="1" style="width: 427.26px; height: 599.97px;" loop autoplay></lottie-player>
    <div class="container mt-5 py-5">


	<?php while ( have_rows( 'three_column_section' ) ) : the_row(); ?>
		<div class="row text-center mb-4">
            <div class="col">
            <p class="sub-page-h m-0"><?php the_sub_field( 'section_sub_title' ); ?></p>
            <h2 class="page-header"><?php the_sub_field( 'section_title' ); ?></h2>
            <?php the_sub_field( 'section_content' ); ?>
            </div>
        </div>
		<?php if ( have_rows( 'columns' ) ) : ?>
			<div class="row">
			<?php while ( have_rows( 'columns' ) ) : the_row(); ?>
				<div class="col-sm-12 col-md-12  col-lg-4 text-center p-3">
				<lottie-player class="workforce" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/animations/workforce solutions icon.json' ); ?>" background="transparent" speed="1" style="width: 37.14px; height: 39.84px;" loop autoplay></lottie-player>    
				<h3><?php the_sub_field( 'column_title' ); ?></h3>
				<p><?php the_sub_field( 'column_content' ); ?></p>
				
				<?php $column_link = get_sub_field( 'column_link' ); ?>
				<?php if ( $column_link ) : ?>
					<a class="section-link" href="<?php echo esc_url( $column_link); ?>"><?php the_sub_field( 'column_link_label' ); ?></a>
				<?php endif; ?>
				</div>
			<?php endwhile; ?>
			</div>
		<?php else : ?>
			<?php // No rows found ?>
		<?php endif; ?>

		<div class="row mt-5">
			<div class="col text-center">
				
				<?php $section_button_link = get_sub_field( 'section_button_link' ); ?>
				<?php if ( $section_button_link ) : ?>
					<a class="btn btn-secondary text-white text-uppercase" href="<?php echo esc_url( $section_button_link); ?>"><?php the_sub_field( 'section_button_label' ); ?></a>
				<?php endif; ?>
			</div>
		</div>

	</div>


	<?php endwhile; ?>
    </div>
<?php endif; ?>