<!DOCTYPE html>
<html>
<head><title>Perimeter Calculation</title></head>
<body>
<h1>Perimeter Calculation - by Prafulla Kalusinh Garasia(0797964)</h1>

<?php
if (isset($_POST['submit'])) //for self-reference
{

$name = $_POST['name'];
	$rlength = $_POST['length'];
	$rwidth = $_POST['width'];

	function getPerimeter($length,$width)// function definition
	{
		$perimeter = 2*($length + $width);// calculate perimeter of rectangle
		return"The perimeter of a rectangle of length $length units and width $width units is: $perimeter units";
	}
	 
	echo "Hi $name,<br>";
	echo getPerimeter($rlength,$rwidth);

	echo "<br><hr>";
	echo"The current date is ".date('l F jS, Y');
} 
else 
{
?>
    <form action="perimeter.php" method="post">
        Enter your Name:
        <input type="text" size="15" id="name" name="name"/><br/>
        Enter a Length:
        <input type="text" size="15" id="length" name="length"/><br/>
        Enter a Width:
        <input type="text" size="15" id="width" name="width"/><br/>
        <input type="submit" name="submit" value="Submit"/>
    </form>
	<?php
}
?>
</body>
</html>