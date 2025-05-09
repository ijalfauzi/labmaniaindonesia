<?php
/**
 * Theme functions and definitions
 *
 * @package Labmania_Indonesia
 */

/**
 * Enqueue scripts and styles
 */
function labmania_enqueue_scripts() {
    // Main theme stylesheet
    wp_enqueue_style(
        'labmania-style', 
        get_stylesheet_directory_uri() . '/dist/bundle.css', 
        [], 
        '1.0.0'
    );

    // Google Fonts - keep your original
    wp_enqueue_style(
        'labmania-google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Poppins:wght@400;500;700&display=swap',
        [],
        null
    );
    
    // Swiper CSS - required for the slider
    wp_enqueue_style(
        'swiper-css', 
        'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', 
        [], 
        '9.0.0'
    );
    
    // Main script bundle
    wp_enqueue_script(
        'labmania-scripts', 
        get_stylesheet_directory_uri() . '/dist/bundle.js', 
        [], 
        '1.0.0', 
        true
    );
    
    // Swiper JS - required for the slider
    wp_enqueue_script(
        'swiper-js', 
        'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', 
        [], 
        '9.0.0', 
        true
    );
}
add_action('wp_enqueue_scripts', 'labmania_enqueue_scripts');

/**
 * Add theme support for various features
 */
function labmania_theme_support() {
    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 350,
        'flex-width'  => true,
        'flex-height' => true,
    ));
    
    // Other theme supports
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
}
add_action('after_setup_theme', 'labmania_theme_support');