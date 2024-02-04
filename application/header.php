<div class="M-logo">
  <h1><a href="home.php">JL</a></h1>
</div>
<div class="nav-bar">
  <button id="button-menu" class="dropbtn"><i class="fa fa-bars"></i></button>
  
  <div class="sidebar">
  <ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="jobs.php">Jobs</a></li>
    <li><a href="contact.php">Contact us</a></li>
    <li><a href="news.php">News</a></li>
    <li><a href="about.php">About</a></li>
  </ul>
</div>

  <ul class="list">
    <li><a href="home.php">Home</a></li>
    <li><a href="jobs.php">Jobs</a></li>
    <li><a href="contact.php">Contact us</a></li>
    <li><a href="news.php">News</a></li>
    <li><a href="about.php">About</a></li>
  </ul>
</div>
<div class="reg_log">
  <li><a href="register.php">Register</a></li>
  <li><a href="login.php">Login</a></li>
  <li><button id="logoutButton" onclick="logout()">Logout</button></li>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    var openBtn = document.getElementById("button-menu");
    var sidebar = document.querySelector(".sidebar");

    openBtn.addEventListener("click", function() {
      if (window.getComputedStyle(sidebar).getPropertyValue("width") === "150px") {
        sidebar.style.width = "0";
      } else {
        sidebar.style.width = "150px";
      }
    });
  });
</script>