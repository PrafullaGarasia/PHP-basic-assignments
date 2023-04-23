<?php
echo "<h1>ABC Web Site Registration Reply Page</h1>"; 
$username = $_POST['username'];
$region = $_POST['region'];
   
if(empty($username))
{   
	echo "You did not enter a username.<br>";
	echo "Please return to the form and re-enter your information.";
}
else
{    
	echo "<h2>Your information has been processed.</h2><br>"; 
	echo "Thank you $username<br>";
	echo "You live in lovely region of: $region";
} 
?> 