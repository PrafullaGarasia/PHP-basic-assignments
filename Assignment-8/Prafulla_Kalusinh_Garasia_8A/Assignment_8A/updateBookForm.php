<!DOCTYPE html>
<html>
<head>
	<title>HTML form for Book UPDATE</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div>
<h3>Enter the Book Publisher's Name for the Book that you wish to UPDATE in the database<br />
Programmed by Prafulla Kalusinh Garasia(0797964)</h3>


<?php
require_once('connectvars.php');
 $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
 $query = "SELECT Title from Books";
 $result = mysqli_query ($dbc, $query);
   echo "<datalist id='books'>";
   while ($row = mysqli_fetch_array($result)) 
   {
      echo "<option value='$row[Title]'></option>";
   }
   echo "</datalist>";
?>
<form action="updateBook.php" method="post">
    <fieldset>
        <legend>Update Publisher Name</legend>
        <label for="Title">Book Title (existing):</label>
        <input list="books" id="Title" name="TitleIN" size="20"/><br/>
  
        <label for="Publisher">New Publisher Name:</label>
        <input type="text" id="Publisher" name="PublisherIN" size="14"/><br/><br/>
    </fieldset>
    <input type="submit" name="SUBMIT" value="Submit Information!"/>
</form>
</div>
</body>
</html>
