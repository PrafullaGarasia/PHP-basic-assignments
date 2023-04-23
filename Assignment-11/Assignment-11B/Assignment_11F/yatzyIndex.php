<!DOCTYPE html>
<html>
    <head> 
        <title>Yatzy - High Scores</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
<body>
    <h2>Yatzy - High Scores</h2>
        <p>Welcome, Yatzy Player, do you have what it takes to crack the high score list? If so, just 
        <a href="addscore.php">add your own score</a>.</p>
    <hr />
<?php
    require_once('connectvars.php');

    //Define application constants 
    require_once('appvars.php');

    //Connect to the database
    $dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    //Retrive the score data from MySQL
    $TableName = "high_scores";
    $query = "SELECT * FROM $TableName ORDER BY score DESC, date ASC";
    $data = mysqli_query($dbc, $query); // Execute the query

    // Loop through the array of score data, formatting it as HTML 
    echo '<table>';
    $i = 0;
    while ($row=mysqli_fetch_array($data))
    {   
        //Display the score data
        if ($i == 0)
        {
            echo '<tr><td colspan="2" class="topscoreheader">Top Score: ' . $row['score'] . '</td></tr>';
        }
    echo'<tr><td class="scoreinfo">';
    echo'<span class="score">'.$row['score'].'</span><br/>';
    echo'<strong>Name:</strong>'.$row['name'].'<br/>';
    echo'<strong>Date:</strong>'.$row['date'].'</td>';

    if (is_file(UPLOADPATH . $row['screenshot']) && filesize(UPLOADPATH . $row['screenshot']) > 0) 
    {
        echo '<td><img src="' . DISPLAYPATH . $row['screenshot'] . '" alt="Score image" /></td></tr>';
    }
        else 
        {
        echo '<td><img src="' . DISPLAYPATH . 'unverified.jpg' . '" alt="Unverified score" /></td></tr>';
        }
        $i++;
    }
    echo '</table>';
    mysqli_close($dbc);
?>
</body>
</html>