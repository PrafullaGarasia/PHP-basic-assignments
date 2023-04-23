<!DOCTYPE html>
<html>
<head>
	<title>UPDATE Book Database</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div>
<h3>UPDATING Publisher Name in the Book database</h3>
<h4>Programmed by Prafulla Kalusinh Garasia(0797964)</h4><br/>
<?php
require_once('connectvars.php');
  
$TitleIN = trim($_POST['TitleIN']);
$PublisherIN = trim($_POST['PublisherIN']);
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "UPDATE Books SET Publisher = '$PublisherIN' WHERE Title = '$TitleIN' ";
print ("The query is: <b>$query</b><br /><br />");
if (mysqli_query($dbc,$query))
{
  echo "The UPDATE query was successful.";
  print("<a href='displayBooks.php'>View Books</a>");
} 
else 
{
  echo"The UPDATE query FAILED!" . mysqli_error($dbc);
}
mysqli_close($dbc);
?> 
</div>
</body>
</html>
