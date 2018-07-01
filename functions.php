<?php

/*

SETUP
  -Top menu

*/

// code below from https://wordpress.stackexchange.com/questions/237044/wp-get-nav-menu-items-not-working-with-slug

function get_nav_menu_items_by_slug($menu_slug) {
  $menu_items = array();
  if (($locations = get_nav_menu_locations()) && isset($locations[$menu_slug])){
    $menu = get_term($locations[$menu_slug]);
    $menu_items = wp_get_nav_menu_items($menu->term_id);
  }
  return $menu_items;
}

https://www.wpfaster.org/code/how-to-remove-emoji-styles-scripts-wordpress

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

add_action('after_setup_theme', function(){
  register_nav_menus(array(
		'top' => __('Top Menu', 'theme'),
		'social' => __('Social Links Menu', 'theme'),
    'navigation' => __('Navigation Menu', 'theme'),
    'pillars' => __('Pillars Menu', 'theme')
	));
});

?>
