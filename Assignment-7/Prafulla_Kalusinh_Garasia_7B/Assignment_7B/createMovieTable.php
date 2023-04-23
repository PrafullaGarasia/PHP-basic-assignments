<!DOCTYPE html>
<html>
<head>
	<title>Create MOVIES Table</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<div>
<?php
// Set the variables for the database access:
require_once('connectvars.php');

//Create table inside the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); // 1. mysqli_connect() goes here!
$table_exists_query = "SELECT * FROM Movies"; // 2. The SELECT SQL Query goes here! 
if (mysqli_query ($dbc, $table_exists_query)) 
{
 	echo "Table with name Movies already exists. <br>Go to <a href='movieForm.php'>Movie Insert</a> to add movies";
} else 
	{
	$query = "CREATE TABLE IF NOT EXISTS Movies 
	(
	  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	  title TEXT,
	  productionCompany TEXT,
	  yearReleased TEXT,
	  director TEXT 
	 )";
       // 3. The SQL statent to create the table goes here!
	 
	   // define the database column names here!
	 

  
	if (mysqli_query ($dbc, $query))
		{
		echo "The query was successfully executed! You created the Movies Table <br />Go to <a href='movieForm.php'>Movie Insert</a> to add movies";
		} 
		else 
		{
		echo "The query could not be executed! Error: " . mysqli_error($dbc);
		}
	}	
mysqli_close($dbc);
?>
	</div>
</body>
</html>