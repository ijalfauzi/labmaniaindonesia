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

        <?php
        get_template_part('template-parts/layout/page-header', null, [
            'title'         => get_the_title(),
            'show_category' => true,
            'bg_type'       => has_post_thumbnail() ? 'image' : 'pattern',
        ]);
        ?>

        <!-- Post Content -->
        <section class="py-16 bg-white">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">

                    <!-- Main Content -->
                    <article class="lg:col-span-3 prose lg:prose-lg max-w-none content-style">

                        <!-- Post Meta with vertical dividers only -->
                        <div class="mb-10">
                            <div class="flex flex-wrap justify-center items-center text-sm text-gray-600 gap-x-6 gap-y-2 text-center">

                                <!-- Author -->
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5.121 17.804A10.97 10.97 0 0112 15c2.042 0 3.937.612 5.507 1.652M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <span><?php the_author(); ?></span>
                                </div>

                                <!-- Divider -->
                                <div class="hidden sm:inline-block w-px h-5 bg-gray-300"></div>

                                <!-- Date -->
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3M4 11h16M5 20h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v11a2 2 0 002 2z"/>
                                    </svg>
                                    <span><?php echo get_the_date(); ?></span>
                                </div>

                                <!-- Divider -->
                                <div class="hidden sm:inline-block w-px h-5 bg-gray-300"></div>

                                <!-- Reading Time -->
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span><?php echo labmania_estimated_reading_time(); ?> menit baca</span>
                                </div>

                            </div>
                        </div>

                        <?php the_content(); ?>

                        <!-- Multi-page support -->
                        <?php
                        wp_link_pages([
                            'before' => '<div class="mt-10 pt-8 border-t border-gray-200"><nav class="flex justify-center"><div class="flex space-x-2">',
                            'after' => '</div></nav></div>',
                            'link_before' => '<span class="px-4 py-2 text-sm font-medium rounded-lg border border-gray-300 text-gray-700 bg-white hover:bg-gray-50 hover:border-blue-900 hover:text-blue-900 transition-all duration-300">',
                            'link_after' => '</span>',
                            'pagelink' => 'Page %',
                        ]);
                        ?>

                        <!-- Related Posts -->
                        <?php
                        $related_args = [
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'post__not_in' => [get_the_ID()],
                            'category__in' => wp_get_post_categories(get_the_ID()),
                        ];
                        $related_query = new WP_Query($related_args);
                        ?>

                        <?php if ($related_query->have_posts()) : ?>
                            <div class="mt-16 pt-10 border-t border-gray-200">
                                <h2 class="text-lg font-semibold mb-6 text-blue-900">Artikel Terkait</h2>
                                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                    <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                                        <a href="<?php the_permalink(); ?>" class="group block overflow-hidden rounded-xl border border-gray-100 hover:shadow-md transition bg-white">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="aspect-w-16 aspect-h-9">
                                                    <?php the_post_thumbnail('medium', ['class' => 'w-full h-full object-cover transition group-hover:scale-105']); ?>
                                                </div>
                                            <?php endif; ?>
                                            <div class="p-4">
                                                <h3 class="font-semibold text-blue-900 group-hover:text-lm-yellow text-base leading-snug mb-1"><?php the_title(); ?></h3>
                                            </div>
                                        </a>
                                    <?php endwhile; wp_reset_postdata(); ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- Post Pagination -->
                        <nav class="mt-16 pt-10 border-t border-gray-200 flex flex-col md:flex-row justify-between gap-6 text-sm font-medium">
                            <div>
                                <?php previous_post_link('%link', '← %title'); ?>
                            </div>
                            <div class="text-right">
                                <?php next_post_link('%link', '%title →'); ?>
                            </div>
                        </nav>

                        <!-- Comments -->
                        <?php
                        if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                        ?>
                    </article>

                    <!-- Sidebar -->
                    <?php get_template_part('template-parts/layout/sidebar'); ?>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
