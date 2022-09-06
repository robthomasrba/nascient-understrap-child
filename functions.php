<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @param string $current_mod The current value of the theme_mod.
 * @return string
 */
function understrap_default_bootstrap_version( $current_mod ) {
	return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );

//ACF Options 

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Careers Form'),
            'menu_title'  => __('Theme Settings'),
            'redirect'    => false,
        ));

        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Social Settings'),
            'menu_title'  => __('Social'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}

// Related Post 

function example_cats_related_post() {

    $post_id = get_the_ID();
    $cat_ids = array();
    $categories = get_the_category( $post_id );

    if(!empty($categories) && is_wp_error($categories)):
        foreach ($categories as $category):
            array_push($cat_ids, $category->term_id);
        endforeach;
    endif;

    $current_post_type = get_post_type($post_id);
    $query_args = array( 

        'category__in'   => $cat_ids,
        'post_type'      => $current_post_type,
        'post__not_in'    => array($post_id),
        'posts_per_page'  => '3'


     );

    $related_cats_post = new WP_Query( $query_args );

    if($related_cats_post->have_posts()):
         while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
            
                <div class="col-sm-12 col-md-12 col-lg-4 text-center">
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				<?php endif; ?>
                    <h3 class="my-4">
						<a class="" href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h3>
					
					<p>
					<?php

$content = get_the_content();
$trimmed_content = wp_trim_words( $content, 30, NULL );
echo $trimmed_content;

?>
					</p>
					
					<p>
						<a href="<?php the_permalink(); ?>" class="btn btn-secondary text-white text-uppercase">
							read more
						</a>
					</p>
				</div>
			
        <?php endwhile;

        // Restore original Post Data
        wp_reset_postdata();
     endif;

}

// People CPT
function cptui_register_my_cpts_people() {

	/**
	 * Post Type: People.
	 */

	$labels = [
		"name" => __( "People", "understrap-child" ),
		"singular_name" => __( "Person", "understrap-child" ),
		"menu_name" => __( "People", "understrap-child" ),
		"all_items" => __( "People", "understrap-child" ),
		"add_new" => __( "Person", "understrap-child" ),
		"add_new_item" => __( "Person", "understrap-child" ),
		"edit_item" => __( "Person", "understrap-child" ),
		"new_item" => __( "Person", "understrap-child" ),
		"view_item" => __( "Person", "understrap-child" ),
		"view_items" => __( "People", "understrap-child" ),
		"search_items" => __( "People", "understrap-child" ),
		"not_found" => __( "People", "understrap-child" ),
		"not_found_in_trash" => __( "People", "understrap-child" ),
		"parent" => __( "Person", "understrap-child" ),
		"featured_image" => __( "Add Image", "understrap-child" ),
		"set_featured_image" => __( "Person", "understrap-child" ),
		"remove_featured_image" => __( "Person", "understrap-child" ),
		"use_featured_image" => __( "Person", "understrap-child" ),
		"archives" => __( "People", "understrap-child" ),
		"insert_into_item" => __( "Person", "understrap-child" ),
		"uploaded_to_this_item" => __( "Person", "understrap-child" ),
		"filter_items_list" => __( "People", "understrap-child" ),
		"items_list_navigation" => __( "People", "understrap-child" ),
		"items_list" => __( "People", "understrap-child" ),
		"attributes" => __( "People", "understrap-child" ),
		"name_admin_bar" => __( "Person", "understrap-child" ),
		"item_published" => __( "Person", "understrap-child" ),
		"item_published_privately" => __( "Person", "understrap-child" ),
		"item_reverted_to_draft" => __( "Person", "understrap-child" ),
		"item_scheduled" => __( "Person", "understrap-child" ),
		"item_updated" => __( "Person", "understrap-child" ),
		"parent_item_colon" => __( "Person", "understrap-child" ),
	];

	$args = [
		"label" => __( "People", "understrap-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "people", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-admin-users",
		"supports" => [ "title", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "people", $args );
}

add_action( 'init', 'cptui_register_my_cpts_people' );


// Jobs CPT
function cptui_register_my_cpts_jobs() {

	/**
	 * Post Type: Jobs.
	 */

	$labels = [
		"name" => __( "Jobs", "understrap-child" ),
		"singular_name" => __( "Job", "understrap-child" ),
	];

	$args = [
		"label" => __( "Jobs", "understrap-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "jobs", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-networking",
		"supports" => [ "title", "editor" ],
		"show_in_graphql" => false,
	];

	register_post_type( "jobs", $args );
}

add_action( 'init', 'cptui_register_my_cpts_jobs' );
