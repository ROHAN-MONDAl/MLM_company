$(document).ready(function () {

    /** ----------------------------
     *  1. Profile Picture Upload
     *  ----------------------------
     */
    $('#profilePic').change(function (e) {
        if (e.target.files && e.target.files[0]) {
            const reader = new FileReader();

            reader.onload = function (event) {
                $('#profileImage').attr('src', event.target.result).show(); // Display the uploaded image
                $('.profile-pic-container .icon').hide(); // Hide default icon
            }

            reader.readAsDataURL(e.target.files[0]); // Convert file to data URL
        }
    });

    /** ----------------------------
     *  2. PAN Card Upload Options
     *  ----------------------------
     */
    $('#panCardUpload').click(function (e) {
        e.stopPropagation(); // Prevent bubbling to document
        $('#panUploadOptions').toggle(); // Toggle upload buttons
    });

    // Hide options when clicking outside
    $(document).click(function () {
        $('#panUploadOptions').hide();
    });

    // Trigger camera upload
    $('#panTakePhoto').click(function (e) {
        e.stopPropagation();
        $('#panCardCamera').click(); // Open camera
        $('#panUploadOptions').hide();
    });

    // Trigger file upload
    $('#panUploadFile').click(function (e) {
        e.stopPropagation();
        $('#panCard').click(); // Open file dialog
        $('#panUploadOptions').hide();
    });

    // Show file name on selection
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

    /** ----------------------------
     *  3. Detect Location (Geo + API)
     *  ----------------------------
     */
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

                    // Fetch address from coordinates using Nominatim API
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
                                $locationStatus.html('<i class="fas fa-exclamation-circle text-warning"></i> Address not found. Enter manually.');
                            }
                        },
                        error: function () {
                            $locationStatus.html('<i class="fas fa-exclamation-circle text-warning"></i> Failed to get address. Please enter manually.');
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
                        default:
                            errorMsg += 'Unknown error';
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
            $locationStatus.html('<i class="fas fa-exclamation-circle text-danger"></i> Your browser does not support location.');
        }
    });

    /** ----------------------------
     *  4. Form Validation + Success Modal
     *  ----------------------------
     */
    $('#mlmRegistrationForm').submit(function (e) {
        e.preventDefault(); // Prevent page reload

        let isValid = true;

        // Clear previous validation messages
        $('.error').hide();
        $('.form-control, .form-check-input').removeClass('is-invalid');

        // Full Name
        if ($('#fullName').val().trim() === '') {
            $('#fullNameError').show();
            $('#fullName').addClass('is-invalid');
            isValid = false;
        }

        // Phone Number (10-digit)
        const phone = $('#phoneNumber').val().trim();
        if (phone === '' || !/^\d{10}$/.test(phone)) {
            $('#phoneError').show();
            $('#phoneNumber').addClass('is-invalid');
            isValid = false;
        }

        // Email
        const email = $('#email').val().trim();
        if (email === '' || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            $('#emailError').show();
            $('#email').addClass('is-invalid');
            isValid = false;
        }

        // Address
        if ($('#address').val().trim() === '') {
            $('#addressError').show();
            $('#address').addClass('is-invalid');
            isValid = false;
        }

        // Pincode (6-digit)
        const pincode = $('#pincode').val().trim();
        if (pincode === '' || !/^\d{6}$/.test(pincode)) {
            $('#pincodeError').show();
            $('#pincode').addClass('is-invalid');
            isValid = false;
        }

        // City
        if ($('#city').val().trim() === '') {
            $('#cityError').show();
            $('#city').addClass('is-invalid');
            isValid = false;
        }

        // State
        if ($('#state').val().trim() === '') {
            $('#stateError').show();
            $('#state').addClass('is-invalid');
            isValid = false;
        }

        // PAN Upload (check text content)
        if (!$('#panCardName').text()) {
            alert('Please upload your PAN Card');
            isValid = false;
        }

        // Terms and Conditions
        if (!$('#termsCheck').is(':checked')) {
            $('#termsError').show();
            $('#termsCheck').addClass('is-invalid');
            isValid = false;
        }

        // If everything is valid, show success modal
        if (isValid) {
            $('#registrationSuccessModal').modal('show');

            // Optionally reset form
            // $('#mlmRegistrationForm')[0].reset();
            // $('.profile-pic-container .icon').show();
            // $('#profileImage').hide();
            // $('#panCardName').text('');
        }
    });

    /** ----------------------------
     *  5. Auto Footer Year
     *  ----------------------------
     */
    $('#year').text(new Date().getFullYear());

        /** ----------------------------
     *  6. Referral vs Group Name Toggle
     *  ----------------------------
     */
    function toggleReferralGroupFields() {
        const referral = $('#referral').val().trim();
        const groupName = $('#groupName').val().trim();

        if (groupName !== '') {
            $('#referral').prop('disabled', true);
        } else {
            $('#referral').prop('disabled', false);
        }

        if (referral !== '') {
            $('#groupName').prop('disabled', true);
        } else {
            $('#groupName').prop('disabled', false);
        }
    }

    // Bind events to both fields
    $('#referral').on('input', toggleReferralGroupFields);
    $('#groupName').on('input', toggleReferralGroupFields);

    // Run once on page load in case of autofill
    toggleReferralGroupFields();


});