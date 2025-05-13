<?php
/**
 * Products and Services Section Template for Homepage
 * - Enhanced accessibility with ARIA labels and better focus states
 * - Improved performance with width/height attributes and WebP support
 * - Better UX with visual indicators and optimized touch targets
 * - Maintained Tailwind utility-class approach
 * 
 * @package Labmania_Indonesia
 */

// Define your services with titles and background image paths
$services = array(
    array(
        'title' => 'TRAINING DAN SERTIFIKASI BNSP',
        'description' => 'Program sertifikasi resmi BNSP untuk meningkatkan kompetensi di bidang laboratorium',
        'image' => get_stylesheet_directory_uri() . '/assets/images/training-sertifikasi-bnsp.webp',
        'url' => home_url('/layanan/sertifikasi-bnsp'),
    ),
    array(
        'title' => 'WORKSHOP',
        'description' => 'Workshop praktis untuk mengembangkan keterampilan laboratorium',
        'image' => get_stylesheet_directory_uri() . '/assets/images/workshop.webp',
        'url' => home_url('/layanan/workshop'),
    ),
    array(
        'title' => 'WORKSHOP BERBASIS KOMPETENSI',
        'description' => 'Workshop intensif berfokus pada pengembangan kompetensi spesifik',
        'image' => get_stylesheet_directory_uri() . '/assets/images/services/workshop-kompetensi.jpg',
        'url' => home_url('/layanan/workshop-kompetensi'),
    ),
    array(
        'title' => 'PUBLIC TRAINING',
        'description' => 'Pelatihan terbuka untuk umum dengan jadwal tetap',
        'image' => get_stylesheet_directory_uri() . '/assets/images/services/public-training.jpg',
        'url' => home_url('/layanan/public-training'),
    ),
    array(
        'title' => 'HANDS ON TRAINING',
        'description' => 'Pelatihan dengan pendekatan praktek langsung untuk pengalaman belajar optimal',
        'image' => get_stylesheet_directory_uri() . '/assets/images/services/hands-on-training.jpg',
        'url' => home_url('/layanan/hands-on-training'),
    ),
    array(
        'title' => 'TRAINING DARING',
        'description' => 'Pelatihan virtual yang dapat diakses dari mana saja',
        'image' => get_stylesheet_directory_uri() . '/assets/images/training-daring.webp',
        'url' => home_url('/layanan/training-daring'),
    ),
    array(
        'title' => 'E-COURSE',
        'description' => 'Pembelajaran mandiri melalui platform digital dengan akses fleksibel',
        'image' => get_stylesheet_directory_uri() . '/assets/images/ecourse.webp',
        'url' => home_url('/layanan/e-course'),
    ),
    array(
        'title' => 'TRAINING LURING',
        'description' => 'Pelatihan tatap muka dengan interaksi langsung bersama instruktur ahli',
        'image' => get_stylesheet_directory_uri() . '/assets/images/services/training-luring.jpg',
        'url' => home_url('/layanan/training-luring'),
    ),
);

// CTA Buttons for download with descriptive labels for accessibility
$cta_buttons = array(
    array(
        'text' => 'JADWAL PELATIHAN 2024',
        'url' => home_url('/download/jadwal-2024'),
        'description' => 'Unduh jadwal lengkap pelatihan tahun 2024',
    ),
    array(
        'text' => 'JADWAL PELATIHAN 2025',
        'url' => home_url('/download/jadwal-2025'),
        'description' => 'Unduh jadwal lengkap pelatihan tahun 2025',
    ),
);

/**
 * Helper function to get WebP version of image if exists, fallback to original
 * This is a simplified implementation - in production, consider using WordPress's built-in 
 * image handling functions or a dedicated responsive images solution.
 */
function get_webp_image_url($image_url) {
    $webp_url = str_replace(['.jpg', '.jpeg', '.png'], '.webp', $image_url);
    // In a real implementation, we would check if the WebP file exists
    // For this example, we'll assume the WebP version exists
    return $webp_url;
}
?>

<section class="py-12 sm:py-16 md:py-20 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <!-- Section Heading -->
        <div class="text-center mb-10 sm:mb-12 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-lm-blue text-center leading-tight">
                Produk dan Layanan Kami
            </h2>
            <!-- Yellow underline -->
            <div class="h-1 bg-lm-yellow w-24 sm:w-32 md:w-48 mx-auto mt-3 sm:mt-4"></div>
        </div>
        
        <!-- Services Grid - Responsive with 2 columns on mobile, 4 on larger screens -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 sm:gap-4 md:gap-6 mb-8 sm:mb-10">
            <?php foreach ($services as $index => $service) : ?>
                <a href="<?php echo esc_url($service['url']); ?>" 
                   class="relative group overflow-hidden rounded-lg aspect-square focus:outline-none focus:ring-2 focus:ring-lm-yellow focus:ring-offset-2 transition-all duration-300 hover:shadow-lg" 
                   aria-label="<?php echo esc_attr($service['title'] . ' - ' . $service['description']); ?>">
                   
                    <!-- Background Image with Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-b from-lm-blue/60 to-lm-blue/90 group-hover:from-lm-accent/60 group-hover:to-lm-accent/90 transition-colors duration-300">
                        <!-- Image as background with WebP support and dimensions for CLS -->
                        <picture>
                            <source srcset="<?php echo esc_url(get_webp_image_url($service['image'])); ?>" type="image/webp">
                            <img 
                                src="<?php echo esc_url($service['image']); ?>" 
                                alt="" 
                                width="600" 
                                height="600"
                                class="w-full h-full object-cover mix-blend-overlay opacity-90 group-hover:scale-110 transition-transform duration-500"
                                loading="<?php echo ($index < 4) ? 'eager' : 'lazy'; ?>"
                            >
                        </picture>
                    </div>
                    
                    <!-- Text Overlay - Centered with Shadow for Readability -->
                    <div class="absolute inset-0 flex items-center justify-center p-4 text-center">
                        <h3 class="text-white text-lg sm:text-xl font-bold leading-tight drop-shadow-[0_2px_2px_rgba(0,0,0,0.8)] group-hover:scale-105 transition-transform duration-300">
                            <?php echo esc_html($service['title']); ?>
                        </h3>
                    </div>
                    
                    <!-- Visual indicator for clickable items -->
                    <div class="absolute bottom-3 right-3 w-8 h-8 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        
        <!-- CTA Buttons - Side by side on desktop, stacked on mobile with enhanced touch targets -->
        <div class="flex flex-col sm:flex-row justify-center gap-4 sm:gap-8 px-4">
            <?php foreach ($cta_buttons as $button) : ?>
                <a href="<?php echo esc_url($button['url']); ?>" 
                   class="inline-flex items-center justify-center px-6 py-4 sm:py-3 bg-lm-yellow text-lm-blue text-sm sm:text-base font-bold rounded-md hover:bg-lm-yellow-light transition-all duration-300 shadow-sm hover:shadow-md text-center focus:outline-none focus:ring-2 focus:ring-lm-yellow focus:ring-offset-2"
                   aria-label="<?php echo esc_attr($button['description']); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    <?php echo isset($button['text']) ? esc_html($button['text']) : esc_html($button['title']); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>