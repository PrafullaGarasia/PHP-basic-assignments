<!DOCTYPE html>
<html>
<head><title>HTML Movies Input Form</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div>
 <h3>Enter a Movie that you wish to add to the database<br />
 Programmed by Prafulla Kalusinh Garasia(0797964)</h3>
 
 <form  action="movieInsert.php" method="post">           
  <fieldset>
    <legend>Movie Information</legend>
    <label for="title">Movie Title:</label>
		<input type="text" id="title" name="Title" size="20" required><br/>
    <label for="productionCompany">Production Company:</label>
		<input type="text" id="productionCompany" name="ProductionCompany" size="30" required><br/>
    <label for="yearReleased">Year of Release:</label>
		<input type="text" id="yearReleased" name="YearReleased" size="6" required><br/>
    <label for="director">Director:</label>
		<input type="text" id="director" name="Director" size="20" required><br/>
</fieldset>
     <input type="submit" name="submit" value="[+] Add Movie" />
 </form>

</div> 
</body>
</html>
