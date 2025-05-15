<?php
/**
 * Products and Services Section Template for Homepage
 * - Social Media Inspired Layout with improved UX
 * - Optimized for horizontal/landscape images
 * - More compact on mobile to reduce scrolling
 * - Hidden descriptions on mobile for cleaner appearance
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
 */
function get_webp_image_url($image_url) {
    $webp_url = str_replace(['.jpg', '.jpeg', '.png'], '.webp', $image_url);
    return $webp_url;
}
?>

<section class="bg-gray-50 py-8 sm:py-12 md:py-16 px-3 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Section Heading - Styled like why-labmania.php -->
        <div class="text-center mb-5 sm:mb-8">
            <!-- Badge with improved mobile visibility -->
            <div class="inline-block bg-blue-100 text-lm-blue text-xs leading-relaxed sm:text-sm font-medium px-4 py-1.5 rounded-full uppercase tracking-wider mb-3 sm:mb-4">
                SOLUSI PELATIHAN & PERALATAN
            </div>
            
            <!-- Main heading with better mobile spacing and font sizing -->
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-lm-blue text-center leading-tight px-2">
                Layanan Unggulan Labmania
            </h2>
            
            <!-- Yellow underline with better proportions on mobile -->
            <div class="h-1 bg-lm-yellow w-24 sm:w-32 md:w-48 mx-auto mt-3"></div>
        </div>
        
        <!-- Modern Card Grid with Responsive Layout - More compact on mobile -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-2 sm:gap-4 mb-8">
            <?php foreach ($services as $index => $service) : ?>
                <a href="<?php echo esc_url($service['url']); ?>" 
                   class="block relative rounded-lg sm:rounded-xl overflow-hidden aspect-[3/2] sm:aspect-[16/9] group focus:outline-none focus:ring-2 focus:ring-lm-yellow focus:ring-offset-2 shadow-sm hover:shadow-md transition-all duration-300" 
                   aria-label="<?php echo esc_attr($service['title'] . ' - ' . $service['description']); ?>">
                    
                    <!-- Card with modern styling -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent z-10"></div>
                    
                    <!-- Main image -->
                    <picture class="absolute inset-0 w-full h-full bg-gray-200">
                        <source srcset="<?php echo esc_url(get_webp_image_url($service['image'])); ?>" type="image/webp">
                        <img 
                            src="<?php echo esc_url($service['image']); ?>" 
                            alt="" 
                            width="800" 
                            height="450"
                            class="w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-700 ease-out"
                            loading="<?php echo ($index < 6) ? 'eager' : 'lazy'; ?>"
                        >
                    </picture>
                    
                    <!-- Color Overlay for Pop Effect -->
                    <div class="absolute inset-0 bg-lm-blue/20 mix-blend-overlay group-hover:bg-lm-accent/30 transition-colors duration-300"></div>
                    
                    <!-- Service Title with modern style - More compact on mobile -->
                    <div class="absolute bottom-0 left-0 right-0 p-2 sm:p-3 z-20">
                        <!-- Title with Pop Text Effect - Smaller on mobile -->
                        <h3 class="text-white text-xs sm:text-sm md:text-base font-bold tracking-tight drop-shadow-lg">
                            <?php echo esc_html($service['title']); ?>
                        </h3>
                        
                        <!-- Description - Completely hidden on mobile, only shows on hover on larger screens -->
                        <p class="text-white/90 text-xs mt-1 max-h-0 overflow-hidden hidden sm:block sm:group-hover:max-h-16 transition-all duration-300 ease-in-out">
                            <?php echo esc_html($service['description']); ?>
                        </p>
                    </div>
                    
                    <!-- "View" Button - Mobile optimized placement -->
                    <div class="absolute top-2 right-2 sm:top-3 sm:right-3 z-20">
                        <div class="bg-lm-yellow/90 text-lm-blue rounded-full font-bold text-[10px] sm:text-xs py-0.5 px-2 sm:py-1 sm:px-3 shadow-md backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-y-1 group-hover:translate-y-0">
                            Lihat
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        
        <!-- CTA Buttons in Modern Style -->
        <div class="flex flex-col sm:flex-row justify-center gap-3 sm:gap-6">
            <?php foreach ($cta_buttons as $button) : ?>
                <a href="<?php echo esc_url($button['url']); ?>" 
                   class="inline-flex items-center justify-center px-4 sm:px-6 py-2.5 sm:py-3 bg-lm-blue text-white text-sm font-medium rounded-md hover:bg-lm-accent transition-colors duration-300 shadow-sm"
                   aria-label="<?php echo esc_attr($button['description']); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 mr-1.5 sm:mr-2" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    <?php echo esc_html($button['text']); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>