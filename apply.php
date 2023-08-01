<!DOCTYPE html>
<html>
<head>
    <title>Apply for Job</title>
</head>
<body>
    <h1>Apply for Job</h1>
    <form action="process_application.php" method="post">
        <label>Your Name: <input type="text" name="applicant_name" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Cover Letter: <textarea name="cover_letter" required></textarea></label><br>
        <input type="submit" value="Apply">
    </form>
    <a href="index.php">Back to Job Listings</a>
</body>
</html>
