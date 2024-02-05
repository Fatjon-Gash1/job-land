<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="header.js" defer></script>
  <script src="script.js" defer></script>

  <title>Sign Up | JobLand</title>
</head>

<body style="background-color: #c7dcff">

  <?php
  include('header.php');
  ?>

  <div class="job-nav"></div>

  <div class="rform-div">
    <form class="rform" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
      <div class="register-header">
        <h2>Register now</h2>
        <h3>Don't miss a opportunity!</h3>
      </div>
      <input type="text" placeholder="Username" name="username" id="usernameR"><br><br>
      <input type="email" placeholder="Email" name="email" id="emailR"><br><br>
      <input type="password" placeholder="Password" name="password" id="passwordR" minlength="8" maxlength="12" /><br><br>
      <input class="submit_reg" type="submit" name="submit" value="Agree & Register" id="submit">
      <p>By clicking Agree & Register, <br> you agree to the JobLand <span>User Agreement</span>, <span>Privacy Policy</span>, <br> and <span>Cookie Policy</span>.</p>

      <button class="social_buttons" type="button"><img src="images/google.png" alt="img"> Continue with Google</button>
      <button class="social_buttons" type="button"><img src="images/twitter.png" alt="img"> Sign in with Twitter</button>
      <button class="social_buttons" type="button"><img src="images/github.png" alt="img"> Sign in with Github</button>

      <p>Already have an account? <a href="login.php"><span id="rp-login">Login</span></a></p>
    </form>
  </div>
</body>

<?php
include('footer.php');
?>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
  $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

  if (empty($username) || empty($email) || empty($password)) {
    echo "<p class='error'>Please fill in all fields</p>";
  } else {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, email, password) 
                VALUES ('$username', '$email', '$hashed_password')";

    try {
      mysqli_query($conn, $sql);
      echo "<p class='success'>You have registered successfully!</p>";
    } catch (mysqli_sql_exception) {
      echo "<p class='error'>That username is already taken</p>";
    }
  }
}
mysqli_close($conn);
?>