<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package Labmania_Indonesia
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php while (have_posts()) : the_post(); ?>
        
        <!-- Page Hero Section -->
        <section class="bg-gradient-to-br from-blue-900 via-blue-800 to-blue-950 relative overflow-hidden">
            <?php if (has_post_thumbnail()) : ?>
                <!-- Featured Image Background -->
                <div class="absolute inset-0">
                    <?php the_post_thumbnail('full', array(
                        'class' => 'w-full h-full object-cover opacity-20'
                    )); ?>
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-900/80 via-blue-800/80 to-blue-950/80"></div>
                </div>
            <?php else : ?>
                <!-- Background Pattern -->
                <div class="absolute inset-0 opacity-10">
                    <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="page-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <circle cx="10" cy="10" r="1" fill="currentColor"/>
                            </pattern>
                        </defs>
                        <rect width="100" height="100" fill="url(#page-pattern)"/>
                    </svg>
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
                                <?php if (wp_get_post_parent_id(get_the_ID())) : ?>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <a href="<?php echo get_permalink(wp_get_post_parent_id(get_the_ID())); ?>" class="hover:text-lm-yellow transition-colors duration-300">
                                            <?php echo get_the_title(wp_get_post_parent_id(get_the_ID())); ?>
                                        </a>
                                    </li>
                                <?php endif; ?>
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
                        
                        <!-- Page Title -->
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4 leading-tight">
                            <?php the_title(); ?>
                        </h1>
                        
                        <!-- Page Excerpt/Meta Description -->
                        <?php if (has_excerpt()) : ?>
                            <div class="text-lg sm:text-xl text-blue-100 mb-6 max-w-3xl mx-auto">
                                <?php the_excerpt(); ?>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Page Meta Info -->
                        <div class="flex flex-wrap items-center justify-center gap-4 text-blue-100 text-sm">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                </svg>
                                <time datetime="<?php echo get_the_modified_date('c'); ?>">
                                    Last updated: <?php echo get_the_modified_date(); ?>
                                </time>
                            </div>
                            
                            <?php if (wp_get_post_parent_id(get_the_ID())) : ?>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Sub-page</span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Page Content -->
        <article class="py-12 sm:py-16 lg:py-20 bg-white">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
                    
                    <!-- Main Content -->
                    <div class="lg:col-span-3">
                        <div class="max-w-4xl">
                            <!-- Featured Image (if not shown in hero) -->
                            <?php if (has_post_thumbnail() && get_theme_mod('show_page_featured_image', false)) : ?>
                                <div class="mb-8 rounded-xl overflow-hidden shadow-lg">
                                    <?php the_post_thumbnail('large', array(
                                        'class' => 'w-full h-auto object-cover'
                                    )); ?>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Page Content -->
                            <div class="prose prose-lg max-w-none">
                                <div class="content-style text-gray-700 leading-relaxed">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            
                            <!-- Page Links (for multi-page content) -->
                            <?php
                            wp_link_pages(array(
                                'before' => '<div class="mt-8 pt-8 border-t border-gray-200"><nav class="flex justify-center"><div class="flex space-x-2">',
                                'after' => '</div></nav></div>',
                                'link_before' => '<span class="px-4 py-2 text-sm font-medium rounded-lg border border-gray-300 text-gray-700 bg-white hover:bg-gray-50 hover:border-blue-900 hover:text-blue-900 transition-all duration-300">',
                                'link_after' => '</span>',
                                'pagelink' => 'Page %',
                                'separator' => '',
                            ));
                            ?>
                            
                            <!-- Child Pages -->
                            <?php
                            $child_pages = get_children(array(
                                'post_parent' => get_the_ID(),
                                'post_type' => 'page',
                                'post_status' => 'publish',
                                'orderby' => 'menu_order',
                                'order' => 'ASC'
                            ));
                            
                            if ($child_pages) :
                            ?>
                                <div class="mt-12 bg-gray-50 rounded-xl p-6">
                                    <h3 class="text-xl font-semibold text-gray-900 mb-6 flex items-center">
                                        <span class="w-1 h-6 bg-lm-yellow rounded-full mr-3"></span>
                                        Related Pages
                                    </h3>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <?php foreach ($child_pages as $child) : ?>
                                            <a href="<?php echo get_permalink($child->ID); ?>" 
                                               class="block p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 group">
                                                <h4 class="font-medium text-gray-900 group-hover:text-blue-900 transition-colors duration-300 mb-2">
                                                    <?php echo get_the_title($child->ID); ?>
                                                </h4>
                                                <?php if ($child->post_excerpt) : ?>
                                                    <p class="text-sm text-gray-600">
                                                        <?php echo wp_trim_words($child->post_excerpt, 15, '...'); ?>
                                                    </p>
                                                <?php endif; ?>
                                                <div class="mt-2 text-sm text-blue-600 group-hover:text-blue-800 flex items-center">
                                                    Read more
                                                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                                    </svg>
                                                </div>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Page Actions -->
                            <div class="mt-12 pt-8 border-t border-gray-200">
                                <div class="flex flex-wrap items-center justify-between gap-4">
                                    <!-- Share Buttons -->
                                    <div class="flex items-center gap-3">
                                        <span class="text-sm text-gray-600">Share this page:</span>
                                        <div class="flex space-x-2">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" 
                                               target="_blank" rel="noopener"
                                               class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center hover:bg-blue-700 transition-colors duration-300">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd"/>
                                                </svg>
                                            </a>
                                            
                                            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" 
                                               target="_blank" rel="noopener"
                                               class="w-8 h-8 bg-sky-500 text-white rounded-lg flex items-center justify-center hover:bg-sky-600 transition-colors duration-300">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"/>
                                                </svg>
                                            </a>
                                            
                                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" 
                                               target="_blank" rel="noopener"
                                               class="w-8 h-8 bg-blue-700 text-white rounded-lg flex items-center justify-center hover:bg-blue-800 transition-colors duration-300">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <!-- Print Button -->
                                    <button onclick="window.print()" 
                                            class="flex items-center px-4 py-2 text-sm text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors duration-300">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
                                        </svg>
                                        Print Page
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sidebar -->
                    <aside class="lg:col-span-1">
                        <div class="sticky top-24 space-y-8">
                            
                            <!-- Page Navigation (Table of Contents) -->
                            <div class="bg-white rounded-xl shadow-sm p-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                    <span class="w-1 h-6 bg-lm-yellow rounded-full mr-3"></span>
                                    Page Navigation
                                </h3>
                                <div id="page-toc" class="space-y-2 text-sm">
                                    <!-- This will be populated by JavaScript if headings exist -->
                                </div>
                            </div>
                            
                            <!-- Page Information -->
                            <div class="bg-white rounded-xl shadow-sm p-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                    <span class="w-1 h-6 bg-lm-yellow rounded-full mr-3"></span>
                                    Page Info
                                </h3>
                                
                                <div class="space-y-3 text-sm">
                                    <div class="flex items-center justify-between">
                                        <span class="text-gray-600">Published:</span>
                                        <span class="text-gray-900"><?php echo get_the_date(); ?></span>
                                    </div>
                                    
                                    <div class="flex items-center justify-between">
                                        <span class="text-gray-600">Updated:</span>
                                        <span class="text-gray-900"><?php echo get_the_modified_date(); ?></span>
                                    </div>
                                    
                                    <?php if (wp_get_post_parent_id(get_the_ID())) : ?>
                                        <div class="flex items-center justify-between">
                                            <span class="text-gray-600">Parent Page:</span>
                                            <a href="<?php echo get_permalink(wp_get_post_parent_id(get_the_ID())); ?>" 
                                               class="text-blue-600 hover:text-blue-800 truncate">
                                                <?php echo wp_trim_words(get_the_title(wp_get_post_parent_id(get_the_ID())), 3, '...'); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <div class="flex items-center justify-between">
                                        <span class="text-gray-600">Reading Time:</span>
                                        <span class="text-gray-900"><?php echo estimated_reading_time(); ?> min</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact CTA -->
                            <div class="bg-gradient-to-br from-blue-900 to-blue-800 rounded-xl shadow-sm p-6 text-white text-center">
                                <div class="w-12 h-12 bg-lm-yellow rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold mb-2">Have Questions?</h3>
                                <p class="text-blue-100 text-sm mb-4">Need more information or have specific requirements? We're here to help.</p>
                                <a href="<?php echo esc_url(home_url('/contact')); ?>" 
                                   class="inline-flex items-center px-4 py-2 bg-lm-yellow text-blue-900 font-medium rounded-lg hover:bg-lm-yellow-light transition-colors duration-300">
                                    Contact Us
                                </a>
                            </div>

                            <!-- Related Pages -->
                            <?php
                            $related_pages = get_pages(array(
                                'parent' => wp_get_post_parent_id(get_the_ID()) ?: get_the_ID(),
                                'exclude' => get_the_ID(),
                                'number' => 5,
                                'sort_column' => 'menu_order'
                            ));
                            
                            if ($related_pages) :
                            ?>
                                <div class="bg-white rounded-xl shadow-sm p-6">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                        <span class="w-1 h-6 bg-lm-yellow rounded-full mr-3"></span>
                                        Related Pages
                                    </h3>
                                    
                                    <ul class="space-y-3">
                                        <?php foreach ($related_pages as $page) : ?>
                                            <li>
                                                <a href="<?php echo get_permalink($page->ID); ?>" 
                                                   class="block p-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-blue-900 rounded-lg transition-all duration-300 group">
                                                    <div class="font-medium group-hover:translate-x-1 transition-transform duration-300">
                                                        <?php echo get_the_title($page->ID); ?>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </aside>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<!-- Table of Contents JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tocContainer = document.getElementById('page-toc');
    const contentArea = document.querySelector('.content-style');
    
    if (tocContainer && contentArea) {
        const headings = contentArea.querySelectorAll('h1, h2, h3, h4, h5, h6');
        
        if (headings.length > 0) {
            const tocList = document.createElement('ul');
            tocList.className = 'space-y-2';
            
            headings.forEach((heading, index) => {
                // Add ID to heading if it doesn't have one
                if (!heading.id) {
                    heading.id = 'heading-' + index;
                }
                
                const listItem = document.createElement('li');
                const link = document.createElement('a');
                link.href = '#' + heading.id;
                link.textContent = heading.textContent;
                link.className = 'block py-1 px-2 text-gray-600 hover:text-blue-900 hover:bg-gray-50 rounded transition-colors duration-300';
                
                // Add indentation based on heading level
                const level = parseInt(heading.tagName.substring(1));
                if (level > 2) {
                    link.style.paddingLeft = (level - 2) * 12 + 8 + 'px';
                }
                
                listItem.appendChild(link);
                tocList.appendChild(listItem);
            });
            
            tocContainer.appendChild(tocList);
        } else {
            tocContainer.innerHTML = '<p class="text-gray-500 text-sm">No headings found on this page.</p>';
        }
    }
});
</script>

<style>
/* Enhanced content styling for pages */
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

.content-style table {
    @apply w-full border-collapse border border-gray-300 my-6;
}

.content-style th,
.content-style td {
    @apply border border-gray-300 px-4 py-2;
}

.content-style th {
    @apply bg-gray-50 font-semibold;
}

/* Print styles */
@media print {
    .site-header,
    .site-footer,
    aside,
    .print\\:hidden {
        display: none !important;
    }
    
    .lg\\:col-span-3 {
        grid-column: span 4 !important;
    }
}
</style>

<?php get_footer(); ?>