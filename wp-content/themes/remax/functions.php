<?php
/**
 * Remax Theme
 * Methods to extend theme functionality
 */

function remax_enqueue_theme_styles() {
    wp_enqueue_style('master', get_template_directory_uri() . '/styles/style.css', null, '0.0.1');
}
add_action('wp_enqueue_scripts', 'remax_enqueue_theme_styles');

function remax_enqueue_theme_scripts() {
    wp_enqueue_script('final-min', get_template_directory_uri() . '/javascripts/final.min.js', array('jquery'), '0.0.35', true);
}
add_action('wp_enqueue_scripts', 'remax_enqueue_theme_scripts');


/**
 * Disables the WP admin bar
 */
show_admin_bar( false );


/**
 * Removes unneeded WP scripts and styles from the site header.
 */
function remax_remove_wordpress_extras() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
    remove_action('wp_head', 'rel_canonical');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    wp_deregister_script('wp-embed');
}
add_action('init', 'remax_remove_wordpress_extras');


/**
 * Registers custom menus, which are editable under Appearance > Menus
 */
function remax_register_custom_menus() {
    register_nav_menus(
        array(
            'top' => __('Top Menu'),
            'main' => __('Main Menu'),
	        'footer' => __('Footer')
        )
    );
}
add_action('init', 'remax_register_custom_menus');


/**
 * Enables widget-ready areas in the footer
 */
if (function_exists('register_sidebar')) {
	register_sidebar(
		array(
			'name' => 'Footer (Left Column)',
			'before_widget' => '<div class="col-3">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);
	
	register_sidebar(
		array(
			'name' => 'Footer (Center Left Column)',
			'before_widget' => '<div class="col-3">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);
	
	register_sidebar(
		array(
			'name' => 'Footer (Center Right Column)',
			'before_widget' => '<div class="col-3">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);
	
	register_sidebar(
		array(
			'name' => 'Footer (Right Column)',
			'before_widget' => '<div class="col-3">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);
}