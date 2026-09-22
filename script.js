document.addEventListener('DOMContentLoaded', function () {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        const emailInput = document.getElementById('email');
        const emailError = document.getElementById('emailError');
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();
            let isFormValid = true;

            const requiredInputs = contactForm.querySelectorAll('input[required], textarea[required]');
            requiredInputs.forEach(input => {
                if (!input.value.trim()) {
                    input.style.borderColor = 'var(--error-color)';
                    isFormValid = false;
                } else {
                    input.style.borderColor = 'var(--border-color)';
                }
            });

            if (!emailPattern.test(emailInput.value.trim())) {
                emailError.style.display = 'block';
                emailInput.style.borderColor = 'var(--error-color)';
                isFormValid = false;
            } else {
                emailError.style.display = 'none';
            }

            if (isFormValid) {
                alert('Hvala vam na upitu! Poruka je uspješno poslana.');
                contactForm.reset();
            }
        });
    }

    const newsletterForms = document.querySelectorAll('.newsletter-form');
    newsletterForms.forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Uspješno ste se prijavili na naš newsletter!');
            form.reset();
        });
    });
});