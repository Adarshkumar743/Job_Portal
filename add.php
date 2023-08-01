<?php
require_once "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_title = $_POST["job_title"];
    $company = $_POST["company"];
    $description = $_POST["description"];

    // Perform data validation here (e.g., check for empty fields)

    // Insert job application into the database
    $sql = "INSERT INTO job_applications (job_title, company, description) VALUES ('$job_title', '$company', '$description')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Add New Job Application</title>
    <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
    <h1>Add New Job Application</h1>
    <form action="add.php" method="post">
        <label>Job Title: <input type="text" name="job_title" required></label><br>
        <label>Company: <input type="text" name="company" required></label><br>
        <label>Description: <textarea name="description" required></textarea></label><br>
        <input type="submit" value="Add">
    </form>
    <a href="index.php">Back to Job Applications</a>
</body>
</html>
