<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>If-ElseIf-Else Exercise</h2>

	<?php
	$average = 88;
	
	if ($average >= 95 && $average <= 100) {
		echo "Excellent";
	}

	else if($average >= 90 && $average <= 94){
		echo "Very Good";
	}

	else if ($average >= 80 && $average <= 89){
		if ($average >= 80 && $average <=85){
			echo "Good 1";
		}
		else {
			echo "Good 2";
		}
	}

	else if ($average >= 75 && $average <= 79){
		echo "Needs Improvement";
	}

	else {
		echo "Failed";
	}

	?>
</body>
</html>