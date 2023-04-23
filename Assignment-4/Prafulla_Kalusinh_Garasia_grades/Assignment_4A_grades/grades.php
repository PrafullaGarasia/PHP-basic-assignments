<!DOCTYPE html>
<html>
<head><title>Grade Averaging</title></head>
<body style="background-color: rgb(255,255,204);">
<h2>Grade Averaging - by Prafulla Kalusinh Garasia(0797964)</h2>
<?php

// define array of grades ranging between 1 and 100
$grades = array(25, 64, 23, 87, 56, 38, 78, 57, 98, 95, 81, 67, 75, 76, 74, 82, 36, 39, 54, 43, 49, 65, 69, 69, 78, 17, 91);

$count = count($grades); // get number of grades (27)

// iterate over grades and calculate total and top/bottom 20%
$total = $top = $bottom = 0;

foreach ($grades as $sg) 
{
$total +=$sg;
	if($sg<=20)
	{
		$bottom++;
	}
	if($sg>=80)
	{
		$top++;
	}
}
$average=round($total/$count); //calculate average

//print statistics
echo"Class average: $average</br>";
echo"Number of students in bottom 20%: $bottom</br>";
echo"Number of students in top 20%: $top</br>";
?>
</body>
</html>
