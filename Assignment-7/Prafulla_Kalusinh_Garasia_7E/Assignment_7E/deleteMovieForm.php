<!DOCTYPE html>
<html>
<head>
	<title>HTML form for Movie Delete</title>
    <link rel="stylesheet"  type="text/css"  href="style.css" />
</head>
<body>
<div>
<h2>Movie DELETE form - programmed by Prafulla Kalusinh Garasia(0797964)</h2>
<?php
require_once('connectvars.php');
  
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "SELECT title from Library";
$result = mysqli_query ($dbc, $query);
$result2 = mysqli_query ($dbc, $query);
echo "<p>This are books in your database: </p>";
echo "<ul>";
while ($Row = mysqli_fetch_array($result)) 
{
	echo "<li>$Row[Title]</li>";
}
echo "</ul>";
echo "<datalist id='books'>";
while ($row = mysqli_fetch_array($result2)) 
{
	echo "<option value='$row[Title]'></option>";
}
echo "</datalist>";
?>
<form action="deleteMovie.php" method="post">
Movie Title to be deleted from database:
<input list="books" name="TitleIN" size="20" /><br />
<input type="submit" name="SUBMIT" value="Delete Record!" />
</form>
</div>
</body>
</html>
 



