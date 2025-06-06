<?php
/**
 * Blog Index Template (home.php)
 * 
 * @package Labmania_Indonesia
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    // Reusable page-header with fixed title
    get_template_part('template-parts/layout/page-header', null, [
        'title' => 'Labmania <span class="text-lm-yellow">Insights</span>',
        'bg_type' => 'pattern',
    ]);
    ?>

    <section class="py-12 sm:py-16 lg:py-20 bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <?php if (have_posts()) : ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('template-parts/content', get_post_type()); ?>
                    <?php endwhile; ?>
                </div>

                <?php get_template_part('template-parts/layout/pagination'); ?>
            <?php else : ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
