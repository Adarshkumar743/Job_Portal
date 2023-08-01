
<?php
require_once "database.php";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM job_applications WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $application = $result->fetch_assoc();
    } else {
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Job Details</title>
</head>
<body>
    <h1><?php echo $application["job_title"]; ?></h1>
    <p><?php echo $application["company"]; ?></p>
    <p><?php echo $application["description"]; ?></p>
   <a href="edit.php?id=<?php echo $application["id"]; ?>">Edit</a>
    <a href="index.php">Back to Job Applications</a>
<h1><?php echo $application["job_title"]; ?></h1>
<a href="edit.php?id=<?php echo $application["id"]; ?>">Edit</a>
<a href="delete.php?id=<?php echo $application["id"]; ?>">Delete</a>
<a href="index.php">Back to Job Applications</a>

</body>
</html>
