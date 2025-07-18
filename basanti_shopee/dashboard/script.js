$(document).ready(function () {
    // Sidebar toggle (open/close)
    function toggleSidebar() {
        $('.sidebar-nav, .overlay').toggleClass('active');
    }

    // Sidebar collapse toggle
    function toggleCollapse() {
        $('.sidebar-nav').toggleClass('collapsed');
    }

    // Handle sidebar link click for mobile
    function handleSidebarLinkClick(e) {
        if ($(this).attr('data-bs-toggle') === 'collapse') return;
        if ($(window).width() < 992) toggleSidebar();
    }

    // Pause banner animation on hover
    function pauseBannerAnimation() {
        $(this).css('animation-play-state', 'paused');
    }

    function resumeBannerAnimation() {
        $(this).css('animation-play-state', 'running');
    }

    // Update cart item quantity and subtotal
    function handleCartQtyClick() {
        var $item = $(this).closest('.cart-item');
        var $qtyElement = $item.find('.qty');
        var qty = parseInt($qtyElement.text());
        var price = parseFloat($item.data('price'));
        var discount = parseFloat($item.data('discount'));

        qty = $(this).hasClass('btn-plus') ? qty + 1 : Math.max(1, qty - 1);
        $qtyElement.text(qty);

        var subtotal = (price * qty * (100 - discount) / 100).toFixed(2);
        $item.find('.subtotal').text(subtotal);

        updateCartTotals();
        updateCartItem($item.data('id'), qty);
    }

    // Update all cart totals
    function updateCartTotals() {
        var subtotal = 0;
        var discount = 0;

        $('.cart-item').each(function () {
            var price = parseFloat($(this).data('price'));
            var itemDiscount = parseFloat($(this).data('discount'));
            var qty = parseInt($(this).find('.qty').text());

            var itemSubtotal = price * qty;
            subtotal += itemSubtotal;
            discount += itemSubtotal * itemDiscount / 100;
        });

        $('#cart-subtotal').text('₹' + subtotal.toFixed(2));
        $('#cart-discount').text('-₹' + discount.toFixed(2));
        $('#cart-total').text('₹' + (subtotal - discount).toFixed(2));
    }

    // AJAX function to update cart item on server
    function updateCartItem(productId, quantity) {
        // Example AJAX call (uncomment and modify as needed)
        /*
        $.ajax({
            url: '/api/cart/update',
            method: 'POST',
            data: { 
                product_id: productId, 
                quantity: quantity 
            },
            success: function(response) {
                console.log('Cart updated successfully');
            },
            error: function(xhr) {
                console.error('Error updating cart');
            }
        });
        */
        console.log(`Updating product ${productId} to quantity ${quantity}`);
    }

    // Confirm order button handler
    function handleConfirmOrder() {
        alert('Proceeding to checkout...');
        // window.location.href = '/checkout';
    }

    // Event bindings
    $('.sidebar-nav .nav-link').on('click', handleSidebarLinkClick);
    $('.banner-scroll').on('mouseenter', pauseBannerAnimation);
    $('.banner-scroll').on('mouseleave', resumeBannerAnimation);
    $('.cart-item').on('click', '.btn-plus, .btn-minus', handleCartQtyClick);
    $('#confirm-btn').click(handleConfirmOrder);

    // Optionally expose toggleSidebar and toggleCollapse for external triggers
    window.toggleSidebar = toggleSidebar;
    window.toggleCollapse = toggleCollapse;
});


// Toggle password visibility
  document.querySelectorAll('.toggle-password').forEach(button => {
    button.addEventListener('click', function() {
      const target = document.querySelector(this.getAttribute('toggle'));
      const icon = this.querySelector('i');
      if (target.type === 'password') {
        target.type = 'text';
        icon.classList.replace('fa-eye', 'fa-eye-slash');
      } else {
        target.type = 'password';
        icon.classList.replace('fa-eye-slash', 'fa-eye');
      }
    });
  });