<?php
include('database.php');

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

echo "Welcome, " . $_SESSION['username'];
?>

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="header.js" defer></script>
  <script src="checkLogin.js" defer></script>

  <title>Home | JobLand</title>
</head>

<body style="background-image: url('images/11.jpg')">
  <?php
  include('header.php');
  ?> 
  <div class="header-text">
    <h1 id="fhd">Start Your Career</h1>
    <h2 id="shd">By finding your dream job on JobLand</h2>
  </div>
  <section class="section-1">
    <form action="search_results.php" method="get">
      <input class="input-search" type="text" id="jobTitle" name="jobTitle" placeholder="Search for a job position" required>

      <select class="select-search" id="jobCategory" name="jobCategory">
        <option value="" selected disabled>Select category</option>
        <option value="it">IT</option>
        <option value="finance">Finance</option>
        <option value="marketing">Marketing</option>
        <option value="engineering">Engineering</option>
        <option value="sales">Sales</option>
        <option value="hr">HR</option>
        <option value="design">Design</option>
        <option value="management">Management</option>
        <option value="writing">Writing</option>
        <option value="education">Education</option>
        <option value="healthcare">Healthcare</option>
        <option value="other">Other</option>
      </select>

      <button id="search-button" type="submit">Search</button>
    </form>
  </section>
  <div class="first-section">
    <div class="sectionE">Search your desired job <i class="fa-solid fa-magnifying-glass"></i></div>
    <div class="sectionE">Apply for it <i class="fa-solid fa-pen"></i></div>
    <div class="sectionE">Start your career <i class="fa-solid fa-star"></i></div>
  </div>
  <section class="section-0">
    <h1 id="sliderHeader">Top companies that are hiring on our platform</h1>
    <div class="slider">
      <div><img src="images/jobs/cocacola.jpg" alt="Image 1"></div>
      <div><img src="images/jobs/8867.Microsoft_5F00_Logo_2D00_for_2D00_screen-1024x376.jpg" alt="Image 2"></div>
      <div><img src="images/jobs/nike.jpg" alt="Image 3"></div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false
      });
    });
  </script>
</body>

<?php
include('footer.php');
?>
</html>