// Ensure jQuery is loaded first
document.addEventListener('DOMContentLoaded', function() {
    // Check if jQuery is loaded
    if (typeof jQuery == 'undefined') {
        console.error('jQuery is not loaded. Please include jQuery before this script.');
        return;
    }

    // Use jQuery's ready function
    $(document).ready(function () {
        // -----------------------------
        // Tab Switching Functionality
        // -----------------------------
        $('.dashboard-tab-button').on('click', function () {
            const tabId = $(this).data('tab'); // Get tab ID from data attribute

            // Remove 'active' class from all buttons
            $('.dashboard-tab-button').removeClass('active');

            // Hide all tab content sections
            $('.dashboard-tab-content').hide();

            // Show the selected tab content
            $('#' + tabId).show();

            // Set the clicked button as active
            $(this).addClass('active');

            // Recalculate card visibility in new tab
            animateVisibleCards();
        });

        // -----------------------------
        // Scroll-Triggered Animation
        // -----------------------------
        function isInViewport($el) {
            const rect = $el[0].getBoundingClientRect();
            return (
                rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.bottom >= 0
            );
        }

        function animateVisibleCards() {
            $('.dashboard-summary-card:visible').each(function () {
                const $card = $(this);
                if (isInViewport($card)) {
                    $card.css({
                        'transform': 'translateY(0)',
                        'opacity': '1'
                    });

                    const delay = Math.random() * 0.3;
                    $card.css('transition-delay', `${delay}s`);
                }
            });
        }

        // Trigger animation on scroll and resize
        $(window).on('scroll resize', function() {
            requestAnimationFrame(animateVisibleCards);
        });

        // -----------------------------
        // Bubble Click Effect
        // -----------------------------
        $(document).on('click', '.dashboard-summary-card', function (e) {
            const $card = $(this);
            const $bubble = $('<div class="card-bubble-effect"></div>');

            const size = Math.max($card.outerWidth(), $card.outerHeight()) * 1.5;
            const offset = $card.offset();

            $bubble.css({
                position: 'absolute',
                width: `${size}px`,
                height: `${size}px`,
                borderRadius: '50%',
                background: 'rgba(255,255,255,0.4)',
                transform: 'scale(0)',
                transition: 'transform 0.6s ease-out, opacity 0.6s ease-out',
                pointerEvents: 'none',
                left: `${e.pageX - offset.left - size/2}px`,
                top: `${e.pageY - offset.top - size/2}px`,
                zIndex: '1'
            });

            $card.append($bubble);

            setTimeout(() => {
                $bubble.css({
                    transform: 'scale(1)',
                    opacity: '0'
                });
            }, 10);

            setTimeout(() => {
                $bubble.remove();
            }, 1000);
        });

        // -----------------------------
        // Auto Activate First Tab
        // -----------------------------
        $('.dashboard-tab-button').first().trigger('click');
        
        // Initialize card animations
        animateVisibleCards();
    });
});