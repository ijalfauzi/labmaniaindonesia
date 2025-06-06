<?php
/**
 * Shared page/post header - Mobile-First Typography Optimized
 *
 * @param array $args {
 *     @type string $title Custom title (optional).
 *     @type bool $show_category For posts only, show category badge.
 *     @type string $bg_type 'image' | 'pattern'
 * }
 */

$defaults = [
    'title'         => is_archive() ? get_the_archive_title() : get_the_title(),
    'show_category' => false,
    'bg_type'       => 'image',
];

$args = wp_parse_args($args ?? [], $defaults);
$is_page = is_page();
$post_type = get_post_type();
?>

<section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-blue-950 overflow-hidden">
    <?php if ($args['bg_type'] === 'image' && has_post_thumbnail()) : ?>
        <div class="absolute inset-0">
            <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover opacity-20']); ?>
            <div class="absolute inset-0 bg-gradient-to-br from-blue-900/80 via-blue-800/80 to-blue-950/80"></div>
        </div>
    <?php else : ?>
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="page-pattern" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="10" cy="10" r="1" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="100" height="100" fill="url(#page-pattern)" />
            </svg>
        </div>
    <?php endif; ?>

    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="py-12 sm:py-16 md:py-20 lg:py-24 text-center">
            <div class="max-w-4xl mx-auto">
                <!-- Breadcrumb -->
                <nav class="mb-4 sm:mb-6 text-xs sm:text-sm">
                    <ol class="flex items-center justify-center flex-wrap gap-1 sm:gap-2 text-blue-200">
                        <li>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-lm-yellow transition-colors duration-300" aria-label="Home">
                                <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.707 1.293a1 1 0 00-1.414 0l-8 8A1 1 0 002 10h1v6a2 2 0 002 2h3a1 1 0 001-1v-4h2v4a1 1 0 001 1h3a2 2 0 002-2v-6h1a1 1 0 00.707-1.707l-8-8z"/>
                                </svg>
                            </a>
                        </li>

                        <?php if (is_category() || is_tag() || is_tax()) : ?>
    <li class="flex items-center">
        <svg class="w-3 h-3 sm:w-4 sm:h-4 mx-1 sm:mx-2" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
        </svg>
        <span class="text-lm-yellow font-medium">
            <?php
                if (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_tax()) {
                    single_term_title();
                }
            ?>
        </span>
    </li>
<?php endif; ?>


                        <?php if (is_home()) : ?>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 mx-1 sm:mx-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-lm-yellow font-medium">Blog</span>
                            </li>
                        <?php elseif (is_search()) : ?>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 mx-1 sm:mx-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-lm-yellow font-medium">Pencarian</span>
                            </li>
                        <?php elseif (is_singular('post')) : ?>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 mx-1 sm:mx-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="hover:text-lm-yellow transition-colors duration-300">Blog</a>
                            </li>
                        <?php elseif (!$is_page && is_singular() && post_type_exists($post_type)) : ?>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 mx-1 sm:mx-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <a href="<?php echo esc_url(get_post_type_archive_link($post_type)); ?>" class="hover:text-lm-yellow transition-colors duration-300">
                                    <?php echo post_type_archive_title('', false); ?>
                                </a>
                            </li>
                        <?php elseif ($is_page && wp_get_post_parent_id(get_the_ID())) : ?>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 mx-1 sm:mx-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <a href="<?php echo get_permalink(wp_get_post_parent_id(get_the_ID())); ?>" class="hover:text-lm-yellow transition-colors duration-300">
                                    <?php echo get_the_title(wp_get_post_parent_id(get_the_ID())); ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if ($is_page) : ?>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 mx-1 sm:mx-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-lm-yellow font-medium"><?php echo wp_trim_words($args['title'], 4, '...'); ?></span>
                            </li>
                        <?php endif; ?>
                    </ol>
                </nav>

                <!-- Optional Category Badge -->
                <?php if ($args['show_category']) :
                    $cats = get_the_category();
                    if (!empty($cats)) :
                ?>
                    <div class="mb-3 sm:mb-4">
                        <a href="<?php echo esc_url(get_category_link($cats[0]->term_id)); ?>" class="inline-block px-3 py-1.5 sm:px-4 sm:py-2 bg-lm-yellow text-blue-900 text-xs sm:text-sm font-semibold rounded-full hover:bg-lm-yellow-light transition-colors duration-300">
                            <?php echo esc_html($cats[0]->name); ?>
                        </a>
                    </div>
                <?php endif; endif; ?>

                <!-- Title -->
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 sm:mb-6 leading-tight">
                    <?php
                    echo wp_kses($args['title'], [
                        'span' => ['class' => true]
                    ]);
                    ?>
                </h1>
            </div>
        </div>
    </div>
</section>
