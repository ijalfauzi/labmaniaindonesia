<?php
/**
 * Sidebar Template
 * Used in single.php, archive.php, and CPTs (but not page.php)
 */
?>
<aside class="lg:col-span-1">
    <div class="space-y-8">
        <?php if (is_singular('post') || is_home() || is_archive()) : ?>
            <!-- Featured Posts -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                    <span class="w-1 h-6 bg-lm-yellow rounded-full mr-3"></span>
                    Featured Posts
                </h3>

                <?php
                $featured_posts = new WP_Query([
                    'posts_per_page' => 3,
                    'meta_query' => [[
                        'key' => 'featured_post',
                        'value' => 'yes'
                    ]]
                ]);
                ?>

                <?php if ($featured_posts->have_posts()) :
                    while ($featured_posts->have_posts()) : $featured_posts->the_post(); ?>
                        <article class="group mb-4 last:mb-0">
                            <div class="flex space-x-3">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="flex-shrink-0">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('thumbnail', ['class' => 'w-16 h-16 object-cover rounded-lg']); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-medium text-gray-900 group-hover:text-blue-900 transition-colors mb-1">
                                        <a href="<?php the_permalink(); ?>" class="hover:underline">
                                            <?php echo wp_trim_words(get_the_title(), 8); ?>
                                        </a>
                                    </h4>
                                    <p class="text-xs text-gray-500"><?php echo get_the_date(); ?></p>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                <?php else : ?>
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
                    $categories = get_categories(['hide_empty' => true]);
                    foreach ($categories as $category) : ?>
                        <li>
                            <a href="<?php echo get_category_link($category->term_id); ?>" class="flex items-center justify-between py-2 px-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-blue-900 rounded-lg transition-all">
                                <span><?php echo esc_html($category->name); ?></span>
                                <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded-full">
                                    <?php echo $category->count; ?>
                                </span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php else : ?>
            <!-- Placeholder Sidebar Content -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                    <span class="w-1 h-6 bg-lm-yellow rounded-full mr-3"></span>
                    More Info
                </h3>
                <p class="text-sm text-gray-600">This is a default sidebar. Customize based on CPT or widgets.</p>
            </div>
        <?php endif; ?>
    </div>
</aside>
