<?php
/**
 * Why Choose Labmania Section Template for Homepage
 * - Enhanced mobile-first typography with better balance
 * - Pure Tailwind responsive layouts (no JavaScript)
 * - Optimized spacing for different screen sizes
 * 
 * @package Labmania_Indonesia
 */
?>

<section class="bg-gray-50 py-10 sm:py-14 md:py-20 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Heading optimized for mobile-first approach -->
        <div class="text-center mb-6 sm:mb-8 md:mb-10">
            <!-- Badge with improved mobile visibility -->
            <div class="inline-block bg-blue-100 text-lm-blue text-xs leading-relaxed sm:text-sm font-medium px-4 py-1.5 rounded-full uppercase tracking-wider mb-4">
                KEUNGGULAN KAMI
            </div>
            
            <!-- Main heading with better mobile spacing and font sizing -->
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-lm-blue text-center leading-tight px-2">
                Mengapa Labmania Indonesia?
            </h2>
            
            <!-- Yellow underline with better proportions on mobile -->
            <div class="h-1 bg-lm-yellow w-24 sm:w-32 md:w-48 mx-auto mt-3 sm:mt-4"></div>
        </div>
        
        <!-- Main content with improved mobile readability -->
        <div class="mb-8 sm:mb-10 md:mb-12 max-w-3xl mx-auto">
            <p class="text-gray-600 text-sm sm:text-base md:text-lg text-center leading-relaxed sm:leading-relaxed">
                Labmania Indonesia adalah lembaga di bidang jasa pelatihan, sertifikasi kompetensi, dan penyedia peralatan 
                laboratorium terlengkap. Kami membantu individu dan perusahaan untuk meningkatkan keterampilan, kompetensi, 
                memenuhi standar industri, dan menyediakan berbagai kebutuhan laboratorium yang berkualitas.
            </p>
        </div>
        
        <!-- Card section with pure Tailwind responsive layout -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-6 mb-8 sm:mb-10">
            <!-- Point 1 - Dual layout with responsive design -->
            <div class="bg-white rounded-lg shadow-sm p-6 md:p-8 md:text-center">
                <!-- Mobile layout (side by side) that transforms at md breakpoint -->
                <div class="flex md:block items-start">
                    <div class="w-12 h-12 rounded-full bg-lm-blue flex items-center justify-center text-white flex-shrink-0 mr-4 md:mx-auto md:mb-4">
                        <!-- Check icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <div class="md:text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Sertifikasi Resmi</h3>
                        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                            Sertifikasi BNSP resmi untuk berbagai bidang laboratorium.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Point 2 - Dual layout with responsive design -->
            <div class="bg-white rounded-lg shadow-sm p-6 md:p-8 md:text-center">
                <!-- Mobile layout (side by side) that transforms at md breakpoint -->
                <div class="flex md:block items-start">
                    <div class="w-12 h-12 rounded-full bg-lm-blue flex items-center justify-center text-white flex-shrink-0 mr-4 md:mx-auto md:mb-4">
                        <!-- Book icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                    </div>
                    <div class="md:text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Pelatihan Interaktif</h3>
                        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                            Pelatihan dan workshop interaktif, didukung oleh instruktur ahli.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Point 3 - Dual layout with responsive design -->
            <div class="bg-white rounded-lg shadow-sm p-6 md:p-8 md:text-center">
                <!-- Mobile layout (side by side) that transforms at md breakpoint -->
                <div class="flex md:block items-start">
                    <div class="w-12 h-12 rounded-full bg-lm-blue flex items-center justify-center text-white flex-shrink-0 mr-4 md:mx-auto md:mb-4">
                        <!-- Beaker icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4.5 3h15"></path>
                            <path d="M6 3v16a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V3"></path>
                            <path d="M6 14h12"></path>
                        </svg>
                    </div>
                    <div class="md:text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Produk Berkualitas</h3>
                        <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                            Pilihan alat dan bahan kimia berkualitas tinggi untuk kebutuhan laboratorium Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Button with better mobile touch target -->
        <div class="text-center">
            <a href="<?php echo esc_url(home_url('/tentang-kami')); ?>" class="inline-block px-6 py-3 bg-lm-blue text-white text-base font-medium rounded-md hover:bg-lm-accent transition-colors duration-300 shadow-sm">
                Temukan Lebih Lanjut Tentang Kami
            </a>
        </div>
    </div>
</section>