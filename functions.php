<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    //add custom css
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.min.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.min.css'));
    //add skrollr
    wp_enqueue_script( 'skrollr', get_stylesheet_directory_uri() . '/js/skrollr.min.js', array(), filemtime(get_stylesheet_directory() . '/js/skrollr.min.js'), true );
    //add swiper js
    wp_enqueue_script( 'swiper', get_stylesheet_directory_uri() . '/js/swiper-bundle.min.js', array(), filemtime(get_stylesheet_directory() . '/js/script.js'), true );
    //add swiper css
    wp_enqueue_style('swipper-css', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/swiper-bundle.min.css'));
    //add javascript perso
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', array(), filemtime(get_stylesheet_directory() . '/js/script.js'), true );
    
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}