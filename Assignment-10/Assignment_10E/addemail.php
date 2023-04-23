<!DOCTYPE html>
<html>
<head>
    <title>Travel the World Blog - Add Email</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<img src="sea.jpeg" id="sea" alt="The sea front" />
    <h1>Travel the World</h1>
<?php
    require_once('connectvars.php');
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        
        $query = "INSERT INTO email_list (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";

        mysqli_query($dbc, $query) or die('Error querying database.');
        mysqli_close($dbc);
        echo "<h3 class='success'>Your email has been added. Travel rocks!</h3>";
?>
</body>
</html>