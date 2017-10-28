<?php
/**
 * Remax Theme
 * Methods to extend theme functionality
 */

function remax_enqueue_theme_styles() {
    wp_enqueue_style('master', get_template_directory_uri() . '/styles/style.css', array(), '0.0.41');
}
add_action('wp_enqueue_scripts', 'remax_enqueue_theme_styles');

function remax_enqueue_theme_scripts() {
    wp_enqueue_script('final-min', get_template_directory_uri() . '/javascripts/final.min.js', array('jquery'), '0.0.35', true);
}
add_action('wp_enqueue_scripts', 'remax_enqueue_theme_scripts');

// disable admin bar
show_admin_bar( false );

/**
 *  Removes unneeded WP scripts and styles from the site header.
 */
function remax_remove_random_wp_gunk() {
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
add_action('init', 'remax_remove_random_wp_gunk');


/**
 *  Registers a custom menu, editable under Appearance > Menus
 */
function remax_register_custom_menus() {
    register_nav_menus(
        array(
            'sidebar' => __('Sidebar Nav')
        )
    );
}
add_action('init', 'remax_register_custom_menus');


/**
 *  Creates a shortcode for inserting button-style links
 *
 *  @param $atts
 *  @param null $content
 *  @return string
 */
function remax_button_shortcode($atts, $content = null) {
    $values = shortcode_atts(
        array(
        	'class' => 'primary',
            'target' => '_self',
            'url' => '#'
        ), $atts
    );

    return '<a class="button button--' . $values['class'] . '" href="' . esc_attr($values['url']) . '" target="' . esc_attr($values['target']) . '">' . $content . '</a>';
}
add_shortcode('button', 'remax_button_shortcode');


/**
 *  Creates a shortcode for inserting stylized links
 *
 *  @param $atts
 *  @param null $content
 *  @return string
 */
function remax_link_shortcode($atts, $content = null) {
    $values = shortcode_atts(
        array(
            'target' => '_self',
            'url' => '#'
        ), $atts
    );

    return '<a class="link" href="' . esc_attr($values['url']) . '" target="' . esc_attr($values['target']) . '">' . $content . '</a>';
}
add_shortcode('link', 'remax_link_shortcode');


/**
 *  Enables SVG Uploads
 *
 *  @param $mimes
 *  @return mixed
 */
function remax_allow_svg_uploads($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'remax_allow_svg_uploads');


/**
 *	Custom paginate function, similar to one in WP Codex
 */
function remax_paginate() {
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	$pagination = array(
		'total' 	=> $wp_query->max_num_pages,
		'current' 	=> $current,
		'show_all' 	=> false,
		'type' 		=> 'plain'
	);
	if ( $wp_rewrite->using_permalinks() ) $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
	if ( !empty($wp_query->query_vars['s']) ) $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
	
	echo '<div class="pagination">' . paginate_links( $pagination ) . '</div>';
}