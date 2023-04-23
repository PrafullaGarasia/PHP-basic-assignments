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

// enter your create the email_list table query here!!!
$query = "CREATE TABLE email_list  
(
id  INT  AUTO_INCREMENT,
first_name  VARCHAR(20),
last_name  VARCHAR(20),
email  VARCHAR(60),
PRIMARY KEY (id)
)";

if (mysqli_query ($dbc, $query)) 
{
    echo "<h3 class='success'>The query, CREATE TABLE email_list, was successfully executed. Table Created!<h3><br />";
} 
else 
{
 	echo "<p class='error'>The query could not be executed!" . mysqli_error($dbc)."</p>";
} 
mysqli_close($dbc);
?>
</body>
</html>