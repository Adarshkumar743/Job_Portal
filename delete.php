<?php
require_once "database.php";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM job_applications WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    header("Location: index.php");
    exit;
}
?>
