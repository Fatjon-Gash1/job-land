<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <script src="header.js" defer></script>
    
    <title>Home | JobLand</title>
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
    <section class="section-0">
        <div class="slider">
            <div><img src="images/jobs/cocacola.jpg" alt="Image 1"></div>
            <div><img src="images/jobs/8867.Microsoft_5F00_Logo_2D00_for_2D00_screen-1024x376.jpg" alt="Image 2"></div>
            <div><img src="images/jobs/nike.jpg" alt="Image 3"></div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 2000,
                dots: true,
                arrows: false
            });
        });
    </script>
    <section class="section-1">
      <form action="search_results.php" method="get">
            <input class="input-search" type="text" id="jobTitle" name="jobTitle" placeholder="Enter job title or keyword" required>

            <select class="select-search" id="jobCategory" name="jobCategory">
                <option value="" selected disabled>Select category</option>
                <option value="it">IT</option>
                <option value="finance">Finance</option>
                <option value="marketing">Marketing</option>
                <option value="engineering">Engineering</option>
                <!-- Add more categories as needed -->
            </select>

            <button type="submit">Search</button>
        </form>
      </section>
  </body>
</html>
<?php
  include('footer.php');
?>
