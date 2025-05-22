<?php
/**
 * The template for displaying all single posts
 *
 * @package Labmania_Indonesia
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php while (have_posts()) : the_post(); ?>
        
        <!-- Hero Section with Featured Image -->
        <section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-blue-950 overflow-hidden">
            <?php if (has_post_thumbnail()) : ?>
                <!-- Featured Image Background -->
                <div class="absolute inset-0">
                    <?php the_post_thumbnail('full', array(
                        'class' => 'w-full h-full object-cover opacity-20'
                    )); ?>
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-900/80 via-blue-800/80 to-blue-950/80"></div>
                </div>
            <?php endif; ?>
            
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="py-16 sm:py-20 lg:py-24">
                    <div class="max-w-4xl mx-auto text-center">
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
                                        <?php echo wp_trim_words(get_the_title(), 4, '...'); ?>
                                    </span>
                                </li>
                            </ol>
                        </nav>
                        
                        <!-- Category Badge -->
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) :
                            $category = $categories[0];
                        ?>
                            <div class="mb-4">
                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                                   class="inline-block px-4 py-2 bg-lm-yellow text-blue-900 text-sm font-semibold rounded-full hover:bg-lm-yellow-light transition-colors duration-300">
                                    <?php echo esc_html($category->name); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Title -->
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                            <?php the_title(); ?>
                        </h1>
                        
                        <!-- Meta Info -->
                        <div class="flex flex-wrap items-center justify-center gap-4 text-blue-100 text-sm">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"/>
                                </svg>
                                <span>By <?php the_author(); ?></span>
                            </div>
                            
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                </svg>
                                <time datetime="<?php echo get_the_date('c'); ?>">
                                    <?php echo get_the_date(); ?>
                                </time>
                            </div>
                            
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                </svg>
                                <span><?php echo estimated_reading_time(); ?> min read</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </section>

        <!-- Article Content -->
        <article class="py-12 sm:py-16 lg:py-20 bg-white">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
                    
                    <!-- Main Content -->
                    <div class="lg:col-span-3">
                        <div class="max-w-4xl">
                            <!-- Post Content -->
                            <div class="prose prose-lg max-w-none">
                                <div class="content-style text-gray-700 leading-relaxed">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            
                            <!-- Post Tags -->
                            <?php
                            $tags = get_the_tags();
                            if ($tags) :
                            ?>
                                <div class="mt-8 pt-8 border-t border-gray-200">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Tags</h3>
                                    <div class="flex flex-wrap gap-2">
                                        <?php foreach ($tags as $tag) : ?>
                                            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" 
                                               class="inline-block px-3 py-1 bg-gray-100 text-gray-700 text-sm font-medium rounded-full hover:bg-blue-100 hover:text-blue-900 transition-colors duration-300">
                                                #<?php echo esc_html($tag->name); ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Author Bio -->
                            <div class="mt-12 bg-gray-50 rounded-xl p-6">
                                <div class="flex items-start space-x-4">
                                    <div class="flex-shrink-0">
                                        <?php echo get_avatar(get_the_author_meta('ID'), 64, '', '', array('class' => 'w-16 h-16 rounded-full')); ?>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-lg font-semibold text-gray-900 mb-1">
                                            <?php the_author(); ?>
                                        </h3>
                                        <?php if (get_the_author_meta('description')) : ?>
                                            <p class="text-gray-600 text-sm">
                                                <?php the_author_meta('description'); ?>
                                            </p>
                                        <?php else : ?>
                                            <p class="text-gray-600 text-sm">
                                                Laboratory specialist and content contributor at Labmania Indonesia.
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Post Navigation -->
                            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-6">
                                <?php
                                $prev_post = get_previous_post();
                                $next_post = get_next_post();
                                ?>
                                
                                <?php if ($prev_post) : ?>
                                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-gray-100 transition-colors duration-300">
                                        <p class="text-sm text-gray-500 mb-2 flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                            </svg>
                                            Previous Post
                                        </p>
                                        <h3 class="font-semibold text-gray-900 hover:text-blue-900 transition-colors duration-300">
                                            <a href="<?php echo get_permalink($prev_post->ID); ?>">
                                                <?php echo get_the_title($prev_post->ID); ?>
                                            </a>
                                        </h3>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ($next_post) : ?>
                                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-gray-100 transition-colors duration-300">
                                        <p class="text-sm text-gray-500 mb-2 flex items-center justify-end">
                                            Next Post
                                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </p>
                                        <h3 class="font-semibold text-gray-900 hover:text-blue-900 transition-colors duration-300 text-right">
                                            <a href="<?php echo get_permalink($next_post->ID); ?>">
                                                <?php echo get_the_title($next_post->ID); ?>
                                            </a>
                                        </h3>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sidebar -->
                    <aside class="lg:col-span-1">
                        <div class="sticky top-24 space-y-8">
                            
                            <!-- Share Buttons -->
                            <div class="bg-white rounded-xl shadow-sm p-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                    <span class="w-1 h-6 bg-lm-yellow rounded-full mr-3"></span>
                                    Share This Post
                                </h3>
                                <div class="space-y-3">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" 
                                       target="_blank" rel="noopener"
                                       class="flex items-center w-full px-4 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-300">
                                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd"/>
                                        </svg>
                                        Share on Facebook
                                    </a>
                                    
                                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" 
                                       target="_blank" rel="noopener"
                                       class="flex items-center w-full px-4 py-3 bg-sky-500 text-white rounded-lg hover:bg-sky-600 transition-colors duration-300">
                                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"/>
                                        </svg>
                                        Share on Twitter
                                    </a>
                                    
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" 
                                       target="_blank" rel="noopener"
                                       class="flex items-center w-full px-4 py-3 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition-colors duration-300">
                                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"/>
                                        </svg>
                                        Share on LinkedIn
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Related Posts -->
                            <div class="bg-white rounded-xl shadow-sm p-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                    <span class="w-1 h-6 bg-lm-yellow rounded-full mr-3"></span>
                                    Related Posts
                                </h3>
                                
                                <?php
                                $related_posts = new WP_Query(array(
                                    'posts_per_page' => 3,
                                    'post__not_in' => array(get_the_ID()),
                                    'category__in' => wp_get_post_categories(get_the_ID())
                                ));
                                
                                if ($related_posts->have_posts()) :
                                    while ($related_posts->have_posts()) : $related_posts->the_post();
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
                                    <p class="text-sm text-gray-500">No related posts found.</p>
                                <?php endif; ?>
                            </div>

                            <!-- Back to Blog -->
                            <div class="bg-gradient-to-br from-blue-900 to-blue-800 rounded-xl shadow-sm p-6 text-white text-center">
                                <h3 class="text-lg font-bold mb-2">Explore More</h3>
                                <p class="text-blue-100 text-sm mb-4">Discover more laboratory insights and innovations</p>
                                <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" 
                                   class="inline-flex items-center px-4 py-2 bg-lm-yellow text-blue-900 font-medium rounded-lg hover:bg-lm-yellow-light transition-colors duration-300">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                    </svg>
                                    Back to Blog
                                </a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<style>
/* Enhanced content styling */
.content-style h1,
.content-style h2,
.content-style h3,
.content-style h4,
.content-style h5,
.content-style h6 {
    @apply font-bold text-gray-900 mt-8 mb-4;
}

.content-style h1 { @apply text-3xl; }
.content-style h2 { @apply text-2xl; }
.content-style h3 { @apply text-xl; }
.content-style h4 { @apply text-lg; }

.content-style p {
    @apply mb-4 leading-relaxed;
}

.content-style ul,
.content-style ol {
    @apply mb-4 ml-6;
}

.content-style li {
    @apply mb-2;
}

.content-style a {
    @apply text-blue-900 hover:text-lm-yellow transition-colors duration-300 underline;
}

.content-style blockquote {
    @apply border-l-4 border-lm-yellow pl-4 py-2 my-6 bg-gray-50 italic text-gray-700;
}

.content-style img {
    @apply rounded-lg shadow-md my-6;
}

.content-style pre {
    @apply bg-gray-100 p-4 rounded-lg overflow-x-auto my-6;
}

.content-style code {
    @apply bg-gray-100 px-2 py-1 rounded text-sm;
}
</style>

<?php get_footer(); ?>