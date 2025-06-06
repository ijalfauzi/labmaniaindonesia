<?php
/**
 * The template for displaying the footer
 *
 * @package Labmania_Indonesia
 */
?>

</div><!-- #content -->

<footer id="colophon" role="contentinfo" class="site-footer bg-gradient-to-b from-blue-900 to-blue-950 text-white pt-16 pb-8 overflow-hidden relative">
    <!-- Decorative Wave Element -->
    <div class="absolute top-0 left-0 w-full overflow-hidden">
        <svg class="w-full h-12 text-white" fill="currentColor" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
        </svg>
    </div>

    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Footer Content Grid -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10">
            <!-- Company Info Column -->
            <div class="md:col-span-4 flex flex-col">
                <div class="mb-6 flex flex-col items-center md:items-start text-center md:text-left">
                    <?php if (has_custom_logo()) : ?>
                        <div class="footer-logo mb-4 transform hover:scale-105 transition duration-300">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php else : ?>
                        <h3 class="text-2xl font-bold mb-4 text-lm-yellow inline-block relative group">
                            <?php echo esc_html( bloginfo('name') ); ?>
                            <span class="absolute bottom-0 left-0 w-full h-1 bg-lm-yellow opacity-75 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-in-out origin-bottom-left"></span>
                        </h3>
                    <?php endif; ?>
                    
                    <p class="text-sm mb-5 text-gray-200 max-w-xs">
                        Labmania Indonesia provides premium laboratory equipment and solutions for research facilities, educational institutions, and industrial laboratories.
                    </p>
                    
                    <!-- Social Media Links -->
                    <div class="social-links flex space-x-4 mb-6">
                        <a target="_blank" href="https://www.facebook.com/LabManiaIndonesia/" class="bg-blue-800/50 hover:bg-lm-yellow w-10 h-10 rounded-full flex items-center justify-center transform hover:scale-110 transition duration-300 hover:text-blue-900 shadow-lg" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/labmaniaindonesia/" class="bg-blue-800/50 hover:bg-lm-yellow w-10 h-10 rounded-full flex items-center justify-center transform hover:scale-110 transition duration-300 hover:text-blue-900 shadow-lg" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </a>
                        <a target="_blank" href="https://id.linkedin.com/company/labmania-indonesia" class="bg-blue-800/50 hover:bg-lm-yellow w-10 h-10 rounded-full flex items-center justify-center transform hover:scale-110 transition duration-300 hover:text-blue-900 shadow-lg" aria-label="LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                            </svg>
                        </a>
                        <a target="_blank" href="https://www.youtube.com/c/LabMania" class="bg-blue-800/50 hover:bg-lm-yellow w-10 h-10 rounded-full flex items-center justify-center transform hover:scale-110 transition duration-300 hover:text-blue-900 shadow-lg" aria-label="YouTube">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 576 512">
                                <path d="M549.7 124.1c-6.3-23.7-24.9-42.4-48.6-48.6C456.5 64 288 64 288 64S119.5 64 74.9 75.5c-23.7 6.2-42.3 24.9-48.6 48.6C15.1 168.7 15.1 256 15.1 256s0 87.3 11.2 131.9c6.3 23.7 24.9 42.4 48.6 48.6C119.5 448 288 448 288 448s168.5 0 213.1-11.5c23.7-6.3 42.3-24.9 48.6-48.6 11.2-44.6 11.2-131.9 11.2-131.9s0-87.3-11.2-131.9zM232 336V176l142 80-142 80z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Services Column -->
            <div class="md:col-span-4 md:px-4">
                <h3 class="text-xl font-bold mb-6 text-white inline-flex items-center">
                    <span class="bg-lm-yellow h-6 w-1 mr-3 rounded-full"></span>
                    Layanan Kami
                </h3>
                <ul class="grid grid-cols-1 gap-3">
                    <li>
                        <a href="#" class="flex items-center space-x-3 group py-2 px-3 rounded-lg transition-all duration-300 hover:bg-blue-800/30">
                            <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-800/50 group-hover:bg-lm-yellow group-hover:text-blue-900 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </span>
                            <span class="group-hover:text-lm-yellow">Laboratory Equipment</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 group py-2 px-3 rounded-lg transition-all duration-300 hover:bg-blue-800/30">
                            <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-800/50 group-hover:bg-lm-yellow group-hover:text-blue-900 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                </svg>
                            </span>
                            <span class="group-hover:text-lm-yellow">Lab Design & Installation</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 group py-2 px-3 rounded-lg transition-all duration-300 hover:bg-blue-800/30">
                            <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-800/50 group-hover:bg-lm-yellow group-hover:text-blue-900 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </span>
                            <span class="group-hover:text-lm-yellow">Maintenance & Calibration</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 group py-2 px-3 rounded-lg transition-all duration-300 hover:bg-blue-800/30">
                            <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-800/50 group-hover:bg-lm-yellow group-hover:text-blue-900 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </span>
                            <span class="group-hover:text-lm-yellow">Training & Support</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 group py-2 px-3 rounded-lg transition-all duration-300 hover:bg-blue-800/30">
                            <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-800/50 group-hover:bg-lm-yellow group-hover:text-blue-900 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </span>
                            <span class="group-hover:text-lm-yellow">Consulting Services</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Column -->
            <div class="md:col-span-4">
                <h3 class="text-xl font-bold mb-6 text-white inline-flex items-center">
                    <span class="bg-lm-yellow h-6 w-1 mr-3 rounded-full"></span>
                    Hubungi Kami
                </h3>
                <address class="not-italic">
                    <ul class="space-y-5">
                        <li>
                            <div class="flex items-start group">
                                <div class="bg-gradient-to-br from-blue-800 to-blue-900 p-3 rounded-lg mr-4 shadow-lg group-hover:from-lm-yellow group-hover:to-lm-yellow-light group-hover:text-blue-900 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div class="text-sm leading-relaxed text-gray-200">
                                    Jalan Boulevard Selatan, Ruby Commercial<br> 
                                    No TC25 Summarecon Bekasi,<br>
                                    RT.003/RW.005, Marga Mulya,<br>
                                    Bekasi Utara, Bekasi, West Java 17143
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="tel:+6282124293839" class="flex items-center group">
                                <div class="bg-gradient-to-br from-blue-800 to-blue-900 p-3 rounded-lg mr-4 shadow-lg group-hover:from-lm-yellow group-hover:to-lm-yellow-light group-hover:text-blue-900 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <span class="text-gray-200 group-hover:text-lm-yellow transition-all duration-300">0821-2429-3839</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@labmaniaindonesia.id" class="flex items-center group">
                                <div class="bg-gradient-to-br from-blue-800 to-blue-900 p-3 rounded-lg mr-4 shadow-lg group-hover:from-lm-yellow group-hover:to-lm-yellow-light group-hover:text-blue-900 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <span class="text-gray-200 group-hover:text-lm-yellow transition-all duration-300 break-all">info@labmaniaindonesia.id</span>
                            </a>
                        </li>
                    </ul>
                </address>


            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="mt-12 pt-8 border-t border-blue-800/50">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="copyright text-sm text-gray-300 mb-4 md:mb-0">
                    &copy; <?php echo date('Y'); ?> <span class="font-semibold"><?php echo esc_html( bloginfo('name') ); ?></span>. All rights reserved. Developed by <a href="https://wizepress.id" title="The Wize Way to WordPress" target="_blank" rel="noopener noreferrer" class="text-lm-yellow hover:text-lm-yellow-light transition duration-300">WizePress</a>.
                </div>
                <div class="flex items-center space-x-6 text-sm text-gray-300">
                    <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="hover:text-lm-yellow transition duration-300">Privacy Policy</a>
                    <a href="<?php echo esc_url(home_url('/terms-of-service')); ?>" class="hover:text-lm-yellow transition duration-300">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>


</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>