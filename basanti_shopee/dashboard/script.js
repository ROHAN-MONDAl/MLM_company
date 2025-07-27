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


    // ================================
    // user Profile validations
    //================================

    // Profile picture upload preview
    $('#avatarUpload').change(function (e) {
        const file = e.target.files[0];
        if (file) {
            // Validate file size (2MB max)
            if (file.size > 2 * 1024 * 1024) {
                alert('Profile picture must be less than 2MB');
                return;
            }

            // Create preview
            const reader = new FileReader();
            reader.onload = function (event) {
                $('#avatarPreview').css('background-image', `url('${event.target.result}')`);
            };
            reader.readAsDataURL(file);
        }
    });

    // PAN card file upload feedback
    $('#panCard').change(function (e) {
        const file = e.target.files[0];
        const $wrapper = $(this).closest('.file-upload-wrapper');

        if (file) {
            // Validate file size (5MB max)
            if (file.size > 5 * 1024 * 1024) {
                $('#panCardError').text('File must be less than 5MB').css('color', 'var(--error-color)');
                $wrapper.attr('data-text', 'File too large - max 5MB');
                return;
            }

            // Validate file type
            const validTypes = ['image/jpeg', 'image/png', 'application/pdf'];
            if (!validTypes.includes(file.type)) {
                $('#panCardError').text('Only JPG, PNG, or PDF files allowed').css('color', 'var(--error-color)');
                $wrapper.attr('data-text', 'Invalid file type');
                return;
            }

            // Update UI
            $('#panCardError').text('');
            $wrapper.attr('data-text', file.name);
        }
    });

    // Real-time validation
    $('#fullName').on('input', validateName);
    $('#phoneNumber').on('input', validatePhone);
    $('#emailAddress').on('input', validateEmail);
    $('#streetAddress').on('input', validateAddress);
    $('#postalCode').on('input', validatePostalCode);

    function validateName() {
        const $input = $('#fullName');
        const $error = $('#fullNameError');
        const value = $input.val().trim();

        if (value.length === 0) {
            showError($input, $error, 'Full name is required');
        } else if (value.length < 3) {
            showError($input, $error, 'Name must be at least 3 characters');
        } else {
            showSuccess($input, $error);
        }
    }

    function validatePhone() {
        const $input = $('#phoneNumber');
        const $error = $('#phoneError');
        const value = $input.val().trim();
        const phoneRegex = /^[0-9]{10,15}$/;

        if (value.length === 0) {
            showError($input, $error, 'Phone number is required');
        } else if (!phoneRegex.test(value)) {
            showError($input, $error, 'Enter a valid phone number (10-15 digits)');
        } else {
            showSuccess($input, $error);
        }
    }

    function validateEmail() {
        const $input = $('#emailAddress');
        const $error = $('#emailError');
        const value = $input.val().trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (value.length === 0) {
            showError($input, $error, 'Email is required');
        } else if (!emailRegex.test(value)) {
            showError($input, $error, 'Enter a valid email address');
        } else {
            showSuccess($input, $error);
        }
    }

    function validateAddress() {
        const $input = $('#streetAddress');
        const $error = $('#addressError');
        const value = $input.val().trim();

        if (value.length === 0) {
            showError($input, $error, 'Address is required');
        } else if (value.length < 10) {
            showError($input, $error, 'Address must be at least 10 characters');
        } else {
            showSuccess($input, $error);
        }
    }

    function validatePostalCode() {
        const $input = $('#postalCode');
        const $error = $('#postalCodeError');
        const value = $input.val().trim();
        const postalRegex = /^[0-9]{6}$/;

        if (value.length === 0) {
            showError($input, $error, 'Postal code is required');
        } else if (!postalRegex.test(value)) {
            showError($input, $error, 'Enter a valid 6-digit postal code');
        } else {
            showSuccess($input, $error);
        }
    }

    function showError($input, $error, message) {
        $input.removeClass('valid').addClass('invalid');
        $error.text(message).css('color', 'var(--error-color)');
        $input.closest('.input-with-feedback').find('.valid-feedback').css('opacity', '0');
    }

    function showSuccess($input, $error) {
        $input.removeClass('invalid').addClass('valid');
        $error.text('');
        $input.closest('.input-with-feedback').find('.valid-feedback').css('opacity', '1');
    }

    // Form submission
    $('#profileForm').submit(function (e) {
        e.preventDefault();

        // Trigger all validations
        validateName();
        validatePhone();
        validateEmail();
        validateAddress();
        validatePostalCode();

        // Check PAN card upload
        if ($('#panCard')[0].files.length === 0) {
            $('#panCardError').text('PAN card upload is required').css('color', 'var(--error-color)');
            return;
        } else {
            $('#panCardError').text('');
        }

        // Check if any fields are invalid
        if ($('.invalid').length > 0) {
            $('html, body').animate({
                scrollTop: $('.invalid').first().offset().top - 100
            }, 500);
            return;
        }

        // Form is valid - proceed with submission
        alert('Profile updated successfully!');
        // Uncomment to actually submit the form:
        // this.submit();
    });

    // ================================
    // user security validations
    //================================

    $('.toggle-password').click(function () {
        const input = $($(this).attr('toggle'));
        const icon = $(this).find('i');
        const type = input.attr('type') === 'password' ? 'text' : 'password';
        input.attr('type', type);
        icon.toggleClass('fa-eye fa-eye-slash');
    });

    function isStrongPassword(pw) {
        return /.{8,}/.test(pw) &&
            /[A-Z]/.test(pw) &&
            /\d/.test(pw) &&
            /[^A-Za-z0-9]/.test(pw);
    }

    function showError(input, msg) {
        input.addClass('is-invalid').removeClass('is-valid');
        input.closest('.input-group').next('.error-text').text(msg);
    }

    function clearError(input) {
        input.removeClass('is-invalid').addClass('is-valid');
        input.closest('.input-group').next('.error-text').text('');
    }

    $('#username').on('input', function () {
        $(this).val().trim() ? clearError($(this)) : showError($(this), 'Username is required');
    });

    $('#current-password').on('input', function () {
        $(this).val().trim() ? clearError($(this)) : showError($(this), 'Current password is required');
    });

    $('#new-password').on('input', function () {
        isStrongPassword($(this).val()) ? clearError($(this)) : showError($(this), '8+ chars, 1 uppercase, 1 number, 1 special char');
    });

    $('#confirm-password').on('input', function () {
        const newPass = $('#new-password').val();
        const confirm = $(this).val();
        (newPass === confirm) ? clearError($(this)) : showError($(this), 'Passwords do not match');
    });

    $('#credentialForm').on('submit', function (e) {
        let valid = true;

        if (!$('#username').val().trim()) {
            showError($('#username'), 'Username is required');
            valid = false;
        }

        if (!$('#current-password').val().trim()) {
            showError($('#current-password'), 'Current password is required');
            valid = false;
        }

        if (!isStrongPassword($('#new-password').val())) {
            showError($('#new-password'), '8+ chars, 1 uppercase, 1 number, 1 special char');
            valid = false;
        }

        if ($('#new-password').val() !== $('#confirm-password').val()) {
            showError($('#confirm-password'), 'Passwords do not match');
            valid = false;
        }

        if (!valid) e.preventDefault();
    });


});