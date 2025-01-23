<?php

// Enqueue parent theme styles
function my_child_theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style( 'pw-main', get_stylesheet_directory_uri() . '/dist/css/main.min.css', array(), 1.2, 'all' );

    wp_enqueue_script( 'pw-main', get_stylesheet_directory_uri() . '/dist/js/main.min.js', 'jQuery', 1.0, true );
}

add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_styles');

/**
 * Підключення acf-settings
 */
require get_stylesheet_directory() . '/function-parts/acf-settings.php';
/**
 * Підключення svg support
 */
require get_stylesheet_directory() . '/function-parts/svg_upload.php';

/**
 * Підключення stuff
 */
require get_stylesheet_directory() . '/function-parts/stuff.php';
