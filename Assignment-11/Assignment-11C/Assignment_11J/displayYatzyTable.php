<!DOCTYPE html>
<html>
    <head>
        <title>Yatzy Tables</title>
        <link type="text/css" rel="stylesheet" href="style_table.css" />
    </head>
<body>
    <p><a href="yatzyIndex.php">To Index</a></p>
    <h2>Yatzy TABLE</h2>
<div id="yatzy">
<?php 
// require database connection variables
require_once('connectvars.php');

// connect to the database server
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Create a query - Retrieval all records from the table
$query="SELECT * from high_scores";

// Execute the query
$result = mysqli_query($dbc,$query) or die("Error quering database".mysqli_error($dbc));

// Create an HTML table to display the data retrieved by the query
echo "<h3>High Score Table</h3>";
echo "<table>";
  
// Display column headings
echo "<tr>";
echo "<th>ID*</th>";
echo "<th>DATE</th>";
echo "<th>NAME</th>";
echo "<th>SCORE</th>";
echo "<th>SCREENSHOT</th>";
echo "<th>Approved</th>";
echo "</tr>";

// Display the data (while loop required)
while($Row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    echo "<tr>";
    echo "<td>$Row[id]</td>";
    echo "<td>$Row[date]</td>";
    echo "<td>$Row[name]</td>";
    echo "<td>$Row[score]</td>";
    echo "<td>$Row[screenshot]</td>";
    echo "<td>$Row[approved]</td>";
    echo "</tr>";
}
echo"</table>";
echo"</div>";
mysqli_close ($dbc);
?>
    <div id="footer">
        <p>End of TABLES</p>
    </div>
</div>
</body>
</html>