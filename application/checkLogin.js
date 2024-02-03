document.addEventListener("DOMContentLoaded", function () {
    var welcomeMessage = document.getElementById("welcomeMessage");
    if (welcomeMessage) {
        var logoutButton = document.getElementById("logoutButton");
        if (logoutButton) {
            logoutButton.style.display = "inline-block";
        }
    }
});

function logout() {
    window.location.href = "logout.php";
}
