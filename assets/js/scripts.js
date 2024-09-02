document.addEventListener('DOMContentLoaded', function() {
    console.log('Document is ready!');

    // Privacy Policy Modal
    const privacyPolicyLink = document.getElementById('privacy-policy-link');
    const privacyPolicyModal = document.getElementById('privacy-policy-modal');
    const closePrivacy = document.getElementById('close-privacy');
    
    privacyPolicyLink.addEventListener('click', function() {
        console.log('Privacy Policy link clicked');
        privacyPolicyModal.style.display = "block";
    });

    closePrivacy.addEventListener('click', function() {
        privacyPolicyModal.style.display = "none";
    });

    // Terms of Service Modal
    const termsOfServiceLink = document.getElementById('terms-of-service-link');
    const termsOfServiceModal = document.getElementById('terms-of-service-modal');
    const closeTerms = document.getElementById('close-terms');
    
    termsOfServiceLink.addEventListener('click', function() {
        console.log('Terms of Service link clicked');
        termsOfServiceModal.style.display = "block";
    });

    closeTerms.addEventListener('click', function() {
        termsOfServiceModal.style.display = "none";
    });

    // Close modal when clicking outside of the modal content
    window.addEventListener('click', function(event) {
        if (event.target === privacyPolicyModal) {
            privacyPolicyModal.style.display = "none";
        }
        if (event.target === termsOfServiceModal) {
            termsOfServiceModal.style.display = "none";
        }
    });

    // Handle form submission with AJAX
    $('#contactForm').submit(function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Clear previous messages
        $('#formMessage').html('');

        // Get form data
        var formData = {
            name: $('#name').val(),
            email: $('#email').val(),
            subject: $('#subject').val(),
            message: $('#message').val()
        };

        // Perform AJAX request
        $.ajax({
            type: 'POST',
            url: 'submit_contact_form.php',
            data: formData,
            dataType: 'json',
            encode: true
        }).done(function(response) {
            if (response.success) {
                // Clear the form
                $('#contactForm')[0].reset();

                // Display success message
                $('#formMessage').html('<div class="success">Message has been sent successfully!</div>');
            } else {
                // Display error message
                $('#formMessage').html('<div class="error">Error sending message. Please try again.</div>');
            }
        }).fail(function(data) {
            // Display error message
            $('#formMessage').html('<div class="error">Error sending message. Please try again.</div>');
        });
    });
});
