document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".rform");
  const usernameInput = document.getElementById("usernameR");
  const emailInput = document.getElementById("emailR");
  const passwordInput = document.getElementById("passwordR");

  form.addEventListener("submit", function (event) {
    if (!validateForm()) {
      event.preventDefault();
    }
  });

  const validateForm = () => {
    let isValid = true;

    resetValidation();

    if (usernameInput.value.trim() === "") {
      isValid = false;

      usernameInput.placeholder = "Username is required!";
      usernameInput.style.backgroundColor = "#f25252";

      usernameInput.addEventListener("input", function () {
        usernameInput.style.backgroundColor = "#ffffff";
      });
    }

    if (emailInput.value.trim() === "") {
      isValid = false;
      emailInput.placeholder = "Email is required!";
      emailInput.style.backgroundColor = "#f25252";

      emailInput.addEventListener("input", function () {
        emailInput.style.backgroundColor = "#ffffff";
      });
    } else if (!isValidEmail(emailInput.value.trim())) {
      isValid = false;

      emailInput.placeholder = "Please enter a valid email address.";
      emailInput.style.backgroundColor = "#f25252";

      emailInput.addEventListener("input", function () {
        emailInput.style.backgroundColor = "#ffffff";
      });
    }

    if (passwordInput.value.trim() === "") {
      isValid = false;
      passwordInput.placeholder = "Password is required!";
      passwordInput.style.backgroundColor = "#f25252";

      passwordInput.addEventListener("input", function () {
        passwordInput.style.backgroundColor = "#ffffff";
      });
    } else if (
      passwordInput.value.length < 8 ||
      passwordInput.value.length > 12
    ) {
      isValid = false;

      passwordInput.placeholder =
        "Password must be between 8 and 12 characters.";
      passwordInput.style.backgroundColor = "#f25252";

      passwordInput.addEventListener("input", function () {
        passwordInput.style.backgroundColor = "#ffffff";
      });
    }

    return isValid;
  };

  const isValidEmail = (email) => {
    const emailRegex =
      /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
    return emailRegex.test(email.toLowerCase());
  };

  const resetValidation = () => {
    const errorMessages = document.querySelectorAll(".validation-error");
    errorMessages.forEach((message) => message.remove());
  };
});
