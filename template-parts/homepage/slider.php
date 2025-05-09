<?php
/**
 * Homepage Swiper Slider Template - Minimal Version
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

<section class="homepage-slider relative bg-blue-950 overflow-hidden">
    <!-- Swiper Container -->
    <div class="swiper homepage-swiper">
        <div class="swiper-wrapper">
            <?php foreach ($slider_images as $index => $slide) : ?>
                <div class="swiper-slide">
                    <!-- Image Container with Max Width and Centered -->
                    <div class="max-w-screen-xl mx-auto relative w-full" style="aspect-ratio: 16/9;">
                        <!-- Background Image -->
                        <img 
                            src="<?php echo esc_url($slide['url']); ?>" 
                            alt="<?php echo esc_attr($slide['alt']); ?>" 
                            class="absolute inset-0 w-full h-full object-cover object-center"
                            width="1600" 
                            height="900"
                            loading="<?php echo ($index === 0) ? 'eager' : 'lazy'; ?>"
                        >
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Swiper Navigation -->
        <div class="hidden md:block">
            <div class="swiper-button-prev text-white hover:text-lm-yellow transition-colors duration-300"></div>
            <div class="swiper-button-next text-white hover:text-lm-yellow transition-colors duration-300"></div>
        </div>
        
        <!-- Swiper Pagination -->
        <div class="swiper-pagination"></div>
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
.homepage-slider .swiper {
    width: 100%;
}

.homepage-slider .max-w-screen-xl {
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
    background: #eab308;
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
    background-color: #eab308;
    color: rgba(30, 58, 138, 1) !important;
}

.swiper-button-next:after,
.swiper-button-prev:after {
    font-size: 18px;
    font-weight: bold;
}
</style>