document.addEventListener('DOMContentLoaded', function () {

    // Privacy Policy Modal
    const privacyPolicyLink = document.getElementById('privacy-policy-link');
    const privacyPolicyModal = document.getElementById('privacy-policy-modal');
    const closePrivacy = document.getElementById('close-privacy');

    privacyPolicyLink.addEventListener('click', function () {
        console.log('Privacy Policy link clicked');
        privacyPolicyModal.style.display = "block";
    });

    closePrivacy.addEventListener('click', function () {
        privacyPolicyModal.style.display = "none";
    });

    // Terms of Service Modal
    const termsOfServiceLink = document.getElementById('terms-of-service-link');
    const termsOfServiceModal = document.getElementById('terms-of-service-modal');
    const closeTerms = document.getElementById('close-terms');

    termsOfServiceLink.addEventListener('click', function () {
        console.log('Terms of Service link clicked');
        termsOfServiceModal.style.display = "block";
    });

    closeTerms.addEventListener('click', function () {
        termsOfServiceModal.style.display = "none";
    });

    // Close modal when clicking outside of the modal content
    window.addEventListener('click', function (event) {
        if (event.target === privacyPolicyModal) {
            privacyPolicyModal.style.display = "none";
        }
        if (event.target === termsOfServiceModal) {
            termsOfServiceModal.style.display = "none";
        }
    });
})