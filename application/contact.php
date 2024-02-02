<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <script src="header.js" defer></script>
    
    <title>Contact us | JobLand</title>
</head>
<body>
<h1>Contact Us</h1>
<div class="nav-bar">
      <a href="home.php"><h1 class="M-logo">JL</h1></a>
      <ul class="list">
        <li><a href="home.php">Home</a></li>
        <li><a href="jobs.php">Jobs</a></li>
        <li><a href="contact.php">Contact us</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
      <div class="reg_log">
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
      </div>
    </div>
<form class="contact-form" action="submit_form.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" required></textarea><br>

    <button type="submit">Submit</button><br>
</form>
</body>
</html>
<?php
include 'footer.php';
?>