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
    <script src="script.js" defer></script>
    
    <title>Sign Up | JobLand</title>
  </head>
  <body style="background-color: rgba(43, 125, 196, 0.6)">
   <?php
      include('header.php');
    ?> 
    <div class="job-nav"></div>
      <form class="rform" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label>Username</label><br>
        <input type="text" name="username" id="usernameR"><br><br>
        <label>Email</label><br>
        <input type="email" name="email" id="emailR"><br><br>
        <label>Password</label><br>
        <input type="password" name="password" id="passwordR" minlength="8" maxlength="12"/><br><br>
        <p>By clicking Agree & Register, you agree to the JobLand <span>User Agreement</span>, <span>Privacy Policy</span>, and <span>Cookie Policy</span>.</p>
        <input class="submit_reg" type="submit" name="submit" value="Agree & Register" id="submit">
        <label></label>
      </form>
  </body>
</html>
<?php
  include('footer.php');
?>
<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
      $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
      $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

      if(empty($username) || empty($email) || empty($password)) {
        echo "<p class='error'>Please fill in all fields</p>";
      }
      else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, email, password) 
                VALUES ('$username', '$email', '$hashed_password')";

        try{
        mysqli_query($conn, $sql);
        echo "<p class='success'>You have registered successfully!</p>";
      }
      catch(mysqli_sql_exception){
        echo "<p class='error'>That username is already taken</p>";
      }
    }
  }
    mysqli_close($conn);
    ?>
