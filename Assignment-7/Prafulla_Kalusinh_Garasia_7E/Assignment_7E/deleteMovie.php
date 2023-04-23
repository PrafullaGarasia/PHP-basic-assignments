<!DOCTYPE html>
<html>
<head>
	<title>Deleting a record from the Movies Database</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div>
<h3>Deleting records Using PHP</h3>
<h4>Programmed by Prafulla Kalusinh Garasia(0797964)</h4>
<?php
  require_once('connectvars.php');
  
$TitleIN = trim($_POST['TitleIN']);
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$TableName = 'Movies';
$query = "DELETE FROM $TableName WHERE title = '$TitleIN' ";
  
print("The query is: <b>$query</b><br /><br />");
if (mysqli_query ($dbc, $query)) 
{
    echo "The DELETE query was successfully executed!<br />";
    print ("<a href='displayMovies.php'>View Movies</a>");
} 
else 
{
    echo "The DELETE query could not be executed!" . mysqli_error($dbc);
} 
mysqli_close($dbc); 
?>
</div>
</body>
</html>



