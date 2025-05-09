<?php
/**
 * The template for displaying the footer
 *
 * @package Labmania_Indonesia
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer bg-labmania-blue text-white py-10 overflow-hidden">
    <div class="container mx-auto max-w-7xl px-4 sm:px-6">
        <!-- Decorative Element -->
        <div class="relative mb-8">
            <div class="absolute left-0 right-0 h-1.5 bg-gradient-to-r from-labmania-yellow via-labmania-yellow-light to-labmania-blue"></div>
            <div class="w-16 h-16 bg-labmania-yellow rounded-full mx-auto -mt-8 flex items-center justify-center shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-labmania-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                </svg>
            </div>
        </div>

        <!-- Footer Grid Layout - 3 Columns -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Logo, About & Newsletter -->
            <div class="footer-col md:pr-4">
                <div class="flex flex-col items-center md:items-start text-center md:text-left">
                    <?php if (has_custom_logo()) : ?>
                        <div class="footer-logo mb-4 transform hover:scale-105 transition duration-300">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php else : ?>
                        <h3 class="text-2xl font-bold mb-4 text-labmania-yellow inline-block relative">
                            <?php bloginfo('name'); ?>
                            <span class="absolute bottom-0 left-0 w-full h-1 bg-labmania-yellow-light transform scale-x-0 group-hover:scale-x-100 transition-transform origin-bottom-left"></span>
                        </h3>
                    <?php endif; ?>
                    
                    <p class="text-sm mb-5 opacity-90 border-l-4 border-labmania-yellow pl-3 max-w-md">
                        Labmania Indonesia provides premium laboratory equipment and solutions for research facilities, educational institutions, and industrial laboratories.
                    </p>
                    
                    <!-- Social Media Links -->
                    <div class="social-links flex space-x-4 mb-6">
                        <a href="#" class="bg-blue-800 hover:bg-labmania-yellow w-10 h-10 rounded-full flex items-center justify-center transform hover:scale-110 transition duration-300 hover:text-labmania-blue shadow-md" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a>
                        <a href="#" class="bg-blue-800 hover:bg-labmania-yellow w-10 h-10 rounded-full flex items-center justify-center transform hover:scale-110 transition duration-300 hover:text-labmania-blue shadow-md" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </a>
                        <a href="#" class="bg-blue-800 hover:bg-labmania-yellow w-10 h-10 rounded-full flex items-center justify-center transform hover:scale-110 transition duration-300 hover:text-labmania-blue shadow-md" aria-label="LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                            </svg>
                        </a>
                    </div>
                    
                    <!-- Newsletter Form -->
                    <div class="newsletter w-full bg-blue-800 rounded-lg p-4 shadow-lg transform hover:shadow-xl transition duration-300">
                        <h4 class="text-base font-bold mb-3 text-labmania-yellow flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Subscribe to our newsletter
                        </h4>
                        <form class="flex flex-col gap-2">
                            <input type="email" placeholder="Your email" class="px-3 py-2 text-gray-700 bg-white rounded-md focus:outline-none focus:ring-2 focus:ring-labmania-accent w-full text-sm" required>
                            <button type="submit" class="bg-labmania-yellow hover:bg-labmania-yellow-light text-labmania-blue font-bold py-2 px-4 rounded-md transition duration-300 transform hover:-translate-y-1 hover:shadow-md text-sm">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Services -->
            <div class="footer-col md:border-l md:border-r border-blue-400 md:px-6">
                <h3 class="text-xl font-bold mb-5 text-labmania-yellow flex items-center after:content-[''] after:ml-4 after:flex-grow after:border-b-2 after:border-blue-400">
                    Our Services
                </h3>
                <ul class="space-y-3">
                    <li class="flex items-start group">
                        <div class="bg-blue-800 rounded-full p-1.5 mr-3 mt-0.5 group-hover:bg-labmania-yellow transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:text-labmania-blue transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <a href="#" class="hover:text-labmania-yellow transition duration-300">Laboratory Equipment</a>
                    </li>
                    <li class="flex items-start group">
                        <div class="bg-blue-800 rounded-full p-1.5 mr-3 mt-0.5 group-hover:bg-labmania-yellow transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:text-labmania-blue transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <a href="#" class="hover:text-labmania-yellow transition duration-300">Lab Design & Installation</a>
                    </li>
                    <li class="flex items-start group">
                        <div class="bg-blue-800 rounded-full p-1.5 mr-3 mt-0.5 group-hover:bg-labmania-yellow transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:text-labmania-blue transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <a href="#" class="hover:text-labmania-yellow transition duration-300">Maintenance & Calibration</a>
                    </li>
                    <li class="flex items-start group">
                        <div class="bg-blue-800 rounded-full p-1.5 mr-3 mt-0.5 group-hover:bg-labmania-yellow transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:text-labmania-blue transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <a href="#" class="hover:text-labmania-yellow transition duration-300">Training & Support</a>
                    </li>
                    <li class="flex items-start group">
                        <div class="bg-blue-800 rounded-full p-1.5 mr-3 mt-0.5 group-hover:bg-labmania-yellow transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:text-labmania-blue transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <a href="#" class="hover:text-labmania-yellow transition duration-300">Consulting Services</a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="footer-col md:pl-4">
                <h3 class="text-xl font-bold mb-5 text-labmania-yellow flex items-center after:content-[''] after:ml-4 after:flex-grow after:border-b-2 after:border-blue-400">
                    Contact Us
                </h3>
                <address class="not-italic">
                    <ul class="space-y-4">
                        <li class="group">
                            <div class="flex items-start">
                                <div class="bg-blue-800 p-2 rounded-lg mr-3 group-hover:bg-labmania-yellow group-hover:text-labmania-blue transition-colors duration-300 shadow-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div class="text-sm leading-relaxed">
                                    Jalan Boulevard Selatan, Ruby Commercial<br> 
                                    No TC25 Summarecon Bekasi,<br>
                                    RT.003/RW.005, Marga Mulya,<br>
                                    Bekasi Utara, Bekasi, West Java 17143
                                </div>
                            </div>
                        </li>
                        <li class="group">
                            <a href="tel:+6282124293839" class="flex items-center group-hover:text-labmania-yellow transition-colors duration-300">
                                <div class="bg-blue-800 p-2 rounded-lg mr-3 group-hover:bg-labmania-yellow group-hover:text-labmania-blue transition-colors duration-300 shadow-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <span>0821-2429-3839</span>
                            </a>
                        </li>
                        <li class="group">
                            <a href="mailto:info@labmaniaindonesia.id" class="flex items-center group-hover:text-labmania-yellow transition-colors duration-300">
                                <div class="bg-blue-800 p-2 rounded-lg mr-3 group-hover:bg-labmania-yellow group-hover:text-labmania-blue transition-colors duration-300 shadow-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <span class="break-all md:break-normal">info@labmaniaindonesia.id</span>
                            </a>
                        </li>
                    </ul>
                </address>
            </div>
        </div>

        <!-- Bottom Footer - Copyright -->
        <div class="relative mt-10 pt-6 text-center md:flex md:justify-between md:items-center">
            <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-transparent via-labmania-yellow to-transparent"></div>
            
            <div class="copyright text-sm">
                &copy; <?php echo date('Y'); ?> <span class="font-semibold"><?php bloginfo('name'); ?></span>. All rights reserved.
            </div>
            <div class="privacy-links mt-3 md:mt-0 text-sm">
                <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="hover:text-labmania-yellow transition duration-300 mx-3">Privacy Policy</a>
                <span class="text-labmania-yellow">•</span>
                <a href="<?php echo esc_url(home_url('/terms-of-service')); ?>" class="hover:text-labmania-yellow transition duration-300 mx-3">Terms of Service</a>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>