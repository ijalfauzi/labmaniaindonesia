<?php
/**
 * Comments Template
 *
 * @package Labmania_Indonesia
 */

if (post_password_required()) return;
?>

<section id="comments" class="mt-10 pt-10 border-t border-gray-200">
    <?php if (have_comments()) : ?>
        <h2 class="text-sm sm:text-base font-semibold mb-6 text-blue-900">
            <?php comments_number('Tidak ada komentar', '1 Komentar', '% Komentar'); ?>
        </h2>

        <ol class="space-y-6">
            <?php
            wp_list_comments([
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size'=> 48,
                'callback'   => function ($comment, $args, $depth) {
                    $tag = ($args['style'] === 'div') ? 'div' : 'li';
                    ?>
                    <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class('flex items-start gap-4 text-sm'); ?>>
                        <div class="flex-shrink-0">
                            <?php echo get_avatar($comment, 48, '', '', ['class' => 'rounded-full shadow-sm']); ?>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="mb-1 text-gray-700">
                                <strong class="text-blue-900 block leading-tight text-sm sm:text-base"><?php comment_author(); ?></strong>
                                <span class="text-gray-400 text-xs leading-tight block"><?php comment_date(); ?> pukul <?php comment_time(); ?></span>
                            </div>
                            <div class="text-gray-800 text-sm leading-relaxed">
                                <?php comment_text(); ?>
                            </div>
                            <div class="mt-2 text-xs sm:text-sm">
                                <?php comment_reply_link(array_merge($args, [
                                    'reply_text' => 'Balas',
                                    'depth' => $depth,
                                    'max_depth' => $args['max_depth'],
                                    'before' => '<span class="text-blue-900 hover:text-lm-yellow">',
                                    'after'  => '</span>'
                                ])); ?>
                            </div>
                        </div>
                    </<?php echo $tag; ?>>
                    <?php
                }
            ]);
            ?>
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="comment-navigation mt-10 text-sm flex justify-between" role="navigation">
                <div class="nav-previous"><?php previous_comments_link('← Komentar Lama'); ?></div>
                <div class="nav-next"><?php next_comments_link('Komentar Baru →'); ?></div>
            </nav>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (comments_open()) : ?>
        <div class="mt-14 max-w-2xl">
            <h3 class="text-sm font-semibold mb-4 text-blue-900">Tulis Komentar</h3>
            <?php
            $commenter = wp_get_current_commenter();
            $req = get_option('require_name_email');
            $aria_req = ($req ? " aria-required='true'" : '');

            comment_form([
                'title_reply'          => '',
                'comment_notes_before' => '',
                'logged_in_as' => '<div class="text-xs text-gray-500 mb-4">' . sprintf(
                    __('Masuk sebagai <a href="%1$s" class="underline text-blue-800">%2$s</a>. <a href="%3$s" class="text-blue-900 hover:text-lm-blue">Keluar?</a>'),
                    admin_url('profile.php'),
                    wp_get_current_user()->display_name,
                    wp_logout_url(get_permalink())
                ) . '</div>',
                'comment_field' =>
                    '<textarea id="comment" name="comment" class="w-full px-4 py-3 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-lm-yellow resize-none" rows="4" required placeholder="Tulis komentar Anda..."></textarea>',

                'fields' => [
                    'author' => '<input id="author" name="author" type="text" class="w-full mt-4 px-4 py-2 border border-gray-300 rounded-md text-sm" placeholder="Nama *"' . esc_attr($aria_req) . '>',
                    'email'  => '<input id="email" name="email" type="email" class="w-full mt-4 px-4 py-2 border border-gray-300 rounded-md text-sm" placeholder="Email *"' . esc_attr($aria_req) . '>',
                    'url'    => '<input id="url" name="url" type="url" class="w-full mt-4 px-4 py-2 border border-gray-300 rounded-md text-sm" placeholder="Website">',
                    'cookies' => '<div class="mt-4 text-xs text-gray-500 flex items-center gap-2">' .
                                 '<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" class="rounded border-gray-300 focus:ring-lm-yellow" />' .
                                 '<label for="wp-comment-cookies-consent" class="inline">Simpan nama, email, dan situs web saya untuk komentar berikutnya.</label>' .
                                 '</div>'
                ],

                'class_submit' => 'bg-lm-blue hover:bg-lm-accent text-white font-medium px-6 py-2 mt-6 rounded-md text-sm',
                'label_submit' => 'Kirim Komentar',
            ]);
            ?>
        </div>
    <?php endif; ?>
</section>