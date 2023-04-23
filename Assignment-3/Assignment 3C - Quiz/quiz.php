<?php
$username = $_POST['username'];
	
echo "<h3>$username, here are your quiz results.<br></h3>";
    $q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];

	if($q1=='' || $q2 =='' || $q3 =='' || $q4 =='' || $q5=='') 
	{
		echo '<h2>Please answer all questions.</h2>';
	}
	else 
	{
		$score = 0;
		if($q1 == "c")
        { // 3rd option is correct
		$score++;
        echo "Question#1: CORRECT Answer! The PHP Developer's Group Web site is WWW.php.net.<br>";
		}
		else
		{
		echo "Question#1: WRONG Answer! The PHP Developer's Group Web site is WWW.php.net.<br>";
		}
		if($q2 == "d") 
		{ // 4th option is correct
		$score++;
		echo "Question#2: CORRECT Answer! PHP documents use the .php extension.<br>";
		}
		else
		{
		echo "Question#2: WRONG Answer! PHP documents use the .php extension.<br>";
		}
		if($q3 == "a") 
		{ // 1st option is correct
		$score++;
		echo "Question#3: CORRECT Answer! PHP stands for PHP:Hypertext Preprocessor.<br>";
		}
		else
		{
		echo "Question#3: WRONG Answer! PHP stands for PHP:Hypertext Preprocessor.<br>";
		}
		if($q4 == "b") 
		{ // 2nd option is correct
		$score++;
		echo "Question#4: CORRECT Answer! PHP statements should be closed with a semicolon(;).<br>";
		}
		else
		{
		echo "Question#4: WRONG Answer! PHP statements should be closed with a semicolon(;).<br>";
		}
		if($q5 == "a") 
		{ // 1st option is correct
		$score++;
		echo "Question#5: CORRECT Answer! The default HTTP method is GET.<br>";
		}
		else
		{
		echo "Question#5: WRONG Answer! The default HTTP method is GET.<br>";
		}
	        
		$score = $score	/ 5 *5;	
		echo "<h3> $username,your score was $score out of 5.</h3>";
		
	}
?>