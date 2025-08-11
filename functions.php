<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HyroesChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HYROES_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hyroes_child_scripts_styles() {

	wp_enqueue_style(
		'hyroes-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HYROES_CHILD_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'hyroes_child_scripts_styles', 20 );
