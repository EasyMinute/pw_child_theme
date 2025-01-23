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

