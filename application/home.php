<?php
include('database.php');

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: user_login.php");
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

  <script src="https://kit.fontawesome.com/9842166a74.js" crossorigin="anonymous"></script>
  <script src="header.js" defer></script>
  <script src="checkLogin.js" defer></script>

  <title>Home | JobLand</title>
</head>

<body class="home-body">

  <div class="home_navBar"></div>

  <?php
  include('header.php');
  ?>

  <div class="header-text">
    <h1 id="fhd">Start Your Career</h1>
    <h2 id="shd">By finding your dream job on JobLand</h2>
  </div>
  <div class="section-1">
    <form class="searchForm" action="search_results.php" method="get">
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

      <button id="search-button" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
  </div>
  <div class="first-section">
    <div class="sectionE">1. Search your desired job <i class="fa-solid fa-magnifying-glass"></i></div>
    <div class="sectionE">2. Apply for it <i class="fa-solid fa-pen"></i></div>
    <div class="sectionE">3. Start your career <i class="fa-solid fa-star"></i></div>
  </div>
  <section class="section-0">
    <h1 id="sliderHeader">If you're looking to start a professional career look no more than Job Land!</h1>

    <h1>Top companies that work for us:</h1>

    <div class="slider">
      <div><img src="images/jobs/cocacola.jpg" alt="Image 1"></div>
      <div><img src="images/jobs/8867.Microsoft_5F00_Logo_2D00_for_2D00_screen-1024x376.jpg" alt="Image 2"></div>
      <div><img src="images/jobs/nike.jpg" alt="Image 3"></div>
    </div>

    <h1>What our users are saying:</h1>
    <div class="slider-text">

      <div class="slide">
        <div class="Hreview-person">
          <img src="images/person.jpg" alt="person">
          <div class="person-text">
            <p><i>"I am the owner of a growing company, and I recently had the opportunity to explore and utilize the services of Job Land. I must say, I am thoroughly impressed with the platform and the value it has brought to our hiring process."</i></p>
            <p><b>Ben Williams | CEO, TechSolutions Inc.</b></p>
          </div>
        </div>

        <div class="Hreview-person">
          <img src="images/person.jpg" alt="person">
          <div class="person-text">
            <p><i>"Job Land has streamlined our hiring process effortlessly. Posting jobs is a breeze, and the platform's simplicity is a game-changer. Highly recommend!"</i></p>
            <p><b>Alex Turner | Founder, Swift Innovations</b></p>
          </div>
        </div>
      </div>

      <div class="slide">
        <div class="Hreview-person">
          <img src="images/person.jpg" alt="person">
          <div class="person-text">
            <p><i>"Job Land made hiring a cakewalk. Simple, intuitive, and powerful. Our go-to platform for finding top talent!"</i></p>
            <p><b>Jake Morrison | Owner, Quantum Solutions</b></p>
          </div>
        </div>
      </div>

    </div>
    <button onclick="prevSlide()">Previous</button>
    <button onclick="nextSlide()">Next</button>
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


    let currentIndex = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    function showSlide(index) {
      const newPosition = -index * 50 + '%'; // 50% is the width of each slide
      document.querySelector('.slider-text').style.transform = 'translateX(' + newPosition + ')';
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % totalSlides;
      showSlide(currentIndex);
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
      showSlide(currentIndex);
    }
  </script>
</body>

<?php
include('footer.php');
?>

</html>