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

    // form-validation.js

    $(document).ready(function () {

        // Utility: Validate text input by minimum length
        function validateMinLength(selector, minLen, errorSelector) {
            const val = $(selector).val().trim();
            if (val.length >= minLen) {
                $(selector).addClass('valid').removeClass('invalid');
                $(errorSelector).hide();
                return true;
            } else {
                $(selector).addClass('invalid').removeClass('valid');
                $(errorSelector).show();
                return false;
            }
        }

        // Utility: Validate regex pattern (e.g. phone, email, pincode)
        function validatePattern(selector, pattern, errorSelector) {
            const val = $(selector).val().trim();
            if (pattern.test(val)) {
                $(selector).addClass('valid').removeClass('invalid');
                $(errorSelector).hide();
                return true;
            } else {
                $(selector).addClass('invalid').removeClass('valid');
                $(errorSelector).show();
                return false;
            }
        }

        // Utility: Validate if required field is filled
        function validateRequired(selector, errorSelector) {
            const val = $(selector).val().trim();
            if (val !== '') {
                $(selector).addClass('valid').removeClass('invalid');
                $(errorSelector).hide();
                return true;
            } else {
                $(selector).addClass('invalid').removeClass('valid');
                $(errorSelector).show();
                return false;
            }
        }

        // Full Name Validation
        $('#fullName').on('input', function () {
            validateMinLength('#fullName', 4, '#fullNameError');
        });

        // Phone Validation (10-digit)
        $('#phoneNumber').on('input', function () {
            validatePattern('#phoneNumber', /^[0-9]{10}$/, '#phoneError');
        });

        // Email Validation
        $('#email').on('input', function () {
            validatePattern('#email', /^[^@\s]+@[^@\s]+\.[^@\s]+$/, '#emailError');
        });

        // Pincode (6-digit)
        $('#pincode').on('input', function () {
            validatePattern('#pincode', /^[0-9]{6}$/, '#pincodeError');
        });

        // City, State, Address
        $('#city, #state, #address').on('input', function () {
            validateRequired(`#${this.id}`, `#${this.id}Error`);
        });

        // Group Name / Referral mutual exclusivity
        $('#groupName').on('input', function () {
            if ($(this).val().trim() !== '') {
                $('#referral').prop('disabled', true).val('').removeClass('valid invalid');
                $('#referralError').hide();
            } else {
                $('#referral').prop('disabled', false);
            }
            validateRequired('#groupName', '#groupNameError');
        });

        $('#referral').on('input', function () {
            if ($(this).val().trim() !== '') {
                $('#groupName').prop('disabled', true).val('').removeClass('valid invalid');
                $('#groupNameError').hide();
            } else {
                $('#groupName').prop('disabled', false);
            }
            validateRequired('#referral', '#referralError');
        });

        // PAN Card validation (check if file selected)
        $('#panCard').on('change', function () {
            if (this.files.length > 0) {
                $('#panCardUpload').addClass('valid').removeClass('invalid');
            } else {
                $('#panCardUpload').addClass('invalid').removeClass('valid');
            }
        });

        // Terms checkbox
        $('#termsCheck').on('change', function () {
            if ($(this).is(':checked')) {
                $('#termsError').hide();
            } else {
                $('#termsError').show();
            }
        });

        // Final form submission check
        $('#mlmRegistrationForm').on('submit', function (e) {
            let isValid = true;

            isValid &= validateMinLength('#fullName', 4, '#fullNameError');
            isValid &= validatePattern('#phoneNumber', /^[0-9]{10}$/, '#phoneError');
            isValid &= validatePattern('#email', /^[^@\s]+@[^@\s]+\.[^@\s]+$/, '#emailError');
            isValid &= validatePattern('#pincode', /^[0-9]{6}$/, '#pincodeError');
            isValid &= validateRequired('#city', '#cityError');
            isValid &= validateRequired('#state', '#stateError');
            isValid &= validateRequired('#address', '#addressError');

            // PAN card check
            if ($('#panCard')[0].files.length === 0) {
                alert("Please upload your PAN card.");
                $('#panCardUpload').addClass('invalid').removeClass('valid');
                isValid = false;
            }


            // Terms check
            if (!$('#termsCheck').is(':checked')) {
                $('#termsError').show();
                isValid = false;
            }

            // Referral or Group name must be filled
            const groupFilled = $('#groupName').val().trim() !== '';
            const referralFilled = $('#referral').val().trim() !== '';
            if (!groupFilled && !referralFilled) {
                $('#groupNameError').show();
                $('#referralError').show();
                $('#groupName, #referral').addClass('invalid');
                isValid = false;
            }

            if (!isValid) {
                e.preventDefault(); // Stop form if validation fails
            }
        });
    });



    /** ----------------------------
     *  5. For Modal Popup on Registration Success
     *  ----------------------------
     */

    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('registration') === 'success') {
        const thankYouModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
        thankYouModal.show();

        // Redirect to index.php after 3 seconds (3000 milliseconds)
        setTimeout(function () {
            window.location.href = 'index.php';
        }, 3000);
    }

    /** ----------------------------
     *  6. Auto Footer Year
     *  ----------------------------
     */
    $('#year').text(new Date().getFullYear());


});