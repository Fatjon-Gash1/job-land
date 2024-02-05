<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit();
}

include("database.php");

$enteredUsername = $_SESSION['username'];
$sql = "SELECT COUNT(*) FROM admins WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $enteredUsername);
$stmt->execute();
$stmt->bind_result($isAdmin);
$stmt->fetch();

if ($isAdmin == 0) {
    header("Location: admin.php");
    exit();
}

$stmt->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $jobTitle = $_POST['post-name'];
    $jobCompany = $_POST['post-company'];
    $jobDescription = $_POST['post-desc'];
    $jobSalary = $_POST['post-salary'];
    $jobLocation = $_POST['post-location'];
    $jobCategory = $_POST['post-category'];


    $insertSql = "INSERT INTO jobs (title, company, description, salary, location, category) 
                  VALUES (?, ?, ?, ?, ?, ?)";
    $insertStmt = $conn->prepare($insertSql);
    $insertStmt->bind_param("ssssss", $jobTitle, $jobCompany, $jobDescription, $jobSalary, $jobLocation, $jobCategory);

    if ($insertStmt->execute()) {
        echo "Job posted successfully!";
    } else {
        echo "Error posting job: " . $conn->error;
    }

    $insertStmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>Admin | Dashboard</title>
</head>

<body>
    <?php include("header.php"); ?>

    <div class="job-nav"></div>

    <div class="dashboard-a">
        <div class="dbhead">
            <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        </div>
        <div class="dbpara">
            <p>This is the admin dashboard.</p>
        </div>
    </div>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="dashboard-post">
        <h2 style="margin-bottom: 1em;">Post a new job</h2>
        <label for="post-name">Job Title: </label>
        <input type="text" name="post-name" id="post-name">
        <br>
        <label for="post-company">Job Company: </label>
        <input type="text" name="post-company" id="post-company">
        <label for="post-desc">Job Description: </label>
        <input type="text" name="post-desc" id="post-desc">
        <br>
        <label for="post-salary">Salary: </label>
        <input type="text" name="post-salary" id="post-salary">
        <br>
        <label for="post-location">Location: </label>
        <input type="text" name="post-location" id="post-location">
        <br>
        <label for="post-category">Category: </label>
        <input type="text" name="post-category" id="post-category">
        <br>
        <button type="submit" class="post-btn" id="post-button">Post</button>
        <br>
    </form>

</body>
<?php include("footer.php"); ?>

</html>
