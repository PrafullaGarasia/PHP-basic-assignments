<!DOCTYPE html>
<html>
    <head> 
        <title>Yatzy - High Scores</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
<body>
    <h2>Yatzy - High Scores</h2>
    <p>Welcome, Yatzy Player, do you have what it takes to crack the high score list? If so, just <a href="addscore.php">add your own score</a>.</p>
    <hr />
<?php
    require_once('connectvars.php');
    $dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    $TableName = "high_scores";
    $query = "SELECT * FROM $TableName";
    $data = mysqli_query($dbc, $query); // Execute the query

    // Loop through the array of score data, formatting it as HTML 
    echo '<table>';
    while ($row=mysqli_fetch_array($data))
    {   
    echo'<tr><td class="scoreinfo">';
    echo'<span class="score">'.$row['score'].'</span><br/>';
    echo'<strong>Name:</strong>'.$row['name'].'<br/>';
    echo'<strong>Date:</strong>'.$row['date'].'</td>';
    }
    echo '</table>';
    mysqli_close($dbc);
?>
</body>
</html>