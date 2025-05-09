<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package Labmania_Indonesia
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-100'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'labmania-indonesia' ); ?></a>

    <header id="masthead" class="site-header sticky top-0 z-50 bg-gradient-to-r from-blue-900 to-blue-950 backdrop-blur-md shadow-lg transition-all duration-300">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <?php if ( has_custom_logo() ) : ?>
                        <div class="site-logo transition-transform duration-300 hover:scale-105">
                            <?php 
                            // Get the custom logo URL and alt text
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                            $logo_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true);
                            
                            if ($logo) :
                            ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                    <img src="<?php echo esc_url($logo[0]); ?>" 
                                         alt="<?php echo esc_attr($logo_alt ? $logo_alt : get_bloginfo('name')); ?>" 
                                         class="h-12 w-auto md:h-14 lg:h-16">
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php else : ?>
                        <div class="text-xl font-bold">
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="text-white hover:text-lm-yellow transition-colors duration-300">
                                <?php echo esc_html( bloginfo('name') ); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Mobile Nav Toggle Button -->
                <div class="flex md:hidden">
                    <button type="button" id="mobile-menu-toggle" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-lm-yellow hover:bg-blue-800/50 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-lm-yellow" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Icon when menu is closed -->
                        <svg id="menu-closed-icon" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Icon when menu is open -->
                        <svg id="menu-open-icon" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Desktop Navigation -->
                <nav id="desktop-navigation" class="hidden md:flex md:items-center md:space-x-6 lg:space-x-8">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-white hover:text-lm-yellow font-medium relative group">
                        Home
                        <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-lm-yellow transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-bottom-left"></span>
                    </a>
                    <a href="<?php echo esc_url(home_url('/about')); ?>" class="text-white hover:text-lm-yellow font-medium relative group">
                        About
                        <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-lm-yellow transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-bottom-left"></span>
                    </a>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="text-white hover:text-lm-yellow font-medium relative group">
                        Services
                        <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-lm-yellow transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-bottom-left"></span>
                    </a>
                    <a href="<?php echo esc_url(home_url('/products')); ?>" class="text-white hover:text-lm-yellow font-medium relative group">
                        Products
                        <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-lm-yellow transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-bottom-left"></span>
                    </a>
                    <a href="<?php echo esc_url(home_url('/blog')); ?>" class="text-white hover:text-lm-yellow font-medium relative group">
                        Blog
                        <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-lm-yellow transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-bottom-left"></span>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="ml-2 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-blue-900 bg-lm-yellow hover:bg-lm-yellow-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lm-yellow transition-all duration-300 transform hover:scale-105">
                        Contact Us
                    </a>
                </nav>
            </div>
            
            <!-- Mobile Navigation Menu -->
            <div id="mobile-menu" class="hidden md:hidden">
                <div class="pt-2 pb-4 space-y-1 border-t border-blue-800">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-lm-yellow hover:bg-blue-800/30 transition duration-300">Home</a>
                    <a href="<?php echo esc_url(home_url('/about')); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-lm-yellow hover:bg-blue-800/30 transition duration-300">About</a>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-lm-yellow hover:bg-blue-800/30 transition duration-300">Services</a>
                    <a href="<?php echo esc_url(home_url('/products')); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-lm-yellow hover:bg-blue-800/30 transition duration-300">Products</a>
                    <a href="<?php echo esc_url(home_url('/blog')); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-lm-yellow hover:bg-blue-800/30 transition duration-300">Blog</a>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="block px-3 py-2 rounded-md text-base font-medium bg-blue-800/50 text-lm-yellow hover:bg-blue-800/70 transition duration-300">Contact Us</a>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
    
    <script>
        // Mobile menu toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuClosedIcon = document.getElementById('menu-closed-icon');
            const menuOpenIcon = document.getElementById('menu-open-icon');
            
            mobileMenuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                menuClosedIcon.classList.toggle('hidden');
                menuOpenIcon.classList.toggle('hidden');
            });
            
            // Add scroll event to change header appearance on scroll
            const header = document.getElementById('masthead');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 10) {
                    header.classList.add('shadow-xl');
                    header.classList.remove('shadow-lg');
                } else {
                    header.classList.remove('shadow-xl');
                    header.classList.add('shadow-lg');
                }
            });
        });
    </script>