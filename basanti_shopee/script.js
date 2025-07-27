$(document).ready(function () {
    function showError(input, message) {
        input.addClass('is-invalid');
        input.next('.invalid-feedback').text(message).show();
    }

    function removeError(input) {
        input.removeClass('is-invalid');
        input.next('.invalid-feedback').hide();
    }

    function validateForm() {
        let valid = true;
        const username = $('#username');
        const password = $('#password');

        // Username validation
        if (username.val().trim() === '') {
            showError(username, 'Please enter your username');
            valid = false;
        } else {
            removeError(username);
        }

        // Password validation
        if (password.val().trim() === '') {
            showError(password, 'Please enter your password');
            valid = false;
        } else if (password.val().length < 6) {
            showError(password, 'Password must be at least 6 characters');
            valid = false;
        } else {
            removeError(password);
        }

        return valid;
    }

    // Real-time validation on input
    $('#username, #password').on('input', function () {
        validateForm();
    });

    // Submit handler
    $('#loginForm').on('submit', function (e) {
        e.preventDefault();

        if (validateForm()) {
            $('#loginBtn').prop('disabled', true);
            $('#loginText').addClass('visually-hidden');
            $('#loginSpinner').removeClass('visually-hidden');

            // Simulate login delay
            setTimeout(function () {
                alert('Login successful!');
                $('#loginForm')[0].reset();
                $('#loginBtn').prop('disabled', false);
                $('#loginText').removeClass('visually-hidden');
                $('#loginSpinner').addClass('visually-hidden');
                $('#username, #password').removeClass('is-invalid');
            }, 1500);
        }
    });
});

// footer year auto update
document.getElementById('year').textContent = new Date().getFullYear();
