<?php
function labmania_enqueue_scripts() {
    wp_enqueue_style('labmania-style', get_stylesheet_directory_uri() . '/dist/bundle.css', [], null);
    wp_enqueue_script('labmania-scripts', get_stylesheet_directory_uri() . '/dist/bundle.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'labmania_enqueue_scripts');
