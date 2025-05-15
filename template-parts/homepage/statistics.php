<?php
/**
 * Statistics Section Template for Homepage
 * - Card-based timeline layout on mobile (Alternative 3)
 * - Original horizontal layout on desktop
 * - No yellow accent underline
 * 
 * @package Labmania_Indonesia
 */

// Define statistics data
$statistics = array(
    array(
        'number' => '150+',
        'label' => 'Personil Tersertifikasi BNSP',
        'start_val' => 0,
        'end_val' => 150,
    ),
    array(
        'number' => '500+',
        'label' => 'Laboratorium di Indonesia',
        'start_val' => 0,
        'end_val' => 500,
    ),
    array(
        'number' => '30+',
        'label' => 'Trainer Berpengalaman',
        'start_val' => 0,
        'end_val' => 30,
    ),
);
?>

<section class="py-10 sm:py-16 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <!-- Mobile View Only: Timeline-style stats (hidden on md screens and up) -->
        <div class="md:hidden">
            <!-- Company name/logo section -->
            <div class="text-center mb-8">
                <h3 class="text-3xl font-bold text-lm-blue">
                    Labmania Indonesia
                </h3>
                <p class="text-sm text-gray-600 mt-2 max-w-md mx-auto">
                    Partner terpercaya untuk pelatihan dan peralatan laboratorium berkualitas tinggi
                </p>
            </div>
            
            <!-- Stats in card-based timeline layout -->
            <div class="space-y-6 max-w-sm mx-auto">
                <?php foreach ($statistics as $index => $stat) : ?>
                    <div class="flex flex-col items-center">
                        <!-- Content card with non-full width -->
                        <div class="bg-white rounded-lg shadow-sm p-6 text-center">
                            <!-- Number with animation -->
                            <div class="text-4xl font-bold text-sky-400 mb-2 counter-value" 
                                 data-start="<?php echo esc_attr($stat['start_val']); ?>" 
                                 data-end="<?php echo esc_attr($stat['end_val']); ?>"
                                 data-suffix="+"
                                 data-duration="2000">
                                <?php echo esc_html($stat['number']); ?>
                            </div>
                            
                            <!-- Label -->
                            <p class="text-sm text-gray-700 font-medium">
                                <?php echo esc_html($stat['label']); ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <!-- Desktop View Only: Original horizontal layout (hidden on mobile, visible on md screens and up) -->
        <div class="hidden md:block">
            <!-- Stats container -->
            <div class="flex flex-row justify-between items-center">
                <!-- Company name/logo column -->
                <div class="w-1/4 text-left pr-6 border-r border-gray-200">
                    <h3 class="text-3xl sm:text-4xl font-bold text-lm-blue bg-clip-text text-transparent bg-gradient-to-r from-lm-blue to-sky-400">
                        Labmania <br class="hidden sm:block"> Indonesia
                    </h3>
                </div>
                
                <!-- Stats columns -->
                <div class="w-3/4 grid grid-cols-3 gap-8 pl-6">
                    <?php foreach ($statistics as $index => $stat) : ?>
                        <div class="text-left <?php echo ($index < count($statistics) - 1) ? 'border-r border-gray-200 pr-8' : ''; ?>">
                            <!-- Number with animation -->
                            <div class="text-4xl sm:text-5xl lg:text-6xl font-bold text-sky-400 mb-2 counter-value" 
                                 data-start="<?php echo esc_attr($stat['start_val']); ?>" 
                                 data-end="<?php echo esc_attr($stat['end_val']); ?>"
                                 data-suffix="+"
                                 data-duration="2000">
                                <?php echo esc_html($stat['number']); ?>
                            </div>
                            
                            <!-- Label -->
                            <p class="text-sm sm:text-base text-gray-700 font-medium">
                                <?php echo esc_html($stat['label']); ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript for counter animation -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const counterElements = document.querySelectorAll('.counter-value');
    
    // Function to check if element is in viewport
    function isInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
    
    // Function to animate counter
    function animateCounter(el) {
        const startValue = parseInt(el.getAttribute('data-start') || 0);
        const endValue = parseInt(el.getAttribute('data-end') || 0);
        const suffix = el.getAttribute('data-suffix') || '';
        const duration = parseInt(el.getAttribute('data-duration') || 2000);
        const increment = (endValue - startValue) / (duration / 16);
        
        let currentValue = startValue;
        const counter = setInterval(() => {
            currentValue += increment;
            
            if (currentValue >= endValue) {
                clearInterval(counter);
                currentValue = endValue;
            }
            
            el.textContent = Math.floor(currentValue) + suffix;
        }, 16);
    }
    
    // Initial check for counters in viewport
    function checkCounters() {
        counterElements.forEach(counter => {
            if (isInViewport(counter) && !counter.classList.contains('counted')) {
                counter.classList.add('counted');
                animateCounter(counter);
            }
        });
    }
    
    // Check on scroll
    window.addEventListener('scroll', checkCounters);
    
    // Check on initial load
    checkCounters();
});
</script>