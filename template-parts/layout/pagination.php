<?php
/**
 * Reusable Pagination Component (Context-Aware)
 *
 * @package Labmania_Indonesia
 */

if (get_previous_posts_link() || get_next_posts_link()) :

    // Detect current context
    if (is_search()) {
        $prev_label = '← Hasil Pencarian Selanjutnya';
        $next_label = 'Hasil Pencarian Sebelumnya →';
    } elseif (is_home() || is_post_type_archive('post')) {
        $prev_label = '← Postingan Selanjutnya';
        $next_label = 'Postingan Sebelumnya →';
    } elseif (is_post_type_archive()) {
        $post_type = get_post_type_object(get_post_type());
        $label = $post_type ? $post_type->labels->name : 'Posting';
        $prev_label = "← $label Selanjutnya";
        $next_label = "$label Sebelumnya →";
    } elseif (is_category() || is_tag() || is_tax()) {
        $term = get_queried_object();
        $taxonomy = get_taxonomy($term->taxonomy);
        $label = $taxonomy->labels->singular_name ?? 'Arsip';
        $prev_label = "← Postingan Selanjutnya";
        $next_label = "Postingan Sebelumnya →";
    } else {
        $prev_label = '← Sebelumnya';
        $next_label = 'Selanjutnya →';
    }
?>

<nav class="mt-12 flex justify-center items-center gap-4 text-sm">
    <?php if (get_previous_posts_link()) : ?>
        <div>
            <?php previous_posts_link(
                '<span class="inline-flex items-center justify-center px-4 py-2 bg-lm-blue text-white font-medium rounded-md hover:bg-lm-accent transition-colors duration-300 shadow-sm">' .
                esc_html($prev_label) .
                '</span>'
            ); ?>
        </div>
    <?php endif; ?>

    <?php if (get_next_posts_link()) : ?>
        <div>
            <?php next_posts_link(
                '<span class="inline-flex items-center justify-center px-4 py-2 bg-lm-blue text-white font-medium rounded-md hover:bg-lm-accent transition-colors duration-300 shadow-sm">' .
                esc_html($next_label) .
                '</span>'
            ); ?>
        </div>
    <?php endif; ?>
</nav>

<?php endif; ?>
