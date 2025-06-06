<?php
/**
 * The template for displaying search results pages
 *
 * @package Labmania_Indonesia
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    $search_query = get_search_query();
    $search_title = 'Hasil Pencarian untuk: <span class="text-lm-yellow">' . esc_html($search_query) . '</span>';
    get_template_part('template-parts/layout/page-header', null, [
        'title' => $search_title,
        'bg_type' => 'pattern',
    ]);
    ?>

    <section class="py-12 sm:py-16 lg:py-20 bg-gray-50">
        <div class="container mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <?php if (have_posts()) : ?>

                <!-- Search Results Info -->
                <div class="mb-8 bg-white rounded-xl shadow-sm p-6">
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/>
                            </svg>
                            Menampilkan <?php echo $wp_query->post_count; ?> dari <?php echo $wp_query->found_posts; ?> hasil untuk: "<span class="font-bold italic"><?php echo esc_html($search_query); ?></span>"
                        </div>
                        <div class="text-xs text-gray-500">
                            <span class="hidden sm:inline">💡 Tip: Gunakan kata kunci yang spesifik untuk hasil yang lebih baik</span>
                        </div>
                    </div>
                </div>

                <!-- Search Result List Layout -->
                <div class="space-y-8">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php
                        $title = get_the_title();
                        $excerpt = get_the_excerpt();

                        if ($search_query) {
                            $highlight = function ($text) use ($search_query) {
                                return preg_replace('/(' . preg_quote($search_query, '/') . ')/i', '<mark class="bg-lm-yellow text-blue-900 px-1 rounded">$1</mark>', $text);
                            };

                            add_filter('the_title', function () use ($highlight, $title) {
                                return $highlight($title);
                            }, 10, 1);

                            add_filter('get_the_excerpt', function () use ($highlight, $excerpt) {
                                return $highlight($excerpt);
                            }, 10, 1);
                        }
                        ?>

                        <article class="flex flex-col sm:flex-row gap-5 items-start bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="w-full aspect-video sm:w-40 flex-shrink-0">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', [
                                            'class' => 'rounded-lg object-cover w-full h-28 sm:h-24',
                                            'loading' => 'lazy'
                                        ]); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="flex-1">
                                <h2 class="text-lg font-semibold text-gray-900 mb-1">
                                    <a href="<?php the_permalink(); ?>" class="hover:text-blue-900">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <div class="text-xs text-gray-500 mb-2">
                                    <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time> &bull;
                                    <?php the_author(); ?>
                                </div>
                                <p class="text-sm text-gray-700 leading-relaxed mb-2">
                                    <?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-sm font-medium text-blue-900 hover:text-lm-yellow transition-colors duration-300">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </article>

                        <?php
                        // Reset filters
                        if ($search_query) {
                            remove_all_filters('the_title');
                            remove_all_filters('get_the_excerpt');
                        }
                        ?>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <div class="mt-12">
                    <?php get_template_part('template-parts/layout/pagination'); ?>
                </div>

            <?php else : ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();