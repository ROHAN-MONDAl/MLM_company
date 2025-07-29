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

   $('#getLocationBtn').click(async function () {
        $('#status').text("Getting your location...");

        if (!navigator.geolocation) {
            $('#status').text("Geolocation is not supported by your browser.");
            return;
        }

        // Promisify the geolocation API
        const getPosition = () => {
            return new Promise((resolve, reject) => {
                navigator.geolocation.getCurrentPosition(resolve, reject, {
                    enableHighAccuracy: true,
                    timeout: 15000,
                    maximumAge: 0
                });
            });
        };

        try {
            const position = await getPosition();
            const lat = position.coords.latitude;
            const lon = position.coords.longitude;

            const reverseGeocodeUrl = 'https://geocode.arcgis.com/arcgis/rest/services/World/GeocodeServer/reverseGeocode';

            const params = {
                location: `${lon},${lat}`,
                f: 'json'
            };

            $('#status').text("Fetching address from coordinates...");

            const response = await $.getJSON(reverseGeocodeUrl, params);

            if (response && response.address) {
                const addr = response.address;
                $('#address').val(addr.Match_addr || '');
                $('#city').val(addr.City || '');
                $('#state').val(addr.Region || '');
                $('#pincode').val(addr.Postal || '');
                $('#status').text("Location detected successfully!");
            } else {
                $('#status').text("Unable to extract address from response.");
            }

        } catch (error) {
            let message = "An error occurred.";
            if (error.code) {
                switch (error.code) {
                    case error.PERMISSION_DENIED:
                        message = "Location access denied by user.";
                        break;
                    case error.POSITION_UNAVAILABLE:
                        message = "Location information is unavailable.";
                        break;
                    case error.TIMEOUT:
                        message = "Location request timed out.";
                        break;
                    default:
                        message = "Unknown error occurred.";
                }
            } else if (error.responseJSON) {
                message = "Failed to fetch address from the API.";
            }

            $('#status').text("Error: " + message);
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
    if (urlParams.get('success') === 'true') {

        const membersId = urlParams.get('members_id');

        if (membersId) {
            $('#memberIdDisplay').text("Your Member ID: " + membersId);
        }

        const thankYouModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
        thankYouModal.show();

        // Redirect to clean URL after 4 seconds
        setTimeout(function () {
            window.location.href = window.location.origin + window.location.pathname;
        }, 4000);
    }

    /** ----------------------------
     *  6. Auto Footer Year
     *  ----------------------------
     */
    $('#year').text(new Date().getFullYear());


});