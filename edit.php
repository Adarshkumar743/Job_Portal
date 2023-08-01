<?php
require_once "database.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Fetch job application details from the database
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job title = $_POST["job_title"];
    $company = $_POST["company"];
    $description = $_POST["description"];

    // Perform data validation here (e.g., check for empty fields)

    // Update job application in the database
    $sql = "UPDATE job application SET job_title='$job_title', company='$company', description='$description' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: view.php?id=$id");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Job Application</title>
</head>
<body>
    <h1>Edit Job Application</h1>
    <form action="edit.php?id=<?php echo $application["id"]; ?>" method="post">
        <label>Job Title: <input type="text" name="job_title" value="<?php echo $application["job_title"]; ?>" required></label><br>
        <label>Company: <input type="text" name="company" value="<?php echo $application["company"]; ?>" required></label><br>
        <label>Description: <textarea name="description" required><?php echo $application["description"]; ?></textarea></
