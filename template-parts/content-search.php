<?php
/**
 * Compact Card Template for Search Results
 *
 * Uses simplified layout and reduced spacing for 2-column layout
 *
 * @package Labmania_Indonesia
 */
?>
<article class="bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden group">
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" class="block">
            <?php the_post_thumbnail('large', array(
                'class' => 'w-full h-40 sm:h-48 object-cover group-hover:scale-105 transition-transform duration-500',
                'loading' => 'lazy'
            )); ?>
        </a>
    <?php endif; ?>

    <div class="p-4 sm:p-5">
        <!-- Meta -->
        <div class="flex items-center text-xs text-gray-500 mb-2">
            <time datetime="<?php echo get_the_date('c'); ?>">
                <?php echo get_the_date(); ?>
            </time>
            <span class="mx-1">&bull;</span>
            <span><?php the_author(); ?></span>
        </div>

        <!-- Title -->
        <h2 class="text-lg font-semibold text-gray-900 leading-snug mb-2 group-hover:text-blue-900 transition-colors duration-300">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>

        <!-- Excerpt -->
        <p class="text-sm text-gray-600 leading-relaxed mb-4">
            <?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
        </p>

        <!-- Read More -->
        <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-sm font-medium text-blue-900 hover:text-lm-yellow transition-colors duration-300">
            Baca Selengkapnya
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
</article>
