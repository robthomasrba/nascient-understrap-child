<?php
/**
 * Template Name: Leadership Consulting Page Template
 *
 * Template for displaying a contact us page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'leadership-consulting' );
endwhile;

get_footer();
