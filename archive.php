<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * @package Labmania_Indonesia
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Archive Hero Section -->
    <section class="bg-gradient-to-br from-blue-900 via-blue-800 to-blue-950 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="archive-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="10" cy="10" r="1" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="100" height="100" fill="url(#archive-pattern)"/>
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
                                <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="hover:text-lm-yellow transition-colors duration-300">
                                    Blog
                                </a>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-lm-yellow font-medium">
                                    <?php
                                    if (is_category()) {
                                        echo single_cat_title('', false);
                                    } elseif (is_tag()) {
                                        echo single_tag_title('', false);
                                    } elseif (is_author()) {
                                        echo get_the_author();
                                    } elseif (is_date()) {
                                        if (is_year()) {
                                            echo get_the_date('Y');
                                        } elseif (is_month()) {
                                            echo get_the_date('F Y');
                                        } else {
                                            echo get_the_date();
                                        }
                                    } else {
                                        echo 'Archive';
                                    }
                                    ?>
                                </span>
                            </li>
                        </ol>
                    </nav>
                    
                    <!-- Archive Title -->
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4">
                        <?php
                        if (is_category()) {
                            echo 'Category: <span class="text-lm-yellow">' . single_cat_title('', false) . '</span>';
                        } elseif (is_tag()) {
                            echo 'Tag: <span class="text-lm-yellow">' . single_tag_title('', false) . '</span>';
                        } elseif (is_author()) {
                            echo 'Author: <span class="text-lm-yellow">' . get_the_author() . '</span>';
                        } elseif (is_date()) {
                            if (is_year()) {
                                echo 'Year: <span class="text-lm-yellow">' . get_the_date('Y') . '</span>';
                            } elseif (is_month()) {
                                echo 'Month: <span class="text-lm-yellow">' . get_the_date('F Y') . '</span>';
                            } else {
                                echo 'Date: <span class="text-lm-yellow">' . get_the_date() . '</span>';
                            }
                        } else {
                            echo 'Archive <span class="text-lm-yellow">Posts</span>';
                        }
                        ?>
                    </h1>
                    
                    <!-- Archive Description -->
                    <div class="text-lg sm:text-xl text-blue-100 mb-8">
                        <?php
                        if (is_category()) {
                            $description = category_description();
                            if ($description) {
                                echo wp_kses_post($description);
                            } else {
                                echo 'Browse all posts in the ' . single_cat_title('', false) . ' category';
                            }
                        } elseif (is_tag()) {
                            $description = tag_description();
                            if ($description) {
                                echo wp_kses_post($description);
                            } else {
                                echo 'Browse all posts tagged with ' . single_tag_title('', false);
                            }
                        } elseif (is_author()) {
                            $author_description = get_the_author_meta('description');
                            if ($author_description) {
                                echo wp_kses_post($author_description);
                            } else {
                                echo 'All posts by ' . get_the_author();
                            }
                        } elseif (is_date()) {
                            if (is_year()) {
                                echo 'Posts published in ' . get_the_date('Y');
                            } elseif (is_month()) {
                                echo 'Posts published in ' . get_the_date('F Y');
                            } else {
                                echo 'Posts published on ' . get_the_date();
                            }
                        } else {
                            echo 'Browse our archived content and discover valuable laboratory insights';
                        }
                        ?>
                    </div>
                    
                    <!-- Archive Stats -->
                    <div class="flex flex-wrap items-center justify-center gap-6 text-blue-100 text-sm">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 0v12h8V4H6z" clip-rule="evenodd"/>
                            </svg>
                            <span><?php echo $wp_query->found_posts; ?> Posts Found</span>
                        </div>
                        
                        <?php if (is_category() || is_tag()) : ?>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                </svg>
                                <span>
                                    <?php 
                                    if (is_category()) {
                                        echo 'Category Archive';
                                    } else {
                                        echo 'Tag Archive';
                                    }
                                    ?>
                                </span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        

    </section>

    <!-- Archive Content -->
    <section class="py-12 sm:py-16 lg:py-20 bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 lg:gap-12">
                
                <!-- Main Content Area -->
                <div class="lg:col-span-3">
                    <?php if (have_posts()) : ?>
                        
                        <!-- Archive Filter Bar -->
                        <div class="mb-8 bg-white rounded-xl shadow-sm p-6">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    Showing <?php echo $wp_query->post_count; ?> of <?php echo $wp_query->found_posts; ?> posts
                                </div>
                                
                                <!-- Quick Category Links -->
                                <div class="flex flex-wrap items-center gap-2">
                                    <span class="text-sm text-gray-600">Quick filter:</span>
                                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" 
                                       class="px-3 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-700 hover:bg-blue-100 hover:text-blue-900 transition-colors duration-300">
                                        All Posts
                                    </a>
                                    <?php
                                    $categories = get_categories(array('hide_empty' => true, 'number' => 4));
                                    foreach ($categories as $category) :
                                    ?>
                                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                                           class="px-3 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-700 hover:bg-blue-100 hover:text-blue-900 transition-colors duration-300 <?php echo (is_category($category->term_id)) ? 'bg-lm-yellow text-blue-900' : ''; ?>">
                                            <?php echo esc_html($category->name); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Posts Grid -->
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
                                            <?php if (!is_category()) :
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
                                            <?php endif; endif; ?>
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
                                            
                                            <?php if (!is_author()) : ?>
                                                <span class="mx-2">•</span>
                                                <span class="flex items-center">
                                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"/>
                                                    </svg>
                                                    <?php the_author(); ?>
                                                </span>
                                            <?php endif; ?>
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
                        <div class="text-center py-16 bg-white rounded-xl shadow-sm">
                            <div class="max-w-md mx-auto">
                                <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">No posts found</h3>
                                <p class="text-gray-600 mb-6">
                                    We couldn't find any posts in this archive. Try browsing other categories or return to the main blog.
                                </p>
                                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" 
                                       class="inline-flex items-center px-6 py-3 bg-blue-900 text-white font-medium rounded-lg hover:bg-blue-800 transition-colors duration-300">
                                        View All Posts
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
                        
                        <!-- Archive Info -->
                        <div class="bg-white rounded-xl shadow-sm p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                                <span class="w-1 h-6 bg-lm-yellow rounded-full mr-3"></span>
                                Archive Info
                            </h3>
                            
                            <div class="space-y-3 text-sm">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">Total Posts:</span>
                                    <span class="font-medium text-gray-900"><?php echo $wp_query->found_posts; ?></span>
                                </div>
                                
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">Archive Type:</span>
                                    <span class="font-medium text-gray-900">
                                        <?php
                                        if (is_category()) {
                                            echo 'Category';
                                        } elseif (is_tag()) {
                                            echo 'Tag';
                                        } elseif (is_author()) {
                                            echo 'Author';
                                        } elseif (is_date()) {
                                            echo 'Date';
                                        } else {
                                            echo 'Archive';
                                        }
                                        ?>
                                    </span>
                                </div>
                                
                                <?php if (is_date()) : ?>
                                    <div class="flex items-center justify-between">
                                        <span class="text-gray-600">Period:</span>
                                        <span class="font-medium text-gray-900">
                                            <?php
                                            if (is_year()) {
                                                echo get_the_date('Y');
                                            } elseif (is_month()) {
                                                echo get_the_date('F Y');
                                            } else {
                                                echo get_the_date();
                                            }
                                            ?>
                                        </span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- All Categories -->
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
                                           class="flex items-center justify-between py-2 px-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-blue-900 rounded-lg transition-all duration-300 group <?php echo (is_category($category->term_id)) ? 'bg-blue-50 text-blue-900' : ''; ?>">
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

                        <!-- Popular Tags -->
                        <?php
                        $tags = get_tags(array('orderby' => 'count', 'order' => 'DESC', 'number' => 20));
                        if ($tags) :
                        ?>
                            <div class="bg-white rounded-xl shadow-sm p-6">
                                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                                    <span class="w-1 h-6 bg-lm-yellow rounded-full mr-3"></span>
                                    Popular Tags
                                </h3>
                                
                                <div class="flex flex-wrap gap-2">
                                    <?php foreach ($tags as $tag) : ?>
                                        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" 
                                           class="inline-block px-3 py-1 bg-gray-100 text-gray-700 text-sm font-medium rounded-full hover:bg-blue-100 hover:text-blue-900 transition-colors duration-300 <?php echo (is_tag($tag->term_id)) ? 'bg-lm-yellow text-blue-900' : ''; ?>">
                                            #<?php echo esc_html($tag->name); ?> (<?php echo $tag->count; ?>)
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- Back to Blog -->
                        <div class="bg-gradient-to-br from-blue-900 to-blue-800 rounded-xl shadow-sm p-6 text-white text-center">
                            <h3 class="text-lg font-bold mb-2">Explore More</h3>
                            <p class="text-blue-100 text-sm mb-4">Discover more laboratory insights and innovations</p>
                            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" 
                               class="inline-flex items-center px-4 py-2 bg-lm-yellow text-blue-900 font-medium rounded-lg hover:bg-lm-yellow-light transition-colors duration-300">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                </svg>
                                All Posts
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>