<!DOCTYPE html>
<html>
    <head>
        <title>Yatzy - Add Your High Score</title> 
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
<body>
    <h2>Yatzy - Add Your High Score</h2>
<?php
// This is a self-referencing page
require_once('connectvars.php');
$TableName = "high_scores";

// Grab the score data from the POST
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $score=$_POST['score'];
    $screenshot="";
    
if (!empty($name) && !empty($score)) 
{
// Connect to the database
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query="INSERT INTO $TableName VALUES(0,NOW(),'$name','$score','$screenshot')";

mysqli_query($dbc, $query);

// Confirm success with the user
echo '<p>Thanks for adding your new high score!</p>';
echo '<p><strong>Name:</strong> ' . $name . '<br />';
echo '<strong>Score:</strong> ' . $score . '<br />';
echo '<p><a href="yatzyIndex.php">&lt;&lt;Back to high scores</a></p>';

// Clear the score data to clear the form
$name="";
$score="";
$screenshot="";

mysqli_close($dbc);
}
else 
{
echo '<p class="error">Please enter all of the information to add your high score.</p>';
}
}
?>
<hr />
<form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php if (!empty($name)) echo $name; ?>" /><br />
    <label for="score">Score:</label>
    <input type="text" id="score" name="score" value="<?php if (!empty($score)) echo $score; ?>" /><br />
    <hr />
    <input type="submit" value="Add" name="submit" />
</form>
</body>
</html>