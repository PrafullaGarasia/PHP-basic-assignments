<!DOCTYPE html>
<html>
<head>
	<title>Display Book Records</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div>
<?php
//set the variables for the database access:
 require_once('connectvars.php');
 $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
 $query = "SELECT * from Books";
 $result = mysqli_query($dbc, $query); 
 print ("<h2>Display Book's Records</h2>");    // Title and main div
 print ("<div class='wrapper'>");
   
   // Fetch the results from the database.
while($Row = mysqli_fetch_array($result)) 
{
   print ("<article>");
   print ("<img src='book.png' alt='$Row[Title]' Title='$Row[Title]'/>");
   print ("<p>$Row[Title]</p>");
   print ("<p>Author: $Row[Author]</p>");
   print ("<p>Publisher: $Row[Publisher]</p>");
   print ("<p>Publication: $Row[Publication]</p>");
   print ("<p>Category: $Row[Category]</p>");
   print ("<p>Price: $Row[Price]</p>");
   print ("</article>");
}
print("</div>");

print("<p class='clear'></p>");

mysqli_close ($dbc);
$currentDate = date("l F j,Y");
print("<p style='padding-top: 15px;'><a href='bookForm.php'>[+]Add A Book</a></p>");
print("<p style='padding-top: 15px;'><a href='deleteBookForm.php'>[-]Delete A Book</a></p>");
print("<p style='padding-top: 15px;'><a href='updateBookForm.php'>[~]Update A Book</a></p>");
print("<br /><p style=\"text-align: center; clear:left;\"><em>Prafulla Kalusinh Garasia(0797964) &nbsp;&nbsp;Date: $currentDate </em></p>");
?>

</div>
</body>
</html>