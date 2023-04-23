<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>Create Developer Jobs TABLE</title>
    <link type="text/css" rel="stylesheet" href="style_table.css" />
</head>
<body>
<?php
// Set the variables for the database access:
  require_once('connectvars.php');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$tableName = "developer_jobs";

// enter your create the developer_jobs table query here!!!
$query = "CREATE TABLE developer_jobs 
(
  job_id INT AUTO_INCREMENT,
  title VARCHAR(200),
  description MEDIUMTEXT,
  city VARCHAR(100),
  province VARCHAR(100),
  postal_code VARCHAR(7),
  company VARCHAR(30),
  date_posted TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (job_id)
  )";
 
 
 
if (mysqli_query ($dbc, $query)) 
{
    echo "<h3 class='success'>The query, CREATE TABLE $tableName, was successfully executed!</h3>";
} else 
{
 	echo "The query, CREATE TABLE $tableName, could not be executed! " . mysqli_error($dbc);
} 
mysqli_close($dbc);
?>
</body>
</html>