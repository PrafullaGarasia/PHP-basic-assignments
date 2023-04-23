<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>Developer Jobs DISPLAY Table with CSS</title>
  <link type="text/css" rel="stylesheet" href="style_table.css" />
</head>
<body>
<div id="content">

<h2>Display Developer Jobs table</h2>

<div id="jobs">
	<?php
	require_once('connectvars.php');
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	$query = "SELECT * from developer_jobs";
	$result = mysqli_query ($dbc, $query) or die("Error querying database " . mysqli_error($dbc));
	// mismatch_user table
	echo "<h3>Developer Jobs Table Display</h3>";
	echo "<table>";
	echo "<tr>";
	echo "<th>Job ID</th>";
	echo "<th>Title</th>";
	echo "<th>Desc - too large</th>";	
	echo "<th>City</th>";
	echo "<th>Province</th>";
	echo "<th>Postal Code</th>";
	echo "<th>Company</th>";
	echo "<th>Date Posted</th>";	
	echo "</tr>";

	// Fetch the results from the database.
	while ($Row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		echo "<tr>";
		echo "<td>$Row[job_id]</td>";
		echo "<td>$Row[title]</td>";
		echo "<td>Long Desc here!</td>";
		echo "<td>$Row[city]</td>";
		echo "<td>$Row[province]</td>";
		echo "<td>$Row[postal_code]</td>";
		echo "<td>$Row[company]</td>";
		echo "<td>$Row[date_posted]</td>";
		echo "</tr>";
	}
	echo "</table>";

echo "</div>";

mysqli_close ($dbc);
?>
<div id="footer">
	<p>End of TABLES</p>
</div>

</div>
</body>
</html>
