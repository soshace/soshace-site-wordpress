<?php

add_action( 'after_setup_theme', 'soshace_setup' );
function soshace_setup() {
   
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );

register_nav_menus( array(
    'header_menu' => 'Header Menu',
) );

}

function soshace_enqueue_styles() {
    wp_enqueue_style('soshace-css', get_template_directory_uri() . '/css/styles.min.css', array(), null, 'all');
    wp_enqueue_script('soshace-js', get_template_directory_uri() . '/js/scripts.min.js', array('jquery'), '1.0.0', true);
}

if (!is_admin()) {
    add_action('wp_enqueue_scripts', 'soshace_enqueue_styles', 999, 1);
}

?>