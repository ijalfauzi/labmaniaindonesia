<?php

function labmania_enqueue_scripts() {
    wp_enqueue_style('labmania-style', get_stylesheet_directory_uri() . '/dist/bundle.css', [], null);

    wp_enqueue_style(
        'labmania-google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Poppins:wght@400;500;700&display=swap',
        false
    );
    
    wp_enqueue_script('labmania-scripts', get_stylesheet_directory_uri() . '/dist/bundle.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'labmania_enqueue_scripts');
