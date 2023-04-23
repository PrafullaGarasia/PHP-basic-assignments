<!DOCTYPE html>
<html>
<head>
    <title>Travel the World - Send Email to Mailing List</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
    require_once('connectvars.php');

    $from = 'TravelTheWorldClub@travel.com';
    $subject = $_POST['subject'];
    $text = $_POST['travelEmail'];

    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $query = "SELECT * FROM email_list";
    $result = mysqli_query($dbc, $query) or die('Error querying database.');
    
    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        $to = $row['email'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $msg = "Dear $first_name $last_name,\n$text";
    // DO NOT SEND EMAIL unless valid emails are used,
    // otherwise, the script may hang during execution
    // thus, comment out the following mail() function.
    // mail($to, $subject, $msg, 'From:' . $from);

    echo '<h2>Email sent to: ' . $to . '</h2><br />';
    }
    mysqli_close($dbc);
    $currentDate = date("l F j, Y");
    echo ("<br /><p style='text-align: center'><em>Prafulla Kalusinh Garasia(0797964) &nbsp;&nbsp;Date: $currentDate </em></p>");
?>
</body>
</html>