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
    ?>
    
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-blue-900 mb-10 text-center">Welcome to Labmania Indonesia</h2>
            
            <!-- Add your homepage content here -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Featured Services -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="w-12 h-12 bg-blue-900 text-yellow-500 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-2">Premium Equipment</h3>
                        <p class="text-gray-600 mb-4">We provide high-quality laboratory equipment from trusted global manufacturers.</p>
                        <a href="<?php echo esc_url(home_url('/services')); ?>" class="text-yellow-500 hover:text-blue-900 font-medium inline-flex items-center">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- More sections can go here -->
            </div>
        </div>
    </section>
</main>

<?php
get_footer();