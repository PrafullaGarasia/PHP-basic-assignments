<!DOCTYPE html>
<html>
<head><title>HTML Books Input Form</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div>
 <h3>Enter a Book that you wish to add to the database<br />
 Programmed by Prafulla Kalusinh Garasia(0797964)</h3>
 
 <form  action="bookInsert.php" method="post">           
  <fieldset>
    <legend>Book Information</legend>
    <label for="Title">Book Title:</label>
		<input type="text" id="Title" name="Title" size="50" required><br/>
    <label for="Author">Author:</label>
		<input type="text" id="Author" name="Author" size="50" required><br/>
    <label for="Publisher">Publisher:</label>
		<input type="text" id="Publisher" name="Publisher" size="35" required><br/>
	<label for="Publication">Publication Date:</label>
		<input type="date" id="Publication" name="Publication" size="13" required><br/>
    <label for="Category">Category:</label>
		<input type="text" id="Category" name="Category" size="15" required><br/>
	<label for="Price">Price:</label>
		<input type="text" id="Price" name="Price" size="15" required><br/>
</fieldset>
     <input type="submit" name="submit" value="[+] Add Movie" />
 </form>

</div> 
</body>
</html>