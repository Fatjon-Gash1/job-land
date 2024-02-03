
<?php
  include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <script src="script.js" defer></script>
    
    <title>Sign Up | JobLand</title>
  </head>
  <body>
      <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label>Username</label><br>
        <input type="text" name="username" id="usernameR"><br>
        <label>Email</label><br>
        <input type="email" name="email" id="emailR"><br>
        <label>Password</label><br>
        <input type="password" name="password" id="passwordR"><br>
        <p>By clicking Agree & Register, you agree to the JobLand <span>User Agreement</span>, <span>Privacy Policy</span>, and <span>Cookie Policy</span>.</p>
        <input type="submit" name="submit" value="Agree & Register">
      </form>
  </body>
</html>
<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
      $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
      $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

      if(empty($username) || empty($email) || empty($password)) {
        echo "Please fill in all fields";
      }
      else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
        mysqli_query($conn, $sql);
        echo "You have registered successfully!";
      }
    }
    mysqli_close($conn);
    ?>
