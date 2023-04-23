<!DOCTYPE html>
<html>
<head>
	<title>Inserting Data into my Books Table</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div>
<?php
 $Title = trim($_POST['Title']); // Trim the incoming data.
 $Author = trim($_POST['Author']);
 $Publisher = trim($_POST['Publisher']);
 $Publication = trim($_POST['Publication']);
 $Category = trim($_POST['Category']);
 $Price = trim($_POST['Price']);
 require_once('connectvars.php');
 $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
 $query = "INSERT into Books values('0', '$Title', '$Author', '$Publisher', '$Publication', '$Category', '$Price')";
 print("The query is:<br/>$query<br/><br/>");
 if (mysqli_query ($dbc, $query))
 {
    print("The query was successfully executed!<br/>");
	print("<a href='displayBooks.php'>View Books</a>");
	  
 } 
	else 
	{
		print("The query could not be executed!<br/>" . mysqli_error($dbc));
	} 
mysqli_close ($dbc);
?>
</div>
</body>
</html>