$(document).ready(function () {
    const $form = $('#productForm'); // Cache the form selector
    const $fields = $form.find('input, textarea'); // Cache all input and textarea fields inside the form

    // Attach input and change event listeners to validate fields in real-time
    $fields.on('input change', function () {
        validateField(this);
    });

    // Form submission handler
    $form.on('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        let isValid = true;

        // Validate all fields on form submission
        $fields.each(function () {
            if (!validateField(this)) {
                isValid = false;
            }
        });

        // If form is valid, proceed (you can submit via AJAX or show success here)
        if (isValid) {
            // Example: console.log("Form is valid and ready for submission.");
        }
    });

    /**
     * Validates a single input or textarea field based on its ID.
     * @param {HTMLElement} field - The field to validate.
     * @returns {boolean} - Returns true if the field is valid, false otherwise.
     */
    function validateField(field) {
        const $field = $(field);
        const id = $field.attr('id');
        const val = $field.val().trim();
        let valid = true;

        switch (id) {
            case 'productImage':
                // Ensure at least one file is selected
                valid = field.files && field.files.length > 0;
                break;
            case 'categoryName':
                // Must be between 3 and 30 characters
                valid = val.length >= 3 && val.length <= 30;
                break;
            case 'productName':
                // Must be between 3 and 50 characters
                valid = val.length >= 3 && val.length <= 50;
                break;
            case 'shortDesc':
                // Must be between 10 and 200 characters
                valid = val.length >= 10 && val.length <= 200;
                break;
            case 'amount':
                // Must be a number greater than 0
                valid = !isNaN(val) && parseFloat(val) > 0;
                break;
        }

        // Apply Bootstrap validation styles
        $field.toggleClass('is-valid', valid);
        $field.toggleClass('is-invalid', !valid);

        return valid;
    }
});
