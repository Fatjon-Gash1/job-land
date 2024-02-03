<?php
include('database.php');

session_start();
?>
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
  <?php
  include 'header.php';

  $sql = "SELECT job_name, company_logo, job_description FROM jobs";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo '<div class="item">';
      echo '<div id="job-name">' . $row['job_name'] . '</div>';
      echo '<div class="job-C-img">';
      echo '<img src="images/jobs/' . $row['company_logo'] . '" alt="Company Logo">';
      echo '<p id="job-desc">' . $row['job_description'] . '</p>';
      echo '</div>';
      echo '</div>';
    }
  } else {
    echo '<p>No jobs found</p>';
  }

  $conn->close();
  ?>
</body>

</html>
<?php
include 'footer.php';
?>
