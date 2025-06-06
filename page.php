<?php
/**
 * The template for displaying all pages
 *
 * @package Labmania_Indonesia
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php while (have_posts()) : the_post(); ?>

        <?php
        get_template_part('template-parts/layout/page-header', null, [
            'title'   => get_the_title(),
            'bg_type' => has_post_thumbnail() ? 'image' : 'pattern',
        ]);
        ?>

        <!-- Page Content -->
        <section class="py-16 bg-white">
            <div class="container mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">

                <!-- Only wrap the_content() in prose -->
                <article>
                    <div class="prose max-w-none content-style">
                        <?php the_content(); ?>
                    </div>

                    <?php
                    // Multi-page support
                    wp_link_pages([
                        'before' => '<div class="mt-10 pt-8 border-t border-gray-200"><nav class="flex justify-center"><div class="flex space-x-2">',
                        'after' => '</div></nav></div>',
                        'link_before' => '<span class="px-4 py-2 text-sm font-medium rounded-lg border border-gray-300 text-gray-700 bg-white hover:bg-gray-50 hover:border-blue-900 hover:text-blue-900 transition-all duration-300">',
                        'link_after' => '</span>',
                        'pagelink' => 'Page %',
                    ]);
                    ?>
                </article>
            </div>
        </section>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
