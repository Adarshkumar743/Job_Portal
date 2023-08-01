<?php
require_once "database.php";
$sql = "SELECT * FROM job_applications";
$result = $conn->query($sql);
$applications = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $applications[] = $row;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Job Applications</title>
    <style>
.button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {background-color: #555555;}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}
#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
    <h1>Job Applications</h1>
    <ul>
        <?php foreach ($applications as $application): ?>
            <li>
            <table id="customers">
            <tr>
    <th>title</th>
    <th>company</th>
    <th>description</th>
    <th>options</th>
  </tr>
  <tr>
    <td><?php echo $application["job_title"]; ?></td>
    <td><?php echo $application["company"]; ?></td>
    <td><?php echo $application["description"]; ?></td>
    <td> <a href="view.php?id=<?php echo $application["id"]; ?>">View</a>
                <a href="apply.php?id=<?php echo $application["id"]; ?>">apply</a></td>
  </tr>
        </table>                
               
            </li>
        <?php endforeach; ?>
    </ul>
    <button class="button button5"><a href="add.php">Add New Job Application</a></button>
</body>
</html>


