<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <script src="header.js" defer></script>
    
    <title>About | JobLand</title>
    <style>
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        header {
            margin-top: 6em;
            background-color: #333;
            color: #fff;
            padding: 1em;
        }

        section {
            margin-top: 6em;
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            margin-bottom: 20px;
        }

        footer {
            text-align: center;
            padding: 1em;
            background-color: #333;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
    </style>
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


    <section>
        <h2>About Job Land</h2>
        <p>JobBoard Co. is a leading platform connecting employers with talented professionals. Our mission is to facilitate meaningful connections that empower individuals to achieve their career goals and help businesses thrive through strategic hiring.</p>

        <h2>Our Mission</h2>
        <p>Our mission is to provide high-quality solutions to our clients. We strive to innovate, create, and deliver exceptional products and services that meet and exceed customer expectations.</p>

        <h2>Meet the Team</h2>
        <p>We are a team of dedicated professionals passionate about technology and committed to delivering excellence. Our diverse skill set allows us to tackle a wide range of projects, from small-scale applications to complex systems.</p>
    </section>
</body>
</html>
<?php
  include('footer.php');
?>