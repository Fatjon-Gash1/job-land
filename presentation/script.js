document.addEventListener("DOMContentLoaded", function (event) {
    const button = document.getElementById('submit');

    const validate = (event) => {
        event.preventDefault();

        const emri = document.getElementById('username');
        const emaili = document.getElementById('email');
        const password = document.getElementById('password');

        if (emri.value === "") {
            alert("Ju lutem shtoni emrin tuaj.");
            emri.focus();
            return false;
        }

        if (emaili.value === "") {
            alert("Ju lutem shtoni emailin tuaj.");
            emaili.focus();
            return false;
        }

        if (password.value === "") {
            alert("Ju lutem shtoni Fjalkalimin tuaj.");
            password.focus();
            return false;
        }

        if (password.value.length < 8) {
            alert("Fjalkalimi duhet te kete se paku 8 karaktere");
            password.focus();
            return false;
        }

        if (!checkemail(emaili.value)) {
            alert("Ju lutem te shtoni emailin korrekt!");
            emaili.focus();
            return false;
        }

        return registerAndRedirect();
        
    }

    const checkemail = (email) => {
        const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
        return emailRegex.test(email.toLowerCase());
    }

    const registerAndRedirect = () => {
            alert("Te dhenat u regjistruan me sukses");
            window.location.href = "home.html";
    };

    button.addEventListener('click', validate);
});       