<?php
  include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <script src="header.js" defer></script>
    <script src="login_script.js" defer></script>
    
    <title>Log In | JobLand</title>
  </head>
  <body style="background-color: rgba(43, 125, 196, 0.6)">
   <?php
    include('header.php');
    ?> 
    <div class="job-nav"></div>
      <form class="rform" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label>Username</label><br>
        <input type="text" name="username" id="usernameR" /><br><br>
        <label>Password</label><br>
        <input type="password" name="password" id="passwordR" minlength="8" maxlength="12"/><br><br>
        <input class="submit_reg" type="submit" value="Login" id="submit" onclick="validate()"/><br>
        <label id="remember" for="remember"><input type="checkbox" id="remember" name="remember">Remember me
        </label><br>
        <p id="forgot">Forgot <a href="forgot.html"><span>password?</span></a></p>
      </form>
  </body>
</html>
<?php
  include('footer.php');
?>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $enteredUsername = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $enteredPassword = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "SELECT username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $enteredUsername);
    $stmt->execute();
    $stmt->bind_result($dbUsername, $dbPassword);
    $stmt->fetch();

    if ($enteredUsername == $dbUsername && password_verify($enteredPassword, $dbPassword)) {

        $_SESSION['username'] = $enteredUsername;
        header("Location: home.php");
        exit();
    } else {

        echo "Invalid username or password";
    } 
}
?>

