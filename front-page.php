<?php
/**
 * The front page template file
 *
 * This is the template for your site's home page when
 * using a static front page in WordPress Settings.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Labmania_Indonesia
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    // Check if the slider template exists before including it
    $slider_path = get_stylesheet_directory() . '/template-parts/homepage/slider.php';
    if (file_exists($slider_path)) {
        include($slider_path);
    } else {
        // Fallback if the slider template is missing
        echo '<div class="py-20 bg-blue-950 text-white text-center">';
        echo '<div class="container mx-auto max-w-7xl px-4">';
        echo '<h2 class="text-3xl md:text-4xl font-bold mb-6">Welcome to Labmania Indonesia</h2>';
        echo '<p class="text-xl text-gray-200 mb-8">Premium Laboratory Equipment and Solutions</p>';
        echo '</div>';
        echo '</div>';
    }

    // Include Why Labmania Section
    $why_labmania_path = get_stylesheet_directory() . '/template-parts/homepage/why-labmania.php';
    if (file_exists($why_labmania_path)) {
        include($why_labmania_path);
    } else {
        // Fallback if the template doesn't exist yet
        echo '<!-- Why Labmania Section template not found -->';
    }
    
    // Include Statistics Section - Now positioned after Why Labmania
    $statistics_path = get_stylesheet_directory() . '/template-parts/homepage/statistics.php';
    if (file_exists($statistics_path)) {
        include($statistics_path);
    } else {
        // Fallback if the template doesn't exist yet
        echo '<!-- Statistics Section template not found -->';
    }
    
    // Include Products & Services Section
    $products_services_path = get_stylesheet_directory() . '/template-parts/homepage/products-services.php';
    if (file_exists($products_services_path)) {
        include($products_services_path);
    } else {
        // Fallback if the template doesn't exist
        echo '<!-- Products & Services section template not found -->';
    }
    ?>
</main>

<?php
get_footer();