$(document).ready(function () {
    // Profile picture upload
    $('#profilePic').change(function (e) {
        if (e.target.files && e.target.files[0]) {
            const reader = new FileReader();
            reader.onload = function (event) {
                $('#profileImage').attr('src', event.target.result).show();
                $('.profile-pic-container .icon').hide();
            }
            reader.readAsDataURL(e.target.files[0]);
        }
    });

    // PAN Card upload options
    $('#panCardUpload').click(function (e) {
        e.stopPropagation();
        $('#panUploadOptions').toggle();
    });

    $(document).click(function () {
        $('#panUploadOptions').hide();
    });

    $('#panTakePhoto').click(function (e) {
        e.stopPropagation();
        $('#panCardCamera').click();
        $('#panUploadOptions').hide();
    });

    $('#panUploadFile').click(function (e) {
        e.stopPropagation();
        $('#panCard').click();
        $('#panUploadOptions').hide();
    });

    $('#panCard').change(function (e) {
        if (e.target.files && e.target.files[0]) {
            $('#panCardName').text(e.target.files[0].name);
        }
    });

    $('#panCardCamera').change(function (e) {
        if (e.target.files && e.target.files[0]) {
            $('#panCardName').text("Camera photo - " + e.target.files[0].name);
        }
    });

    // Get Location Button with jQuery
    $('#getLocationBtn').click(function () {
        const $locationStatus = $('#locationStatus');
        const $address = $('#address');
        const $pincode = $('#pincode');
        const $city = $('#city');
        const $state = $('#state');

        $locationStatus.html('<i class="fas fa-spinner fa-spin"></i> Detecting your location...');

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                function (position) {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;

                    // Use OpenStreetMap Nominatim API for reverse geocoding
                    $.ajax({
                        url: `https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}&addressdetails=1`,
                        method: 'GET',
                        success: function (data) {
                            if (data.address) {
                                const addr = data.address;
                                let fullAddress = [];

                                if (addr.road) fullAddress.push(addr.road);
                                if (addr.suburb) fullAddress.push(addr.suburb);
                                if (addr.city || addr.town || addr.village) fullAddress.push(addr.city || addr.town || addr.village);
                                if (addr.state) fullAddress.push(addr.state);
                                if (addr.country) fullAddress.push(addr.country);

                                $address.val(fullAddress.join(', '));
                                $pincode.val(addr.postcode || '');
                                $city.val(addr.city || addr.town || addr.village || '');
                                $state.val(addr.state || '');

                                $locationStatus.html('<i class="fas fa-check-circle text-success"></i> Location detected! Please verify your details');
                            } else {
                                $locationStatus.html('<i class="fas fa-exclamation-circle text-warning"></i> Location detected but address details not found. Please enter manually.');
                            }
                        },
                        error: function () {
                            $locationStatus.html('<i class="fas fa-exclamation-circle text-warning"></i> Could not fetch address details. Please enter manually.');
                        }
                    });
                },
                function (error) {
                    let errorMsg = 'Error detecting location: ';
                    switch (error.code) {
                        case error.PERMISSION_DENIED:
                            errorMsg += 'Permission denied';
                            break;
                        case error.POSITION_UNAVAILABLE:
                            errorMsg += 'Position unavailable';
                            break;
                        case error.TIMEOUT:
                            errorMsg += 'Request timed out';
                            break;
                        case error.UNKNOWN_ERROR:
                            errorMsg += 'Unknown error';
                            break;
                    }
                    $locationStatus.html(`<i class="fas fa-exclamation-circle text-danger"></i> ${errorMsg}`);
                },
                {
                    enableHighAccuracy: true,
                    timeout: 10000,
                    maximumAge: 0
                }
            );
        } else {
            $locationStatus.html('<i class="fas fa-exclamation-circle text-danger"></i> Geolocation not supported by your browser');
        }
    });

    // Form validation
    $('#mlmRegistrationForm').submit(function (e) {
        e.preventDefault();
        let isValid = true;

        // Reset errors
        $('.error').hide();
        $('.form-control, .form-check-input').removeClass('is-invalid');

        // Validate Full Name
        if ($('#fullName').val().trim() === '') {
            $('#fullNameError').show();
            $('#fullName').addClass('is-invalid');
            isValid = false;
        }

        // Validate Phone Number
        const phone = $('#phoneNumber').val().trim();
        if (phone === '' || !/^\d{10}$/.test(phone)) {
            $('#phoneError').show();
            $('#phoneNumber').addClass('is-invalid');
            isValid = false;
        }

        // Validate Email
        const email = $('#email').val().trim();
        if (email === '' || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            $('#emailError').show();
            $('#email').addClass('is-invalid');
            isValid = false;
        }

        // Validate Address
        if ($('#address').val().trim() === '') {
            $('#addressError').show();
            $('#address').addClass('is-invalid');
            isValid = false;
        }

        // Validate Pincode
        const pincode = $('#pincode').val().trim();
        if (pincode === '' || !/^\d{6}$/.test(pincode)) {
            $('#pincodeError').show();
            $('#pincode').addClass('is-invalid');
            isValid = false;
        }

        // Validate City
        if ($('#city').val().trim() === '') {
            $('#cityError').show();
            $('#city').addClass('is-invalid');
            isValid = false;
        }

        // Validate State
        if ($('#state').val().trim() === '') {
            $('#stateError').show();
            $('#state').addClass('is-invalid');
            isValid = false;
        }

        // Validate PAN Card Upload
        if (!$('#panCardName').text()) {
            alert('Please upload your PAN Card');
            isValid = false;
        }

        // Validate Terms Checkbox
        if (!$('#termsCheck').is(':checked')) {
            $('#termsError').show();
            $('#termsCheck').addClass('is-invalid');
            isValid = false;
        }

        // If form is valid, submit it
        if (isValid) {
            alert('Registration submitted successfully!');
            // In a real application, you would submit the form to the server here
            // $('#mlmRegistrationForm').unbind('submit').submit();
        }
    });

    // footer year auto update
    document.getElementById('year').textContent = new Date().getFullYear();
});

