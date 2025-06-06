<?php
/**
 * The template for displaying archive pages
 *
 * @package Labmania_Indonesia
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    ob_start();
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
    $archive_title = ob_get_clean();

    get_template_part('template-parts/layout/page-header', null, [
        'title' => $archive_title,
        'bg_type' => 'pattern',
    ]);
    ?>

    <section class="py-12 sm:py-16 lg:py-20 bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 lg:gap-12">

                <!-- Main Content -->
                <div class="lg:col-span-3">
                    <?php if (have_posts()) : ?>
                        <div class="mb-8 bg-white rounded-xl shadow-sm p-6">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    Showing <?php echo $wp_query->post_count; ?> of <?php echo $wp_query->found_posts; ?> posts
                                </div>

                                <div class="flex flex-wrap items-center gap-2">
                                    <span class="text-sm text-gray-600">Quick filter:</span>
                                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" 
                                       class="px-3 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-700 hover:bg-blue-100 hover:text-blue-900 transition-colors duration-300">
                                        All Posts
                                    </a>
                                    <?php
                                    $categories = get_categories(['hide_empty' => true, 'number' => 4]);
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
                                <?php get_template_part('template-parts/content', get_post_type()); ?>
                            <?php endwhile; ?>
                        </div>

                        <!-- Reusable Pagination -->
                        <?php get_template_part('template-parts/layout/pagination'); ?>

                    <?php else : ?>
                        <?php get_template_part('template-parts/content', 'none'); ?>
                    <?php endif; ?>
                </div>

                <!-- Sidebar -->
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
