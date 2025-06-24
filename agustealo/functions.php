<?php
/**
 * Functions and definitions for the Agustealo theme.
 *
 * @package Agustealo
 */

if ( ! function_exists( 'agustealo_setup' ) ) {
    /**
     * Setup theme defaults and registers support for various WordPress features.
     */
    function agustealo_setup() {
        add_theme_support( 'block-templates' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'custom-line-height' );
    }
}
add_action( 'after_setup_theme', 'agustealo_setup' );

/**
 * Register custom pattern categories for the design system.
 */
function agustealo_register_pattern_categories() {
    register_block_pattern_category( 'hero', array( 'label' => _x( 'Hero', 'Block pattern category', 'agustealo' ) ) );
    register_block_pattern_category( 'pricing', array( 'label' => _x( 'Pricing', 'Block pattern category', 'agustealo' ) ) );
    register_block_pattern_category( 'testimonials', array( 'label' => _x( 'Testimonials', 'Block pattern category', 'agustealo' ) ) );
    register_block_pattern_category( 'teams', array( 'label' => _x( 'Teams', 'Block pattern category', 'agustealo' ) ) );
    register_block_pattern_category( 'cta', array( 'label' => _x( 'Call to Action', 'Block pattern category', 'agustealo' ) ) );
    register_block_pattern_category( 'grids', array( 'label' => _x( 'Grids', 'Block pattern category', 'agustealo' ) ) );
}
add_action( 'init', 'agustealo_register_pattern_categories' );
