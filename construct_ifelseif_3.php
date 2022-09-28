<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>If-ElseIf-Else Exercise</h2>

	<?php
	$average = 95;
	print $average."<br>";
	
	if ($average >= 95 && $average <= 100) {
		echo "Outstanding"; //Green
	}
	else if($average >= 90 && $average <= 94){
		echo "Excellent"; //Blue
	}
	else if ($average >= 80 && $average <= 89){
		if ($average >= 80 && $average <=85){
			echo "Good"; //Black
		}
		else {
			echo "Very Good";//Yellow
		}
	}
	else if ($average >= 75 && $average <= 79){
		echo "Needs Improvement"; //Orange
	}
	else {
		echo "Failed"; //Red
	}

	?>
</body>
</html>