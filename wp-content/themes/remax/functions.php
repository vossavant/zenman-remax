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
    wp_enqueue_script('master', get_template_directory_uri() . '/scripts/final.min.js', array('jquery'), '0.0.1', true);
}
add_action('wp_enqueue_scripts', 'remax_enqueue_theme_scripts');


/**
 * Disables the WP admin bar
 */
show_admin_bar( false );


/**
 * Add theme support for post thumbnails. Docs:
 * https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
 */
add_theme_support('post-thumbnails', array('post'));


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


/**
 * Custom walker function for altering the default
 * appearance of the main nav.
 *
 * Documentation:
 * https://codex.wordpress.org/Class_Reference/Walker
 */
class Walker_Simple_Example extends Walker
{
	var $db_fields = array(
		'parent' => 'menu_item_parent',
		'id' => 'db_id'
	);
	
	/**
	 * Override default output for each nav element. Insert a mega menu
	 * underneath each top level nav item. Within each menu, display
	 * the 3 most recent posts in each category.
	 *
	 * @param string $output
	 * @param object $item
	 * @param int $depth
	 * @param array $args
	 * @param int $id
	 */
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
	{
		global $post;
		
		$posts_in_category = array(
			'category' => $item->object_id,
			'posts_per_page' => 3
		);
		
		$mega_menu_html = '';
		
		if ($posts = get_posts($posts_in_category)) {
			$mega_menu_html .= '<ul class="mega-menu' . ($item->object_id == 8 ? ' mega-menu-visible' : '') . ' border border-primary border-top-0 border-right-0 border-bottom-4 border-left-0 text-center px-1">';
			
			foreach ($posts as $post) :
				setup_postdata($post);
				$mega_menu_html .=
					'<li class="col p-1">
						<div class="gallery-image-mask">' . get_the_post_thumbnail() . '</div>
						<h4 class="mt-3 mx-3 mb-0">' . get_the_title() . '</h4>
						<a class="p-4" href="' . get_permalink() . '">Read More &rsaquo;</a>
					</li>';
			endforeach;
			
			$mega_menu_html .= '<li class="mega-menu-view-all h5 px-3 py-2 position-absolute text-primary">View all CATEGORY posts &rsaquo;</li>';
			
			$mega_menu_html .= '</ul>';
			
			wp_reset_postdata();
		}
		
		$output .= sprintf("\n<li><a class='h4' href='%s'%s>%s</a>%s</li>\n",
			$item->url,
			($item->object_id === get_the_ID()) ? ' class="current"' : '',
			$item->title, $mega_menu_html
		);
	}
}