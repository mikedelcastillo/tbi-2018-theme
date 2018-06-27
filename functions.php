<?php

// code below from https://wordpress.stackexchange.com/questions/237044/wp-get-nav-menu-items-not-working-with-slug

function get_nav_menu_items_by_slug($menu_slug) {
  $menu_items = array();
  if (($locations = get_nav_menu_locations()) && isset($locations[$menu_slug])){
    $menu = get_term($locations[$menu_slug]);
    $menu_items = wp_get_nav_menu_items($menu->term_id);
  }
  return $menu_items;
}

?>
