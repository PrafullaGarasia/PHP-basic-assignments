<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Create Email list Table</title>
    <link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<?php
// Set the variables for the database access:
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// enter your create the high_scores table query here!!!
$query = "CREATE TABLE high_scores  
(
id INT AUTO_INCREMENT,
date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
name VARCHAR(32),
score INT,
screenshot VARCHAR(64),
approved TINYINT(1) DEFAULT 0,
PRIMARY KEY (id),
KEY name (name)
)";

if (mysqli_query ($dbc, $query)) 
{
    echo "<h3 class='success'>The query, CREATE TABLE high_scores, was successfully executed. Table Created!<h3><br />";
} 
else 
{
 	echo "<p class='error'>The query could not be executed!" . mysqli_error($dbc)."</p>";
} 
mysqli_close($dbc);
?>
</body>
</html>