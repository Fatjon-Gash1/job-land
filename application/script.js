document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('.rform');
    const usernameInput = document.getElementById('usernameR');
    const emailInput = document.getElementById('emailR');
    const passwordInput = document.getElementById('passwordR');

    form.addEventListener('submit', function (event) {
        if (!validateForm()) {
            event.preventDefault();
        }
    });

    const validateForm = () => {
        let isValid = true;

        resetValidation();

        if (usernameInput.value.trim() === '') {
            isValid = false;
            showValidationMessage(usernameInput, 'Please fill in the username field.');
        }

        if (emailInput.value.trim() === '') {
            isValid = false;
            showValidationMessage(emailInput, 'Please fill in the email field.');
        } else if (!isValidEmail(emailInput.value.trim())) {
            isValid = false;
            showValidationMessage(emailInput, 'Please enter a valid email address.');
        }

        if (passwordInput.value.trim() === '') {
            isValid = false;
            showValidationMessage(passwordInput, 'Please fill in the password field.');
        } else if (passwordInput.value.length < 8 || passwordInput.value.length > 12) {
            isValid = false;
            showValidationMessage(passwordInput, 'Password must be between 8 and 12 characters.');
        }

        return isValid;
    };

    const isValidEmail = (email) => {
        const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
        return emailRegex.test(email.toLowerCase());
    };

    const showValidationMessage = (inputElement, message) => {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'validation-error';
        errorDiv.textContent = message;

        inputElement.parentElement.appendChild(errorDiv);
    };

    const resetValidation = () => {
        const errorMessages = document.querySelectorAll('.validation-error');
        errorMessages.forEach(message => message.remove());
    };
});
