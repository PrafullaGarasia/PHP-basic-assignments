<!DOCTYPE html>
<html>
    <head>
        <title>Travel the World - Remove Email</title> <link rel="stylesheet" type="text/css" href="style.css" /> 
    </head>
<body>
    <img src="sea.jpeg" id="sea" alt="The sea front" />
    <h1>Travel the World</h1>
<?php
// Set the variables for the database access
    require_once('connectvars.php');

    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $email = $_POST['email'];
    $query = "DELETE FROM email_list WHERE email = '$email'";

    mysqli_query($dbc, $query) or die('Error querying database. ' . mysqli_error($dbc));
    echo 'Customer removed: ' . $email;
    mysqli_close($dbc);
?>
</body>
</html>