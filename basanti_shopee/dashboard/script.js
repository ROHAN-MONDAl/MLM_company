// Wait for the DOM to be fully loaded before running scripts
$(document).ready(function () {
    // Sidebar toggle (open/close) for mobile view
    function toggleSidebar() {
        $('.sidebar-nav, .overlay').toggleClass('active');
    }

    // Collapse/expand sidebar (for desktop view)
    function toggleCollapse() {
        $('.sidebar-nav').toggleClass('collapsed');
    }

    // Handles sidebar link clicks on mobile: closes sidebar unless it's a collapsible menu
    function handleSidebarLinkClick(e) {
        if ($(this).attr('data-bs-toggle') === 'collapse') return;
        if ($(window).width() < 992) toggleSidebar();
    }

    // Pause banner animation when mouse enters (hover)
    function pauseBannerAnimation() {
        $(this).css('animation-play-state', 'paused');
    }

    // Resume banner animation when mouse leaves
    function resumeBannerAnimation() {
        $(this).css('animation-play-state', 'running');
    }

    // Handles plus/minus button clicks in cart: updates quantity, subtotal, and triggers AJAX update
    function handleCartQtyClick() {
        var $item = $(this).closest('.cart-item');
        var $qtyElement = $item.find('.qty');
        var qty = parseInt($qtyElement.text());
        var price = parseFloat($item.data('price'));
        var discount = parseFloat($item.data('discount'));

        // Increase or decrease quantity, but not below 1
        qty = $(this).hasClass('btn-plus') ? qty + 1 : Math.max(1, qty - 1);
        $qtyElement.text(qty);

        // Calculate and update subtotal for this item
        var subtotal = (price * qty * (100 - discount) / 100).toFixed(2);
        $item.find('.subtotal').text(subtotal);

        // Update overall cart totals and sync with server
        updateCartTotals();
        updateCartItem($item.data('id'), qty);
    }

    // Calculates and updates cart subtotal, discount, and total
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

        // Update cart summary display
        $('#cart-subtotal').text('₹' + subtotal.toFixed(2));
        $('#cart-discount').text('-₹' + discount.toFixed(2));
        $('#cart-total').text('₹' + (subtotal - discount).toFixed(2));
    }

    // Sends AJAX request to update cart item quantity on the server (currently logs to console)
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

    // Bind event handlers
    $('.sidebar-nav .nav-link').on('click', handleSidebarLinkClick);
    $('.banner-scroll').on('mouseenter', pauseBannerAnimation);
    $('.banner-scroll').on('mouseleave', resumeBannerAnimation);
    $('.cart-item').on('click', '.btn-plus, .btn-minus', handleCartQtyClick);

    // Expose sidebar toggle functions globally for use elsewhere (e.g., from buttons)
    window.toggleSidebar = toggleSidebar;
    window.toggleCollapse = toggleCollapse;
});

// Toggle password visibility for input fields with .toggle-password button
document.querySelectorAll('.toggle-password').forEach(button => {
    button.addEventListener('click', function () {
        const target = document.querySelector(this.getAttribute('toggle'));
        const icon = this.querySelector('i');
        // Toggle between password and text input types
        if (target.type === 'password') {
            target.type = 'text';
            icon.classList.replace('fa-eye', 'fa-eye-slash');
        } else {
            target.type = 'password';
            icon.classList.replace('fa-eye-slash', 'fa-eye');
        }
    });
});

// Table pagination for transaction history
$(document).ready(function () {
    const rowsPerPage = 5; // Number of rows per page
    const rows = $('#transactionTableBody tr');
    const totalRows = rows.length;
    const totalPages = Math.ceil(totalRows / rowsPerPage);
    const pagination = $('#pagination');

    // Shows only the rows for the current page and updates pagination controls
    function showPage(page) {
        rows.hide();
        rows.slice((page - 1) * rowsPerPage, page * rowsPerPage).show();

        pagination.empty();

        // Previous button (disabled on first page)
        const prevDisabled = page === 1 ? 'disabled' : '';
        pagination.append(`<li class="page-item ${prevDisabled}"><a class="page-link" href="#" data-page="${page - 1}">Previous</a></li>`);

        // Page number buttons
        for (let i = 1; i <= totalPages; i++) {
            const active = i === page ? 'active' : '';
            pagination.append(`<li class="page-item ${active}"><a class="page-link" href="#" data-page="${i}">${i}</a></li>`);
        }

        // Next button (disabled on last page)
        const nextDisabled = page === totalPages ? 'disabled' : '';
        pagination.append(`<li class="page-item ${nextDisabled}"><a class="page-link" href="#" data-page="${page + 1}">Next</a></li>`);
    }

    // Show first page on load
    showPage(1);

    // Handle pagination link clicks (event delegation)
    pagination.on('click', 'a.page-link', function (e) {
        e.preventDefault();
        const page = parseInt($(this).data('page'));
        if (!isNaN(page) && page >= 1 && page <= totalPages) {
            showPage(page);
        }
    });
});