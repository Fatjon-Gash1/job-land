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
  <style>
    .job-div {
      border-radius: 8px;
      margin: 10px;
      padding: 10px;
    }
  </style>
</head>

<body>
  <?php
  include('header.php');
  ?>
  <div class="job-nav">
    <?php
    $sql = "SELECT * FROM jobs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
        <div class="job-div">
          <h2><?php echo $row['title']; ?></h2>
          <p>Company: <?php echo $row['company']; ?></p>
          <p>Description: <?php echo $row['description']; ?></p>
          <p>Salary: <?php echo $row['salary']; ?></p>
          <p>Location: <?php echo $row['location']; ?></p>
          <p>Category: <?php echo $row['category']; ?></p>
        </div>
    <?php
      }
    } else {
      echo "No jobs found.";
    }

    $conn->close();
    ?>
  </div>
</body>

<?php
include 'footer.php';
?>

</html>
