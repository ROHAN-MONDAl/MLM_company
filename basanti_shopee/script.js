function validatePassword(password) {
    const pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?#&^])[A-Za-z\d@$!%*?#&^]{6,}$/;
    return pattern.test(password);
}

$(document).ready(function () {
    function validateField(id, isValid) {
        const field = $('#' + id);
        field.removeClass('is-valid is-invalid');
        field.addClass(isValid ? 'is-valid' : 'is-invalid');
    }

    $('#username').on('input', function () {
        const value = $(this).val().trim();
        validateField('username', value.length >= 6);
    });

    $('#password').on('input', function () {
        validateField('password', validatePassword($(this).val()));
    });

    $('#loginForm').on('submit', function (e) {
        e.preventDefault();
        const username = $('#username').val().trim();
        const password = $('#password').val();

        let valid = true;

        if (username.length < 6) {
            validateField('username', false);
            valid = false;
        } else {
            validateField('username', true);
        }

        if (!validatePassword(password)) {
            validateField('password', false);
            valid = false;
        } else {
            validateField('password', true);
        }

        if (valid) {
            $('#loginBtn').attr('disabled', true);
            $('#loginText').text('Logging in...');
            $('#loginSpinner').removeClass('visually-hidden');

            setTimeout(function () {
                $('#loginBtn').attr('disabled', false);
                $('#loginText').text('Login');
                $('#loginSpinner').addClass('visually-hidden');
                $('#loginForm')[0].reset();
                $('.form-control').removeClass('is-valid is-invalid');
            }, 2000);
        }
    });


});

// footer year auto update
    document.getElementById('year').textContent = new Date().getFullYear();

