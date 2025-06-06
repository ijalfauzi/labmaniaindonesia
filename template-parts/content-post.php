<article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden group'); ?>>

    <!-- Featured Image -->
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" class="block overflow-hidden">
            <?php the_post_thumbnail('large', [
                'class' => 'w-full h-48 sm:h-56 object-cover group-hover:scale-105 transition-transform duration-500',
                'loading' => 'lazy'
            ]); ?>
        </a>
    <?php endif; ?>

    <!-- Content -->
    <div class="p-6">
        <div class="text-sm text-gray-500 mb-2 flex items-center gap-2">
            <time datetime="<?php echo get_the_date('c'); ?>">
                <?php echo get_the_date(); ?>
            </time>
            <span class="text-gray-300">•</span>
            <span><?php the_author(); ?></span>
        </div>

        <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-900 transition-colors duration-300">
            <a href="<?php the_permalink(); ?>" class="hover:underline">
                <?php the_title(); ?>
            </a>
        </h2>

        <p class="text-gray-700 leading-relaxed text-sm mb-4">
            <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
        </p>

        <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-blue-900 hover:text-lm-yellow font-medium text-sm transition-colors duration-300 group">
            Baca Selengkapnya
            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </a>
    </div>
</article>
