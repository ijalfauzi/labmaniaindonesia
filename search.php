<?php
/**
 * The template for displaying search results pages
 *
 * @package Labmania_Indonesia
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Search Results Hero Section -->
    <section class="bg-gradient-to-br from-blue-900 via-blue-800 to-blue-950 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="search-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="10" cy="10" r="1" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="100" height="100" fill="url(#search-pattern)"/>
            </svg>
        </div>
        
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="py-16 sm:py-20 lg:py-24 text-center">
                <div class="max-w-3xl mx-auto">
                    <!-- Breadcrumb -->
                    <nav class="mb-6 text-sm">
                        <ol class="flex items-center justify-center space-x-2 text-blue-200">
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-lm-yellow transition-colors duration-300">
                                    Home
                                </a>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-lm-yellow font-medium">Search Results</span>
                            </li>
                        </ol>
                    </nav>
                    
                    <!-- Search Icon -->
                    <div class="w-16 h-16 bg-lm-yellow rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    
                    <!-- Search Title -->
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4">
                        Search <span class="text-lm-yellow">Results</span>
                    </h1>
                    
                    <!-- Search Query Display -->
                    <?php if (get_search_query()) : ?>
                        <p class="text-lg sm:text-xl text-blue-100 mb-6">
                            You searched for: <span class="text-lm-yellow font-semibold">"<?php echo esc_html(get_search_query()); ?>"</span>
                        </p>
                    <?php endif; ?>
                    
                    <!-- Results Count -->
                    <div class="text-blue-200 text-sm mb-8">
                        <?php if (have_posts()) : ?>
                            Found <?php echo $wp_query->found_posts; ?> result<?php echo ($wp_query->found_posts != 1) ? 's' : ''; ?>
                        <?php else : ?>
                            No results found
                        <?php endif; ?>
                    </div>
                    
                    <!-- New Search Bar -->
                    <div class="max-w-lg mx-auto">
                        <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="relative">
                            <input 
                                type="search" 
                                name="s" 
                                placeholder="Try a new search..."
                                value="<?php echo get_search_query(); ?>"
                                class="w-full px-4 py-3 pl-12 pr-16 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-lm-yellow focus:border-transparent transition-all duration-300"
                            >
                            <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 px-3 py-1 bg-lm-yellow text-blue-900 font-medium rounded-lg hover:bg-lm-yellow-light transition-colors duration-300 text-sm">
                                Search
                            </button>
                            <div class="absolute left-4 top-1/2 transform -translate-y-1/2 text-blue-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Results Content -->
    <section class="py-12 sm:py-16 lg:py-20 bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 lg:gap-12">
                
                <!-- Main Content Area -->
                <div class="lg:col-span-3">
                    <?php if (have_posts()) : ?>
                        
                        <!-- Search Results Info -->
                        <div class="mb-8 bg-white rounded-xl shadow-sm p-6">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/>
                                    </svg>
                                    Showing <?php echo $wp_query->post_count; ?> of <?php echo $wp_query->found_posts; ?> results for "<strong><?php echo esc_html(get_search_query()); ?></strong>"
                                </div>
                                
                                <!-- Search Tips -->
                                <div class="text-xs text-gray-500">
                                    <span class="hidden sm:inline">💡 Tip: Use specific keywords for better results</span>
                                </div>
                            </div>
                        </div>

                        <!-- Search Results -->
                        <div class="space-y-6">
                            <?php while (have_posts()) : the_post(); ?>
                                <article class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden group">
                                    <div class="p-6">
                                        <div class="flex flex-col lg:flex-row lg:items-start gap-6">
                                            
                                            <!-- Featured Image -->
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="flex-shrink-0">
                                                    <a href="<?php the_permalink(); ?>" class="block">
                                                        <?php the_post_thumbnail('medium', array(
                                                            'class' => 'w-full lg:w-48 h-32 lg:h-28 object-cover rounded-lg group-hover:scale-105 transition-transform duration-300',
                                                            'loading' => 'lazy'
                                                        )); ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                            
                                            <!-- Content -->
                                            <div class="flex-1 min-w-0">
                                                <!-- Meta Info -->
                                                <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500 mb-3">
                                                    <!-- Post Type Badge -->
                                                    <span class="inline-block px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full">
                                                        <?php echo get_post_type_object(get_post_type())->labels->singular_name; ?>
                                                    </span>
                                                    
                                                    <!-- Category -->
                                                    <?php if (get_post_type() === 'post') :
                                                        $categories = get_the_category();
                                                        if (!empty($categories)) :
                                                            $category = $categories[0];
                                                    ?>
                                                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                                                           class="text-blue-600 hover:text-blue-800 transition-colors duration-300">
                                                            <?php echo esc_html($category->name); ?>
                                                        </a>
                                                    <?php endif; endif; ?>
                                                    
                                                    <!-- Date -->
                                                    <time datetime="<?php echo get_the_date('c'); ?>" class="flex items-center">
                                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                                        </svg>
                                                        <?php echo get_the_date(); ?>
                                                    </time>
                                                    
                                                    <!-- Author -->
                                                    <?php if (get_post_type() === 'post') : ?>
                                                        <span class="flex items-center">
                                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"/>
                                                            </svg>
                                                            <?php the_author(); ?>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                                
                                                <!-- Title -->
                                                <h2 class="text-xl lg:text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-900 transition-colors duration-300">
                                                    <a href="<?php the_permalink(); ?>" class="hover:underline">
                                                        <?php 
                                                        $title = get_the_title();
                                                        $search_query = get_search_query();
                                                        if ($search_query) {
                                                            $highlighted_title = preg_replace('/(' . preg_quote($search_query, '/') . ')/i', '<mark class="bg-lm-yellow text-blue-900 px-1 rounded">$1</mark>', $title);
                                                            echo $highlighted_title;
                                                        } else {
                                                            echo $title;
                                                        }
                                                        ?>
                                                    </a>
                                                </h2>
                                                
                                                <!-- Excerpt with Search Term Highlighting -->
                                                <p class="text-gray-600 leading-relaxed mb-4">
                                                    <?php 
                                                    $excerpt = wp_trim_words(get_the_excerpt(), 30, '...');
                                                    $search_query = get_search_query();
                                                    if ($search_query) {
                                                        $highlighted_excerpt = preg_replace('/(' . preg_quote($search_query, '/') . ')/i', '<mark class="bg-lm-yellow text-blue-900 px-1 rounded">$1</mark>', $excerpt);
                                                        echo $highlighted_excerpt;
                                                    } else {
                                                        echo $excerpt;
                                                    }
                                                    ?>
                                                </p>
                                                
                                                <!-- URL Display -->
                                                <div class="text-sm text-gray-500 mb-4">
                                                    <svg class="w-4 h-4 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"/>
                                                    </svg>
                                                    <?php echo esc_url(get_permalink()); ?>
                                                </div>
                                                
                                                <!-- Read More -->
                                                <a href="<?php the_permalink(); ?>" 
                                                   class="inline-flex items-center text-blue-900 hover:text-lm-yellow font-medium transition-colors duration-300 group">
                                                    Read More
                                                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>

                        <!-- Pagination -->
                        <div class="mt-12">
                            <?php
                            $pagination = paginate_links(array(
                                'prev_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>',
                                'next_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>',
                                'type' => 'array'
                            ));
                            
                            if ($pagination) :
                            ?>
                                <nav class="flex justify-center">
                                    <div class="flex space-x-2">
                                        <?php foreach ($pagination as $link) : ?>
                                            <div class="pagination-item">
                                                <?php 
                                                echo str_replace(
                                                    array('page-numbers', 'current'),
                                                    array('px-4 py-2 text-sm font-medium rounded-lg border transition-all duration-300', 'bg-blue-900 text-white border-blue-900'),
                                                    str_replace(
                                                        'page-numbers',
                                                        'px-4 py-2 text-sm font-medium rounded-lg border border-gray-300 text-gray-700 bg-white hover:bg-gray-50 hover:border-blue-900 hover:text-blue-900 transition-all duration-300',
                                                        $link
                                                    )
                                                );
                                                ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </nav>
                            <?php endif; ?>
                        </div>

                    <?php else : ?>
                        
                        <!-- No Results Found -->
                        <div class="text-center py-16 bg-white rounded-xl shadow-sm">
                            <div class="max-w-lg mx-auto">
                                <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">No results found</h3>
                                <p class="text-gray-600 mb-6">
                                    Sorry, we couldn't find any results for "<strong><?php echo esc_html(get_search_query()); ?></strong>". Try adjusting your search terms or browse our content below.
                                </p>
                                
                                <!-- Search Suggestions -->
                                <div class="bg-gray-50 rounded-lg p-6 mb-6 text-left">
                                    <h4 class="font-semibold text-gray-900 mb-3">Search suggestions:</h4>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        <li>• Check your spelling and try again</li>
                                        <li>• Use fewer or different keywords</li>
                                        <li>• Try more general terms</li>
                                        <li>• Browse our categories below</li>
                                    </ul>
                                </div>
                                
                                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" 
                                       class="inline-flex items-center px-6 py-3 bg-blue-900 text-white font-medium rounded-lg hover:bg-blue-800 transition-colors duration-300">
                                        Browse All Posts
                                    </a>
                                    <a href="<?php echo esc_url(home_url('/')); ?>" 
                                       class="inline-flex items-center px-6 py-3 bg-gray-100 text-gray-700 font-medium rounded-lg hover:bg-gray-200 transition-colors duration-300">
                                        Back to Home
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    <?php endif; ?>
                </div>

                <!-- Sidebar -->
                <aside class="lg:col-span-1">
                    <div class="space-y-8">
                        
                        <!-- Search Info -->
                        <div class="bg-white rounded-xl shadow-sm p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                                <span class="w-1 h-6 bg-lm-yellow rounded-full mr-3"></span>
                                Search Info
                            </h3>
                            
                            <div class="space-y-3 text-sm">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">Query:</span>
                                    <span class="font-medium text-gray-900 truncate ml-2">"<?php echo esc_html(get_search_query()); ?>"</span>
                                </div>
                                
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">Results:</span>
                                    <span class="font-medium text-gray-900"><?php echo $wp_query->found_posts; ?></span>
                                </div>
                                
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">Page:</span>
                                    <span class="font-medium text-gray-900"><?php echo max(1, get_query_var('paged')); ?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Popular Categories -->
                        <div class="bg-white rounded-xl shadow-sm p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                                <span class="w-1 h-6 bg-lm-yellow rounded-full mr-3"></span>
                                Browse Categories
                            </h3>
                            
                            <ul class="space-y-2">
                                <?php
                                $categories = get_categories(array('hide_empty' => true, 'number' => 6));
                                foreach ($categories as $category) :
                                ?>
                                    <li>
                                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                                           class="flex items-center justify-between py-2 px-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-blue-900 rounded-lg transition-all duration-300 group">
                                            <span class="group-hover:translate-x-1 transition-transform duration-300">
                                                <?php echo esc_html($category->name); ?>
                                            </span>
                                            <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded-full">
                                                <?php echo $category->count; ?>
                                            </span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <!-- Popular Search Terms -->
                        <div class="bg-white rounded-xl shadow-sm p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                                <span class="w-1 h-6 bg-lm-yellow rounded-full mr-3"></span>
                                Popular Searches
                            </h3>
                            
                            <div class="flex flex-wrap gap-2">
                                <?php
                                // Popular search terms - you can customize these based on your content
                                $popular_searches = array(
                                    'laboratory equipment',
                                    'lab design',
                                    'calibration',
                                    'microscope',
                                    'centrifuge',
                                    'safety',
                                    'training',
                                    'maintenance'
                                );
                                
                                foreach ($popular_searches as $term) :
                                ?>
                                    <a href="<?php echo esc_url(home_url('/?s=' . urlencode($term))); ?>" 
                                       class="inline-block px-3 py-1 bg-gray-100 text-gray-700 text-sm font-medium rounded-full hover:bg-blue-100 hover:text-blue-900 transition-colors duration-300">
                                        <?php echo esc_html($term); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Help Box -->
                        <div class="bg-gradient-to-br from-blue-900 to-blue-800 rounded-xl shadow-sm p-6 text-white text-center">
                            <div class="w-12 h-12 bg-lm-yellow rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold mb-2">Need Help?</h3>
                            <p class="text-blue-100 text-sm mb-4">Can't find what you're looking for? Contact our team for assistance.</p>
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" 
                               class="inline-flex items-center px-4 py-2 bg-lm-yellow text-blue-900 font-medium rounded-lg hover:bg-lm-yellow-light transition-colors duration-300">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<style>
/* Search result highlighting */
mark {
    background-color: #fee600 !important;
    color: #1e3a8a !important;
    padding: 0.125rem 0.25rem;
    border-radius: 0.25rem;
    font-weight: 600;
}
</style>

<?php get_footer(); ?>