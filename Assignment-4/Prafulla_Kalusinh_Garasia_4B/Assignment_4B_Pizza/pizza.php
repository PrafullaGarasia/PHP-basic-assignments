<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Pizza Topping Selector</title>
</head>
<body style="background-color: rgb(227,243,209);">
	<h2>Pizza Topping Selector - by Prafulla Kalusinh Garasia(0797964)</h2>   
	You selected the following toppings: <br />
	<ul>
	<?php
	foreach ($_POST['toppings'] as $t) 
	{
	echo "<li>$t</li>";  
	}
	?>
	</ul>
</body>
</html>

