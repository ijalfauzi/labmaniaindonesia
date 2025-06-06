<?php
/**
 * Theme functions and definitions
 *
 * @package Labmania_Indonesia
 */

defined('ABSPATH') || exit;

/**
 * Enqueue compiled theme assets
 */
function labmania_enqueue_assets() {
    $theme_uri  = get_template_directory_uri();
    $theme_path = get_template_directory();

    // Main CSS (Webpack output)
    wp_enqueue_style(
        'labmania-style',
        $theme_uri . '/dist/bundle.css',
        [],
        filemtime($theme_path . '/dist/bundle.css')
    );

    // JS bundle from Webpack (global)
    wp_enqueue_script(
        'labmania-bundle',
        $theme_uri . '/dist/bundle.js',
        [],
        filemtime($theme_path . '/dist/bundle.js'),
        true
    );

    // Google Fonts
    wp_enqueue_style(
        'labmania-google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Poppins:wght@400;500;700&display=swap',
        [],
        null
    );

    // Swiper (now loaded globally)
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css',
        [],
        '9.0.0'
    );
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js',
        [],
        '9.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'labmania_enqueue_assets');

/**
 * Theme support declarations
 */
function labmania_setup_theme() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);
    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 350,
        'flex-width'  => true,
        'flex-height' => true,
    ]);
}
add_action('after_setup_theme', 'labmania_setup_theme');

// Register navigation menus
register_nav_menus([
    'primary' => __('Primary Menu', 'labmania'),
]);

/**
 * Utility: Estimated Reading Time
 */
if (!function_exists('labmania_estimated_reading_time')) {
    function labmania_estimated_reading_time($post_id = null) {
        $post_id = $post_id ?: get_the_ID();
        $content = get_post_field('post_content', $post_id);
        $word_count = str_word_count(wp_strip_all_tags($content));
        return ceil($word_count / 200);
    }
}

// Clean up <head>
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function labmania_cleanup_wp_head() {
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'labmania_cleanup_wp_head');

// Remove version query strings from static files (optional, for production)
function labmania_remove_version_query($src) {
    return remove_query_arg('ver', $src);
}
add_filter('style_loader_src', 'labmania_remove_version_query', 9999);
add_filter('script_loader_src', 'labmania_remove_version_query', 9999);

// Limit post revisions
if (!defined('WP_POST_REVISIONS')) {
    define('WP_POST_REVISIONS', 5);
}