$(document).ready(function () {
    function showError(input, message) {
        input.addClass('is-invalid');
        input.next('.invalid-feedback').text(message).show();
    }

    function removeError(input) {
        input.removeClass('is-invalid');
        input.next('.invalid-feedback').hide();
    }

    function validateUsername(username) {
        const val = username.val().trim();
        if (val === '') {
            showError(username, 'Username is required');
            return false;
        } else if (!/^[a-zA-Z0-9]+$/.test(val)) {
            showError(username, 'Only letters and numbers allowed');
            return false;
        } else if (val.length < 4 || val.length > 20) {
            showError(username, 'Username must be 4–20 characters');
            return false;
        }
        removeError(username);
        return true;
    }

    function validatePassword(password) {
        const val = password.val().trim();
        const strongPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;

        if (val === '') {
            showError(password, 'Password is required');
            return false;
        } else if (!strongPassword.test(val)) {
            showError(password, 'Min 8 chars with upper, lower, number, special');
            return false;
        }
        removeError(password);
        return true;
    }

    function validateForm() {
        const username = $('#username');
        const password = $('#password');
        let valid = true;

        if (!validateUsername(username)) valid = false;
        if (!validatePassword(password)) valid = false;

        return valid;
    }

    $('#username, #password').on('input', function () {
        validateForm();
    });

    $('#loginForm').on('submit', function (e) {
        e.preventDefault();

        if (validateForm()) {
            $('#loginBtn').prop('disabled', true);
            $('#loginText').addClass('visually-hidden');
            $('#loginSpinner').removeClass('visually-hidden');

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
