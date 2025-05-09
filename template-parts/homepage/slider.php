<?php
/**
 * Homepage Swiper Slider Template - Optimized Hero Section
 * - Full width on mobile
 * - Matched background with image on desktop
 *
 * @package Labmania_Indonesia
 */

// Slider Images
$slider_images = array(
    array(
        'url' => get_stylesheet_directory_uri() . '/assets/images/slider-1.webp',
        'alt' => 'Laboratory Equipment and Services'
    ),
    array(
        'url' => get_stylesheet_directory_uri() . '/assets/images/slider-2.webp',
        'alt' => 'Lab Design and Installation'
    )
);
?>

<section class="homepage-slider bg-blue-600 relative">
    <!-- Blue background matching the image color -->
    <div class="absolute inset-0 bg-blue-600 z-0"></div>
    
    <!-- Padding that disappears on mobile -->
    <div class="py-0 sm:py-4 md:py-8 lg:py-12 relative z-10">
        <!-- Container with no padding on mobile -->
        <div class="container mx-auto max-w-7xl px-0 sm:px-4 md:px-6 lg:px-8">
            <div class="swiper homepage-swiper sm:rounded-xl overflow-hidden shadow-xl">
                <div class="swiper-wrapper">
                    <?php foreach ($slider_images as $index => $slide) : ?>
                        <div class="swiper-slide">
                            <!-- Image Container with Fixed Aspect Ratio -->
                            <div class="relative w-full" style="aspect-ratio: 16/9;">
                                <!-- Background Image -->
                                <img 
                                    src="<?php echo esc_url($slide['url']); ?>" 
                                    alt="<?php echo esc_attr($slide['alt']); ?>" 
                                    class="absolute inset-0 w-full h-full object-cover object-center"
                                    width="1600" 
                                    height="900"
                                    loading="<?php echo ($index === 0) ? 'eager' : 'lazy'; ?>"
                                >
                                
                                <!-- Subtle Vignette Effect -->
                                <div class="absolute inset-0 shadow-[inset_0_0_100px_rgba(0,0,0,0.2)]"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Swiper Navigation -->
                <div class="hidden md:block">
                    <div class="swiper-button-prev text-white hover:text-yellow-400 transition-colors duration-300"></div>
                    <div class="swiper-button-next text-white hover:text-yellow-400 transition-colors duration-300"></div>
                </div>
                
                <!-- Swiper Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    
    <!-- Optional: Decorative Element Below Slider (visible only on desktop) -->
    <div class="hidden md:block container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 -mt-4">
        <div class="h-1 w-24 bg-yellow-400 mx-auto rounded-full"></div>
    </div>
</section>

<!-- Initialize Swiper directly in the template -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof Swiper !== 'undefined' && document.querySelector('.homepage-swiper')) {
        const swiper = new Swiper('.homepage-swiper', {
            loop: true,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            speed: 800,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }
});
</script>

<!-- Simple Swiper CSS -->
<style>
/* Match section background with image for seamless blend */
@media (min-width: 640px) {
    .homepage-slider {
        background-color: #2563EB; /* blue-600 - match your image background */
    }
}

/* Full width on mobile, contained on larger screens */
@media (max-width: 639px) {
    .homepage-slider .container {
        max-width: 100%;
        padding: 0;
    }
    
    .homepage-slider .swiper {
        border-radius: 0;
    }
}

.homepage-slider .swiper {
    width: 100%;
}

.swiper-pagination-bullet {
    width: 10px;
    height: 10px;
    background: rgba(255, 255, 255, 0.5);
    opacity: 1;
    transition: all 0.3s ease;
}

.swiper-pagination-bullet-active {
    background: #FBBF24; /* yellow-400 - matching your site's yellow */
    width: 25px;
    border-radius: 5px;
}

.swiper-button-next,
.swiper-button-prev {
    background-color: rgba(30, 58, 138, 0.5);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.swiper-button-next:hover,
.swiper-button-prev:hover {
    background-color: #FBBF24; /* yellow-400 */
    color: rgba(30, 58, 138, 1) !important;
}

.swiper-button-next:after,
.swiper-button-prev:after {
    font-size: 18px;
    font-weight: bold;
}
</style>