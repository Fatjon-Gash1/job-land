<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <script src="header.js" defer></script>

  <title>Contact us | JobLand</title>
</head>

<body>
  <?php
  include 'header.php';
  ?>
  <div class="job-nav"></div>
  <h1 id="contact-h1">Contact Us</h1>
  <p id="contact-p">Are you ready to take the next step in your career or find the perfect candidate for your company?<br>
    Our dedicated team at [Your Company Name] is here to assist you. <br>
    Whether you're a job seeker looking for exciting opportunities or an employer seeking top-tier talent,
    we're committed to providing exceptional service.</p>
  <form class="contact-form" action="submit_form.php" method="post">
    <label class="nameCT" for="name">Name:</label><br>
    <input class="inputCT" type="text" id="name" name="name" required><br>

    <label class="emailCT" for="email">Email:</label><br>
    <input class="inputEM" type="email" id="email" name="email" required><br>

    <label class="messageCT" for="message">Message:</label><br>
    <textarea class="inputMS" id="message" name="message" rows="4" required></textarea><br>

    <button id="btnCT" type="submit">Send message</button><br>
  </form>
  <h2 id="office-h2">Office Hours:</h2>
  <p id="endingC-p">Monday to Friday: 9:00 AM - 5:00 PM<br>
  Our team of experts is eager to address any inquiries, assist with job postings, or guide you through our platform. <br>
    At [Your Company Name], we believe in connecting people with meaningful opportunities,<br>
    and we look forward to being part of your journey.
  </p><br>
  <p id="lastC-p"><b>Join us in shaping the future of careers! We're here to help you succeed.</b></p>
</body>

</html>
<?php
include 'footer.php';
?>