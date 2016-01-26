<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

remove_theme_support('posts');

function register_theme_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' )
    )
  );
}

add_action( 'init', 'register_theme_menus' );

function wplodge_theme_styles() {
  wp_enqueue_style( 'main_css',
    get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'nivo_theme_css',
    get_template_directory_uri() .
    '/js/nivo-slider/themes/default/default.css' );
  wp_enqueue_style( 'nivo_css',
    get_template_directory_uri() .
    '/js/nivo-slider/nivo-slider.css' );
  wp_enqueue_style( 'fancybox_css',
    get_template_directory_uri() .
    '/js/fancybox/jquery.fancybox-1.3.4.css' );
}

add_action( 'wp_enqueue_scripts', 'wplodge_theme_styles' );

function wplodge_theme_js() {
  wp_enqueue_script( 'nivo_js',
    get_template_directory_uri() .
    '/js/nivo-slider/jquery.nivo.slider.pack.js', array('jquery'),
    '', true );
  wp_enqueue_script( 'fancybox_js',
    get_template_directory_uri() .
    '/js/fancybox/jquery.fancybox-1.3.4.pack.js', array('jquery'),
    '', true );
  wp_enqueue_script( 'main_js',
    get_template_directory_uri() . '/js/main.js',
    array('jquery', 'nivo_js'), '', true );
  wp_enqueue_script( 'addthis_js',
    '//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-564419fa058cf526',
    array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'wplodge_theme_js' );

/*-----------------------------------------------------------------------------------*/
/* Remove Unwanted Admin Menu Items */
/*-----------------------------------------------------------------------------------*/

function remove_admin_menu_items() {
	$remove_menu_items = array(__('Links'), __('Posts'), __('Comments'));
	global $menu;
	end ($menu);
	while (prev($menu)){
		$item = explode(' ',$menu[key($menu)][0]);
		if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
		unset($menu[key($menu)]);}
	}
}

add_action('admin_menu', 'remove_admin_menu_items');

?>
