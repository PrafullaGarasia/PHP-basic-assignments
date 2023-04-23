<!DOCTYPE html>
<html>
<head>
	<title>Random Quote</title>
</head>
<body>
<h1>Random John Muir Quote Page</h1>
<?php
   function getQuote($r_num) 
   {
	$quotes = array();
	$quotes[0] = "The mountains are calling and I must go!";
	$quotes[1] = "Between every two pines is a doorway to a new world!";
	$quotes[2] = "The power of imagination makes us infinite!";
	$quotes[3] = "In every walk with nature, one receives far more than he seeks!";
	$quotes[4] = "Climb a mountain or spend a week in the woods, washing your spirit clean!";
	$quotes[5] = "Of all the paths you take in life, make sure a few of them are dirt! ";
	$quotes[6] = "Into the forest I go, to lose my mind and my soul!";
	$quotes[7] = "Nothing truly wild is unclean!";
 	return $quotes[$r_num];// 1. return a random quote here!	
	}
	echo "Quote of the day!<br/><br/>";
	$randomNumber = rand(0,7);// 2. Create a random number between 0 - 7
	$randomQuote = getQuote($randomNumber);// 3. Call the getQuote function passing the random number to the function parameter,
	//    assignment the quote to a variable
	echo "<h2>$randomQuote  ~John Muir</h2>";// 4. Output the random quote
	$currentDate = date("l F j,Y");
	print("<br /><p><em>Created by : Prafulla Kalusinh Garasia(0797964) &nbsp;&nbsp;Date: $currentDate </em></p>");
?>
</body>
</html>
