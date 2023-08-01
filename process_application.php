<?php
require_once "database.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $applicant_name = $_POST["applicant_name"];
    $email = $_POST["email"];
    $cover_letter = $_POST["cover_letter"];
    $sql = "INSERT INTO job_applications ( applicant_name, email, cover_letter) VALUES ('$job_id', '$applicant_name', '$email', '$cover_letter')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
