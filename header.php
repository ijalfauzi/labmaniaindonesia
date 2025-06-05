<?php
/**
 * The header for our theme
 *
 * @package Labmania_Indonesia
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://unpkg.com/alpinejs" defer></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-100'); ?> x-data="{ mobileMenuOpen: false }">
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'labmania-indonesia'); ?></a>

    <header id="masthead" class="site-header sticky top-0 z-50 bg-gradient-to-r from-blue-900 to-blue-950 backdrop-blur-md shadow-lg transition-all duration-300">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between py-4 md:py-5">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <?php if (has_custom_logo()) : ?>
                        <div class="site-logo transition-transform duration-300 hover:scale-105">
                            <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                            $logo_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true);
                            if ($logo) : ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                    <img src="<?php echo esc_url($logo[0]); ?>"
                                         alt="<?php echo esc_attr($logo_alt ? $logo_alt : get_bloginfo('name')); ?>"
                                         class="h-10 w-auto md:h-12 rounded-md">
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php else : ?>
                        <div class="text-xl font-bold">
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="text-white hover:text-lm-yellow transition-colors duration-300">
                                <?php echo esc_html(bloginfo('name')); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Toggle Button -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-white focus:outline-none">
                        <template x-if="!mobileMenuOpen">
                            <svg class="h-6 w-6 text-lm-yellow" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </template>
                        <template x-if="mobileMenuOpen">
                            <svg class="h-6 w-6 text-lm-yellow" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </template>
                    </button>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center gap-4" aria-label="Main Menu">
                    <?php wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'flex items-center',
                        'fallback_cb' => false,
                        'walker' => new class extends Walker_Nav_Menu {
                            function start_lvl(&$output, $depth = 0, $args = null) {
                                $output .= '<ul x-show="open" x-transition class="absolute left-0 mt-6 w-80 rounded-bl-md rounded-br-md shadow-lg bg-blue-950 py-2 z-50 px-2 text-sm space-y-1">';
                            }
                            function end_lvl(&$output, $depth = 0, $args = null) {
                                $output .= '</ul>';
                            }
                            function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
                                $title = esc_html($item->title);
                                $url = esc_url($item->url);
                                $classes = implode(' ', $item->classes);
                                $is_active = strpos($classes, 'current-menu-item') !== false || strpos($classes, 'current_page_ancestor') !== false;
                                $has_children = strpos($classes, 'menu-item-has-children') !== false;

                                $link_classes = 'relative text-white hover:text-lm-yellow font-medium transition-colors duration-300 px-3 py-2 inline-block';
                                if ($is_active) $link_classes .= ' text-lm-yellow';
                                if (strtolower($title) === 'contact us') {
                                    $link_classes = 'ml-2 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-blue-900 bg-lm-yellow hover:bg-lm-yellow-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lm-yellow transition-all duration-300 transform hover:scale-105';
                                }

                                $output .= '<li class="relative group" x-data="{ open: false }">';
                                if ($has_children) {
                                    $output .= '<div class="flex items-center">';
                                    $output .= '<a href="' . $url . '" class="' . esc_attr($link_classes) . '">' . $title . '</a>';
                                    $output .= '<button @click.prevent="open = !open" class="text-white hover:text-lm-yellow transition p-2 -m-2"><svg :class="{\'rotate-180\': open}" class="h-3 w-3 transform transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg></button>';
                                    $output .= '</div>';
                                } else {
                                    $output .= '<a href="' . $url . '" class="' . esc_attr($link_classes) . '">' . $title . '</a>';
                                }
                            }
                            function end_el(&$output, $item, $depth = 0, $args = null) {
                                $output .= '</li>';
                            }
                        }
                    ]); ?>
                </nav>
            </div>
        </div>

        <!-- Fullscreen Mobile Menu -->
        <div x-show="mobileMenuOpen" x-transition class="absolute left-0 right-0 z-50 bg-gradient-to-r from-blue-900 to-blue-950 text-white md:hidden overflow-y-auto">
            <div class="px-6 py-12 relative border-b-4 border-lm-yellow-light">
                <ul class="space-y-2">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => false,
                        'items_wrap' => '%3$s',
                        'fallback_cb' => false,
                        'walker' => new class extends Walker_Nav_Menu {
                            function start_lvl(&$output, $depth = 0, $args = null) {
                                $output .= '<ul x-show="open" x-transition class="pl-4 mt-1 space-y-1 border-l border-lm-yellow">';
                            }
                            function end_lvl(&$output, $depth = 0, $args = null) {
                                $output .= '</ul>';
                            }
                            function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
                                $title = esc_html($item->title);
                                $url = esc_url($item->url);
                                $classes = implode(' ', $item->classes);
                                $is_active = strpos($classes, 'current-menu-item') !== false || strpos($classes, 'current_page_ancestor') !== false;
                                $has_children = strpos($classes, 'menu-item-has-children') !== false;

                                $link_classes = 'block font-medium text-sm px-4 py-2 rounded hover:bg-blue-800/50 transition';
                                if ($is_active) $link_classes .= ' text-lm-yellow';

                                $output .= '<li x-data="{ open: false }">';
                                if ($has_children) {
                                    $output .= '<div class="flex items-center justify-between">';
                                    $output .= '<a href="' . $url . '" class="' . esc_attr($link_classes) . '">' . $title . '</a>';
                                    $output .= '<button @click.prevent="open = !open" class="text-lm-yellow px-3 py-2 -my-2 -mx-3"><svg :class="{\'rotate-180\': open}" class="h-3 w-3 transform transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg></button>';
                                    $output .= '</div>';
                                } else {
                                    $output .= '<a href="' . $url . '" class="' . esc_attr($link_classes) . '">' . $title . '</a>';
                                }
                            }
                            function end_el(&$output, $item, $depth = 0, $args = null) {
                                $output .= '</li>';
                            }
                        }
                    ]);
                    ?>
                </ul>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">