<?php
/**
 * This file is used to register ACF Gutenberg blocks
 *
 * @package Profit_whales
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * This class customizes and configures the plugin ACF
 */
class Acf_Config {

    /**
     * Constructor
     */
    public function __construct() {

        $this->int_add_option_pages();
        add_action( 'acf/init', array( $this, 'pr_register_acf_gutenberg_block_types' ), 10 );
        add_filter( 'block_categories_all', array( $this, 'pr_add_custom_block_category' ), 10, 2 );

    }
    protected function int_add_option_pages() {

        if( function_exists('acf_add_options_page') ) {

            acf_add_options_page(array(
                'page_title' 	=> 'Theme General Settings',
                'menu_title'	=> 'Theme settings',
                'menu_slug' 	=> 'theme-general-settings',
                'capability'	=> 'edit_posts',
                'redirect'		=> false
            ));

            acf_add_options_sub_page(array(
                'page_title' 	=> 'Theme Header Settings',
                'menu_title'	=> 'Header',
                'parent_slug'	=> 'theme-general-settings',
            ));

            acf_add_options_sub_page(array(
                'page_title' 	=> 'Theme Footer Settings',
                'menu_title'	=> 'Footer',
                'parent_slug'	=> 'theme-general-settings',
            ));

        }

    }

    /**
     * Register acf blocks for Gutenberg editor
     *
     * @return void
     */
    public function pr_register_acf_gutenberg_block_types() {
        //Set block names comma separated
        $blocks = array(
            array(
                'name' => 'contact_baner',
                'title' => __('Contact Baner', 'profit_whales'),
                'description' => __('Contact page baner', 'profit_whales'),
                'icon' => 'cover-image',
                'category' => 'pw-custom-blocks',
            ),
            array(
                'name' => 'grow_steps',
                'title' => __('Grow Steps', 'profit_whales'),
                'description' => __('Step blocks with text and image', 'profit_whales'),
                'icon' => 'editor-ol',
                'category' => 'pw-custom-blocks',
            ),
            array(
                'name' => 'list_cards',
                'title' => __('List Cards', 'profit_whales'),
                'description' => __('Cards with lists inside', 'profit_whales'),
                'icon' => 'list-view',
                'category' => 'pw-custom-blocks',
            ),
            array(
                'name' => 'cta',
                'title' => __('CTA', 'profit_whales'),
                'description' => __('Call to action', 'profit_whales'),
                'icon' => 'editor-paste-text',
                'category' => 'pw-custom-blocks',
            ),
            array(
                'name' => 'single_image_banner',
                'title' => __('Single Image Banner', 'profit_whales'),
                'description' => __('', 'profit_whales'),
                'icon' => 'cover-image',
                'category' => 'pw-custom-blocks',
            ),
            array(
                'name' => 'brand_section',
                'title' => __('Brands Section', 'profit_whales'),
                'description' => __('Section with brands logo', 'profit_whales'),
                'icon' => 'grid-view',
                'category' => 'pw-custom-blocks',
            ),
            array(
                'name' => 'cs_hero',
                'title' => __('Case Study Hero', 'profit_whales'),
                'description' => __('Background and texts', 'profit_whales'),
                'icon' => 'cover-image',
                'category' => 'pw-case-studies-blocks',
            ),
            array(
                'name' => 'stats_cards',
                'title' => __('Statistics cards', 'profit_whales'),
                'description' => __('Cards with stats', 'profit_whales'),
                'icon' => 'chart-line',
                'category' => 'pw-case-studies-blocks',
            ),
            array(
                'name' => 'text_image',
                'title' => __('Text with image', 'profit_whales'),
                'description' => __('Text with image', 'profit_whales'),
                'icon' => 'align-pull-right',
                'category' => 'pw-case-studies-blocks',
            ),
            array(
                'name' => 'icons_list',
                'title' => __('Icons list', 'profit_whales'),
                'description' => __('List with custom icons', 'profit_whales'),
                'icon' => 'editor-ul',
                'category' => 'pw-case-studies-blocks',
            ),
            array(
                'name' => 'pins_image',
                'title' => __('Pins with image', 'profit_whales'),
                'description' => __('List with pins and image', 'profit_whales'),
                'icon' => 'editor-ul',
                'category' => 'pw-case-studies-blocks',
            ),
            array(
                'name' => 'process_block',
                'title' => __('Process block', 'profit_whales'),
                'description' => __('Big block of process', 'profit_whales'),
                'icon' => 'clock',
                'category' => 'pw-case-studies-blocks',
            ),
            array(
                'name' => 'results_block',
                'title' => __('Results block', 'profit_whales'),
                'description' => __('Block with results', 'profit_whales'),
                'icon' => 'awards',
                'category' => 'pw-case-studies-blocks',
            ),
            array(
                'name' => 'whats_next',
                'title' => __('What next', 'profit_whales'),
                'description' => __('Block with what is next', 'profit_whales'),
                'icon' => 'arrow-right-alt',
                'category' => 'pw-case-studies-blocks',
            ),
        );

        if ( function_exists( 'acf_register_block_type' ) ) {

            foreach ( $blocks as $block ) {
                acf_register_block_type(
                    array(
                        'name'            => $block['name'] . '-block',
                        'title'           => $block['title'] . ' | ' . __( ' PW', 'profit_whales' ),
                        'description'     => $block['description'] . __( ' : ACF block for Gutenberg Editor', 'profit_whales' ),
                        'render_template' => 'template-parts/blocks/pr-' . $block['name'] . '.php',
                        'category'        => $block['category'],
                        'icon'            => $block['icon'],
                        'mode'            => 'edit',
                        'supports'        => array(
                            'mode' => false,
                        ),
                    )
                );
            }
        }
    }

    /**
     * Add custom block category
     */
    public function pr_add_custom_block_category( $categories, $post ) {
        $desired_position = 0;
//        $pr_category = array(
//            'slug'  => 'pw-custom-blocks',
//            'title' => 'PW Blocks',
//            'icon'  => 'block-default',
//        );

        $pr_categories = array(
            array(
                'slug'  => 'pw-custom-blocks',
                'title' => 'PW Blocks',
                'icon'  => 'block-default',
            ),
            array(
                'slug'  => 'pw-case-studies-blocks',
                'title' => 'PW Case Studies',
                'icon'  => 'block-default',
            ),

        );

        foreach ($pr_categories as $cat) {
            array_splice($categories, $desired_position, 0, array($cat));
        }

        return $categories;
    }
}

if ( class_exists( 'Acf_Config' ) ) {

    new Acf_Config();
}
