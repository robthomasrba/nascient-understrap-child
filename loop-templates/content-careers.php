<?php get_template_part( 'global-templates/blocks/sub-banner-no-img'); ?>


<div class="container mb-5 careers">
  <div class="row">
	        
  <div class="table-responsive">
  <table class="table align-middle">
  <thead>
    <tr>
      <th scope="col">Position</th>
      <th scope="col">LOCATION</th>
      <th scope="col">Start date</th>
      <th scope="col">Posted on</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

  <?php
        if ( get_query_var('paged') ) {
            $paged = get_query_var('paged');
        } elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
            $paged = get_query_var('page');
        } else {
            $paged = 1;
        }
        
        $custom_query_args = array(
            'post_type' => 'jobs', 
            'posts_per_page' => get_option('posts_per_page'),
            'paged' => $paged,
            'post_status' => 'publish',
            'ignore_sticky_posts' => true,
            //'category_name' => 'custom-cat',
            'order' => 'DESC', // 'ASC'
            'orderby' => 'date' // modified | title | name | ID | rand
        );
        $custom_query = new WP_Query( $custom_query_args );
        
        if ( $custom_query->have_posts() ) :
            while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

            
            
                <article class="" <?php post_class(); ?>>


                <tr class="">
                    <th scope="row position">
                        <h3>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                    </th>
                    <td class="location"><?php the_field( 'location' ); ?></td>
                    <td><?php the_field( 'start_date' ); ?></td>
                    <td>
                        <?php the_time('F jS, Y') ?>
                    </td>
                    <td>
                    <a href="<?php the_permalink() ?>" class="btn btn-secondary text-white text-uppercase">Read More</a>
                    </td>

                </tr>
                    
                </article>
                                        
                
            </div>
        
            <?php
            endwhile;
            ?>
        
            <?php if ($custom_query->max_num_pages > 1) : // custom pagination  ?>
                <?php
                $orig_query = $wp_query; // fix for pagination to work
                $wp_query = $custom_query;
                ?>
                <nav class="row">
                    <div class="col-sm-6 text-left">
                        <h5><?php echo get_next_posts_link( '', $custom_query->max_num_pages ); ?></h5>
                    </div>
                    <div class="col-sm-6 text-right">
                        <h5><?php echo get_previous_posts_link( '' ); ?></h5>
                    </div>
                </nav>
                <?php
                $wp_query = $orig_query; // fix for pagination to work
                ?>
            <?php endif; ?>
        
        <?php
            wp_reset_postdata(); // reset the query 
        else:
            echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
        endif;
        ?>
  </tbody>
</table>
  </div>        
	              
										
				

              </div><!-- end row -->
  </div>
