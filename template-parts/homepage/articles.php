<?php
/**
 * Articles Section Template for Homepage
 * - Dynamic query of latest 3 blog posts
 * - Mobile-first design with clean typography
 * - Consistent styling with product-services section
 * 
 * @package Labmania_Indonesia
 */

// Query latest 3 blog posts
$articles_query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC'
));
?>

<?php if ($articles_query->have_posts()) : ?>
<section class="py-10 sm:py-16 px-4 sm:px-6 lg:px-8 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <!-- Section heading -->
        <div class="text-center mb-8 sm:mb-10">
            <div class="inline-block bg-blue-100 text-lm-blue text-xs leading-relaxed sm:text-sm font-medium px-4 py-1.5 rounded-full uppercase tracking-wider mb-3">
                BLOG & ARTIKEL
            </div>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-lm-blue text-center leading-tight">
                Artikel Terbaru
            </h2>
            <div class="h-1 bg-lm-yellow w-24 sm:w-32 md:w-40 mx-auto mt-3 sm:mt-4"></div>
        </div>
        
        <!-- Articles Grid - Simple 3 column on desktop, stacked on mobile -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 mb-8">
            <?php 
            $post_index = 0;
            while ($articles_query->have_posts()) : 
                $articles_query->the_post();
                
                // Get post data
                $post_id = get_the_ID();
                $post_title = get_the_title();
                $post_excerpt = get_the_excerpt();
                $post_date = get_the_date('F j, Y');
                $post_author = get_the_author();
                $post_url = get_permalink();
                
                // Get featured image
                $featured_image = '';
                if (has_post_thumbnail()) {
                    $featured_image = get_the_post_thumbnail_url($post_id, 'medium_large');
                } else {
                    // Fallback placeholder image
                    $featured_image = get_stylesheet_directory_uri() . '/assets/images/placeholder-article.jpg';
                }
                
                // Get primary category
                $categories = get_the_category();
                $primary_category = !empty($categories) ? $categories[0]->name : 'Blog';
                
                // Limit excerpt length if it's too long
                if (strlen($post_excerpt) > 150) {
                    $post_excerpt = substr($post_excerpt, 0, 150) . '...';
                }
                
                // If no excerpt, create one from content
                if (empty($post_excerpt)) {
                    $post_excerpt = wp_trim_words(get_the_content(), 25, '...');
                }
            ?>
                <!-- Article Card -->
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col h-full">
                    <!-- Image container with fixed aspect ratio -->
                    <div class="relative aspect-[16/9] bg-gray-200 overflow-hidden">
                        <img 
                            src="<?php echo esc_url($featured_image); ?>" 
                            alt="<?php echo esc_attr($post_title); ?>"
                            class="w-full h-full object-cover object-center transition-transform duration-500 hover:scale-105"
                            width="640"
                            height="360"
                            loading="<?php echo ($post_index === 0) ? 'eager' : 'lazy'; ?>"
                        >
                        
                        <!-- Category badge - Styled like the "Lihat" button from products-services.php -->
                        <div class="absolute top-3 right-3 bg-lm-yellow/90 text-lm-blue rounded-full font-bold text-xs py-1 px-3 shadow-md backdrop-blur-sm">
                            <?php echo esc_html($primary_category); ?>
                        </div>
                    </div>
                    
                    <!-- Content container -->
                    <div class="p-5 flex flex-col flex-grow">
                        <!-- Date and Author -->
                        <div class="text-xs sm:text-sm text-gray-500 mb-2">
                            <?php echo esc_html($post_date); ?>
                            <?php if ($post_author) : ?>
                                <span class="mx-1">•</span>
                                <span><?php echo esc_html($post_author); ?></span>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Title with hover effect -->
                        <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2 sm:mb-3 leading-tight line-clamp-2">
                            <a href="<?php echo esc_url($post_url); ?>" class="hover:text-lm-blue transition-colors duration-300">
                                <?php echo esc_html($post_title); ?>
                            </a>
                        </h3>
                        
                        <!-- Excerpt -->
                        <p class="text-gray-600 text-sm line-clamp-3 mb-4">
                            <?php echo esc_html($post_excerpt); ?>
                        </p>
                        
                        <!-- Read more link -->
                        <a href="<?php echo esc_url($post_url); ?>" class="inline-flex items-center text-lm-blue font-medium hover:text-blue-700 transition-colors duration-300 mt-auto text-sm">
                            Baca Lengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            <?php 
                $post_index++;
            endwhile; 
            wp_reset_postdata();
            ?>
        </div>
        
        <!-- View all articles button -->
        <div class="text-center">
            <a href="<?php echo esc_url(home_url('/blog')); ?>" class="inline-flex items-center justify-center px-6 py-3 bg-lm-blue text-white text-base font-medium rounded-md hover:bg-lm-accent transition-colors duration-300 shadow-sm">
                Lihat Semua Artikel
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Add CSS for line clamp if not available in your Tailwind setup -->
<style>
@supports (-webkit-line-clamp: 2) {
    .line-clamp-2 {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }
    .line-clamp-3 {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }
}
</style>