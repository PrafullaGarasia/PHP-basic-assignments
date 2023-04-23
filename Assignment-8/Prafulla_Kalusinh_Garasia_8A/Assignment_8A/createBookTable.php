<!DOCTYPE html>
<html>
<head>
	<title>Create Book Table</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<div>
<?php
// Set the variables for the database access:
require_once('connectvars.php');

//Create table inside the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); // 1. mysqli_connect() goes here!
$table_exists_query = "SELECT * FROM Books"; // 2. The SELECT SQL Query goes here! 
if (mysqli_query ($dbc, $table_exists_query)) 
{
 	echo "Table with name Books already exists. <br>Go to <a href='bookForm.php'>Book Insert</a> to add book";
} else 
	{
	$query = "CREATE TABLE IF NOT EXISTS Books 
	(
	  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	  Title TEXT,
	  Author TEXT,
	  Publisher TEXT,
	  Publication DATE,
	  Category TEXT,
	  Price TEXT
	 )";
       // 3. The SQL statent to create the table goes here!
	 
	   // define the database column names here!
	 

  
	if (mysqli_query ($dbc, $query))
		{
		echo "The query was successfully executed! You created the Books Table <br />Go to <a href='bookForm.php'>Book Insert</a> to add book";
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