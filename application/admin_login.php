<?php
include('database.php');

session_start();

// Initialize login attempts if not set
if (!isset($_SESSION['login_attempts_A'])) {
  $_SESSION['login_attempts_A'] = 0;
}

// Define the rate limit settings
$maxAttempts = 3; // Maximum number of attempts allowed
$lockoutTime = 30; // Lockout time in seconds after reaching the maximum attempts

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $enteredUsername = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
  $enteredPassword = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

  $sql = "SELECT username, password FROM admins WHERE username = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $enteredUsername);
  $stmt->execute();
  $stmt->bind_result($dbUsername, $dbPassword);
  $stmt->fetch();
  $checklogin = 0;

  if ($enteredUsername == $dbUsername && password_verify($enteredPassword, $dbPassword)) {

    // Clear login attempts on successful login
    $checklogin = 1;
    unset($_SESSION['login_attempts_A']);

    $_SESSION['username'] = $enteredUsername;
    header("Location: dashboard.php");
    exit();
  } else {

    // Failed login
    $checklogin = 2;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="header.js" defer></script>
  <script src="login_script.js" defer></script>

  <title>Admin Log In | JobLand</title>
</head>

<body style="background-color: #ff674d">

  <div class="rform-div">
    <form class="rform" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
      <h2 style="margin-bottom: 1em;">Administrator <br>Log in</h2>
      <input type="text" placeholder="Username" name="username" id="usernameR" /><br><br>
      <input type="password" placeholder="Password" name="password" id="passwordR" minlength="8" maxlength="12" /><br><br>

      <?php

      // Attempts left
      $attemptsLeft = $maxAttempts - $_SESSION['login_attempts_A'];

      if ($checklogin == 2 && isset($attemptsLeft) && $attemptsLeft > 0) {
        echo "<p style='color: red'>Incorrect username or password. You have " . $attemptsLeft . ($attemptsLeft == 1 ? ' try' : ' tries') . " left.</p>";
        echo "<script>
       let userbox = document.getElementById('usernameR');
       let passbox = document.getElementById('passwordR');
       
       userbox.placeholder = 'Username is required!';
       userbox.style.backgroundColor = '#f25252';

       userbox.addEventListener('input', function () {
         userbox.style.backgroundColor = '#ffffff';
       });

       passbox.placeholder = 'Password is required!';
       passbox.style.backgroundColor = '#f25252';

       passbox.addEventListener('input', function () {
         passbox.style.backgroundColor = '#ffffff';
       });

       </script>";

        // Update the login attempts and last attempt timestamp
        $_SESSION['login_attempts_A']++;
        $_SESSION['last_attempt_time'] = time();
      }
      // Check if the user has reached the maximum attempts within the lockout time
      elseif ($attemptsLeft == 0 && $_SESSION['login_attempts_A'] >= $maxAttempts) {
        echo "<p style='color: red' id='lockoutMessage'>Too many login attempts. Please try again later! <br>" .
          "<span style='color: red' id='countdown'></span></p>";

        echo "<script>
            var countdown = document.getElementById('countdown');
            var timeLeft = {$lockoutTime};

            function updateCountdown() {
                countdown.textContent = timeLeft + ' second' + (timeLeft === 1 ? '' : 's') + ' left.';
                    document.getElementById('submit').disabled = true;
                    document.getElementById('submit').style.cursor = 'not-allowed';
                    document.getElementById('submit').style.opacity = '0.5';
                if (timeLeft === 0) {
                    clearInterval(interval);
                    document.getElementById('lockoutMessage').style.display = 'none';
                    document.getElementById('submit').disabled = false;
                    document.getElementById('submit').style.cursor = 'pointer';
                    document.getElementById('submit').style.opacity = '1';
                  
                  // AJAX request to the PHP script
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'unset_attempts_A.php', true);

        xhr.send();
                }
                timeLeft--;
            }

            var interval = setInterval(updateCountdown, 1000);
          </script>";
      }
      ?>

      <input style="margin: 1em;" class="submit_reg" type="submit" value="Login" id="submit" onclick="validate()"><br>
      <label id="remember" for="remember"><input type="checkbox" id="remember" name="remember">
        <span style="margin-left: 10px; color: white;">Remember me</span>
      </label><br>
      <p id="forgot">Forgot <a href="forgot.php"><span>password?</span></a></p>
      <p>Register as a new Admin <a href="register_admin.php"><span id="rp-login">Here</span></a></p>
    </form>
  </div>
</body>

<?php
include('footer.php');
?>

</html>