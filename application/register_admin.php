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

  <title>Admin Registration | JobLand</title>
</head>

<body style="background-color: #ff4a4a">
  <div class="rform-div">
    <form class="rform" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
      <div class="register-header">
        <h2>Register as a <br>new Admin</h2>
      </div>
      <input type="text" placeholder="Username" name="username" id="usernameR"><br><br>
      <input type="password" placeholder="Password" name="password" id="passwordR" minlength="8" maxlength="12" /><br><br>
      <input style="margin-top: 1em;" class="submit_reg" type="submit" name="submit" value="Agree & Register" id="submit">

      <?php

      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($username) || empty($password)) {
          echo "<p class='error'>Please fill in all the required fields!</p>";
          echo "<script>
       let userbox = document.getElementById('usernameR');
       let passbox = document.getElementById('passwordR');
       
       userbox.placeholder = 'Username is required!';
       userbox.style.backgroundColor = '#f25252';

       userbox.addEventListener('input', function() {
        userbox.style.backgroundColor = '#ffffff';
       });

       passbox.placeholder = 'Password is required!';
       passbox.style.backgroundColor = '#f25252';

       passbox.addEventListener('input', function() {
        passbox.style.backgroundColor = '#ffffff';
       });
       </script>";
        } else {
          $hashed_password = password_hash($password, PASSWORD_DEFAULT);
          $sql = "INSERT INTO admins (username, password) 
                VALUES ('$username', '$hashed_password')";

          try {
            mysqli_query($conn, $sql);

            session_start();
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
          } catch (mysqli_sql_exception) {
            echo "<p class='error'>That Admin username is already taken!</p>";
          }
        }
      }
      mysqli_close($conn);
      ?>

      <p>By clicking Agree & Register, <br> you agree to the JobLand <span>User Agreement</span>, <span>Privacy Policy</span>, <br> and <span>Cookie Policy</span>.</p>

      <p>Existing account? <a href="admin_login.php"><span id="rp-login">Login</span></a></p>
    </form>
  </div>
</body>

<?php
include('footer.php');
?>

</html>