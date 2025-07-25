// Wait until the DOM is fully loaded
$(document).ready(function () {
    // -----------------------------
    // Tab Switching Functionality
    // -----------------------------
    $('.tab-button').click(function () {
        const tabId = $(this).data('tab'); // Get tab ID from data attribute

        // Remove 'active' class from all buttons
        $('.tab-button').removeClass('active');

        // Hide all tab content sections
        $('.tab-content').hide();

        // Show the selected tab content
        $('#' + tabId).show();

        // Set the clicked button as active
        $(this).addClass('active');
    });

    // -----------------------------
    // Scroll-Triggered Animation
    // -----------------------------
    const $cards = $('.summary-card');

    // Custom function to check if an element is in the viewport
    function isInViewport($el) {
        const elementTop = $el.offset().top;
        const elementBottom = elementTop + $el.outerHeight();

        const viewportTop = $(window).scrollTop();
        const viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop + 50 && elementTop < viewportBottom;
    }

    // Animate cards on scroll
    function animateVisibleCards() {
        $cards.each(function () {
            const $card = $(this);
            if (isInViewport($card) && !$card.hasClass('visible')) {
                $card.addClass('visible');

                // Random delay for staggered animation
                const delay = Math.random() * 0.3;
                $card.css('transition-delay', `${delay}s`);
            }
        });
    }

    // Trigger on page load and scroll
    animateVisibleCards();
    $(window).on('scroll resize', animateVisibleCards);

    // -----------------------------
    // Bubble Click Effect
    // -----------------------------
    $cards.on('click', function (e) {
        const $card = $(this);
        const $bubble = $('<div></div>');

        const size = Math.max($card.outerWidth(), $card.outerHeight()) * 1.5;
        const offset = $card.offset();

        // Set bubble styles using jQuery
        $bubble.css({
            position: 'absolute',
            width: `${size}px`,
            height: `${size}px`,
            borderRadius: '50%',
            background: 'rgba(255,255,255,0.4)',
            transform: 'scale(0)',
            transition: 'transform 0.6s ease-out, opacity 0.6s ease-out',
            pointerEvents: 'none',
            left: `${e.pageX - offset.left - size / 2}px`,
            top: `${e.pageY - offset.top - size / 2}px`
        });

        $card.append($bubble);

        // Animate the bubble
        setTimeout(() => {
            $bubble.css({
                transform: 'scale(1)',
                opacity: '0'
            });
        }, 10);

        // Remove after animation
        setTimeout(() => {
            $bubble.remove();
        }, 1000);
    });






    
});



