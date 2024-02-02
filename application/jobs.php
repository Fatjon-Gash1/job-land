<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <script src="header.js" defer></script>
    
    <title>Jobs | JobLand</title>
</head>
<body>
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
    <h1 class="job-h1">Find the job you need from companies all over the world!</h1>
<div class="grid">
      <div class="item">
        <div id="job-name">job 1</div>
        <div class="job-C-img">
          <img src="images/jobs/company-logo.png" alt="img">
          <p id="job-desc">Job description</p>
        </div>
      </div>
      <div class="item">
        <div id="job-name">job 1</div>
        <div class="job-C-img">
          <img src="images/jobs/company-logo.png" alt="img">
          <p id="job-desc">Job description</p>
        </div>
      </div>
      <div class="item">
        <div id="job-name">job 1</div>
        <div class="job-C-img">
          <img src="images/jobs/company-logo.png" alt="img">
          <p id="job-desc">Job description</p>
        </div>
      </div>
      <div class="item">
        <div id="job-name">job 1</div>
        <div class="job-C-img">
          <img src="images/jobs/company-logo.png" alt="img">
          <p id="job-desc">Job description</p>
        </div>
      </div>
    </div>
</body>
</html>
<?php
  include('footer.php');
?>