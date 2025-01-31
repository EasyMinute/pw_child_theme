<?php
add_filter('wpcf7_autop_or_not', '__return_false');


function register_my_theme_menus() {
    register_nav_menus(array(
        'footer_col_1' => __('Footer Col 1', 'profit_whales'),
        'footer_col_2' => __('Footer Col 2', 'profit_whales'),
        'footer_legal' => __('Footer Legal', 'profit_whales'),
    ));
}
add_action('after_setup_theme', 'register_my_theme_menus');

function register_cases_post_type() {
    $cases_args = array(
        'labels' => array(
            'name' => _x('Case studies', 'post type general name'),
            'singular_name' => _x('Case study', 'post type singular name'),
        ),
        'public' => true,
        'show_in_rest' => true, // ✅ Enables the block editor
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'author',
            'excerpt',
            'comments'
        ),
    );

    register_post_type('cases', $cases_args);
}
add_action('init', 'register_cases_post_type', 11);