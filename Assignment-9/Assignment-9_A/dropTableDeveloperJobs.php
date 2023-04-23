<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>DROP Developer Jobs TABLE</title>
    <link type="text/css" rel="stylesheet" href="style_table.css" />
</head>
<body>
<?php
// Set the variables for the database access:
  require_once('connectvars.php');
  
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query = "DROP TABLE developer_jobs";
 
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Table dropped!<br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 
mysqli_close($dbc);
?>
</body>
</html>