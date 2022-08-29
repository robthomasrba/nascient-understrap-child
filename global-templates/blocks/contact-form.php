    

<?php if ( have_rows( 'contact_section' ) ) : ?>
    <div class="container my-5 contact">
	<?php while ( have_rows( 'contact_section' ) ) : the_row(); ?>
        <div class="row gx-0">
            <?php if ( have_rows( 'contact_information' ) ) : ?>
                <div class="col-sm-12 col-md-12 col-lg-4">
                <h2>Contact Information</h2>

                <ul class="nav flex-column ps-5 mt-3">
                <?php while ( have_rows( 'contact_information' ) ) : the_row(); ?>
                <li class="nav-item mb-3">
                <?php $icon = get_sub_field( 'icon' ); ?>
                    <?php if ( $icon ) : ?>
                        <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                    <?php endif; ?>

                    <?php the_sub_field( 'content' ); ?>
                </li>
                    
                <?php endwhile; ?>
                </ul>
                </div>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>

            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="contact-form p-2 p-sm-2 p-md-5 p-lg-5">
                    <?php the_sub_field( 'contact_form' ); ?>
                </div>
            </div>
        </div>
	<?php endwhile; ?>
    </div>
<?php endif; ?>