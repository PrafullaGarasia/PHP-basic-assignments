<!DOCTYPE html>
<html>
<head><title>Sorting Grades (sortGrades.php)</title></head>
<body style="background-color: rgb(217,255,234); color: rgb(0,134,61); ">
<h2> sortGrades.php - Programmed by Prafulla Kalusinh Garasia(0797964)</h2>
<?php // associative array i.e. $grades[Stephen]=99;$grades[Luca]=62 …

$grades = array('Stephen' => 99, 'Luca' => 62, 'Will' => 92, 'Cole' => 87, 'Nathan' => 75, 'Jack' => 15);

print("Originally, the array looks like this:<br/>");

foreach($grades as $student => $grade)
{
	print("$student: $grade<br/>");
}

arsort($grades);//using arsort()

print("<br/>After sorting the array by value using arsort, the array looks like this:<br/>");

foreach($grades as $student => $grade)
{
	print("$student: $grade<br/>");
}

ksort($grades);//using ksort()

print("<br/>After sorting the array by key using ksort(), the array looks like this:<br/>");

foreach($grades as $student => $grade)
{
	print("$student: $grade<br/>");
}
?>
</body>
</html>