<?php
/**
 * Blog Posts Index Template (home.php)
 * 
 * Template for displaying the blog posts index page
 * Modern, clean blog layout with mobile-first responsive design
 * Features: Hero section, search, categories, pagination
 *
 * @package Labmania_Indonesia
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Blog Hero Section -->
    <section class="bg-gradient-to-br from-blue-900 via-blue-800 to-blue-950 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="blog-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="10" cy="10" r="1" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="100" height="100" fill="url(#blog-pattern)"/>
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
                                <span class="text-lm-yellow font-medium">Blog</span>
                            </li>
                        </ol>
                    </nav>
                    
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4">
                        Laboratory <span class="text-lm-yellow">Insights</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-blue-100 mb-8">
                        Stay updated with the latest trends, innovations, and best practices in laboratory science and equipment
                    </p>
                    
                    <!-- Search Bar -->
                    <div class="max-w-lg mx-auto">
                        <form role="search" method="get" class="relative">
                            <input 
                                type="search" 
                                name="s" 
                                placeholder="Search articles..."
                                value="<?php echo get_search_query(); ?>"
                                class="w-full px-4 py-3 pl-12 pr-4 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-lm-yellow focus:border-transparent transition-all duration-300"
                            >
                            <button type="submit" class="absolute left-4 top-1/2 transform -translate-y-1/2 text-blue-200 hover:text-lm-yellow transition-colors duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        

    </section>

    <!-- Blog Content -->
    <section class="py-12 sm:py-16 lg:py-20 bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 lg:gap-12">
                
                <!-- Main Content Area -->
                <div class="lg:col-span-3">
                    <!-- Category Filter -->
                    <div class="mb-8">
                        <div class="flex flex-wrap items-center gap-3">
                            <span class="text-sm font-medium text-gray-600">Filter by category:</span>
                            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" 
                               class="px-4 py-2 text-sm font-medium rounded-full bg-lm-yellow text-blue-900 hover:bg-lm-yellow-light transition-colors duration-300">
                                All Posts
                            </a>
                            <?php
                            $categories = get_categories(array('hide_empty' => true));
                            foreach ($categories as $category) :
                            ?>
                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                                   class="px-4 py-2 text-sm font-medium rounded-full bg-white text-gray-700 hover:bg-blue-50 hover:text-blue-900 border border-gray-200 transition-all duration-300">
                                    <?php echo esc_html($category->name); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Blog Posts Grid -->
                    <?php if (have_posts()) : ?>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                            <?php while (have_posts()) : the_post(); ?>
                                <article class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 overflow-hidden group">
                                    
                                    <!-- Featured Image -->
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="relative overflow-hidden">
                                            <a href="<?php the_permalink(); ?>" class="block">
                                                <?php the_post_thumbnail('large', array(
                                                    'class' => 'w-full h-48 sm:h-56 object-cover group-hover:scale-105 transition-transform duration-500',
                                                    'loading' => 'lazy'
                                                )); ?>
                                            </a>
                                            
                                            <!-- Category Badge -->
                                            <?php
                                            $categories = get_the_category();
                                            if (!empty($categories)) :
                                                $category = $categories[0];
                                            ?>
                                                <div class="absolute top-4 left-4">
                                                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                                                       class="inline-block px-3 py-1 bg-lm-yellow text-blue-900 text-xs font-semibold rounded-full hover:bg-lm-yellow-light transition-colors duration-300">
                                                        <?php echo esc_html($category->name); ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <!-- Post Content -->
                                    <div class="p-6">
                                        <!-- Meta Info -->
                                        <div class="flex items-center text-sm text-gray-500 mb-3">
                                            <time datetime="<?php echo get_the_date('c'); ?>" class="flex items-center">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                                </svg>
                                                <?php echo get_the_date(); ?>
                                            </time>
                                            
                                            <span class="mx-2">•</span>
                                            
                                            <span class="flex items-center">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"/>
                                                </svg>
                                                <?php the_author(); ?>
                                            </span>
                                        </div>
                                        
                                        <!-- Title -->
                                        <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-900 transition-colors duration-300">
                                            <a href="<?php the_permalink(); ?>" class="hover:underline">
                                                <?php the_title(); ?>
                                            </a>
                                        </h2>
                                        
                                        <!-- Excerpt -->
                                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                            <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                        </p>
                                        
                                        <!-- Read More -->
                                        <a href="<?php the_permalink(); ?>" 
                                           class="inline-flex items-center text-blue-900 hover:text-lm-yellow font-medium text-sm transition-colors duration-300 group">
                                            Read More
                                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </a>
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
                        <!-- No Posts Found -->
                        <div class="text-center py-16">
                            <div class="max-w-md mx-auto">
                                <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">No posts found</h3>
                                <p class="text-gray-600 mb-6">We couldn't find any blog posts. Please try again later or search for something else.</p>
                                <a href="<?php echo esc_url(home_url('/')); ?>" 
                                   class="inline-flex items-center px-6 py-3 bg-blue-900 text-white font-medium rounded-lg hover:bg-blue-800 transition-colors duration-300">
                                    Back to Home
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Sidebar -->
                <aside class="lg:col-span-1">
                    <div class="space-y-8">
                        
                        <!-- Featured Posts -->
                        <div class="bg-white rounded-xl shadow-sm p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                                <span class="w-1 h-6 bg-lm-yellow rounded-full mr-3"></span>
                                Featured Posts
                            </h3>
                            
                            <?php
                            $featured_posts = new WP_Query(array(
                                'posts_per_page' => 3,
                                'meta_query' => array(
                                    array(
                                        'key' => 'featured_post',
                                        'value' => 'yes',
                                        'compare' => '='
                                    )
                                )
                            ));
                            
                            if ($featured_posts->have_posts()) :
                                while ($featured_posts->have_posts()) : $featured_posts->the_post();
                            ?>
                                <article class="group mb-4 last:mb-0">
                                    <div class="flex space-x-3">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="flex-shrink-0">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('thumbnail', array(
                                                        'class' => 'w-16 h-16 object-cover rounded-lg',
                                                        'loading' => 'lazy'
                                                    )); ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        
                                        <div class="flex-1 min-w-0">
                                            <h4 class="text-sm font-medium text-gray-900 group-hover:text-blue-900 transition-colors duration-300 mb-1">
                                                <a href="<?php the_permalink(); ?>" class="hover:underline">
                                                    <?php echo wp_trim_words(get_the_title(), 8, '...'); ?>
                                                </a>
                                            </h4>
                                            <p class="text-xs text-gray-500">
                                                <?php echo get_the_date(); ?>
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            <?php 
                                endwhile;
                                wp_reset_postdata();
                            else :
                            ?>
                                <p class="text-sm text-gray-500">No featured posts available.</p>
                            <?php endif; ?>
                        </div>

                        <!-- Categories -->
                        <div class="bg-white rounded-xl shadow-sm p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                                <span class="w-1 h-6 bg-lm-yellow rounded-full mr-3"></span>
                                Categories
                            </h3>
                            
                            <ul class="space-y-2">
                                <?php
                                $categories = get_categories(array('hide_empty' => true));
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

                        <!-- Newsletter Signup -->
                        <div class="bg-gradient-to-br from-blue-900 to-blue-800 rounded-xl shadow-sm p-6 text-white">
                            <h3 class="text-lg font-bold mb-2">Stay Updated</h3>
                            <p class="text-blue-100 text-sm mb-4">Get the latest laboratory insights delivered to your inbox.</p>
                            
                            <form class="space-y-3">
                                <input 
                                    type="email" 
                                    placeholder="Your email address"
                                    class="w-full px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg text-white placeholder-blue-200 text-sm focus:outline-none focus:ring-2 focus:ring-lm-yellow focus:border-transparent"
                                    required
                                >
                                <button type="submit" class="w-full bg-lm-yellow text-blue-900 font-medium py-2 px-4 rounded-lg hover:bg-lm-yellow-light transition-colors duration-300 text-sm">
                                    Subscribe Now
                                </button>
                            </form>
                        </div>

                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>