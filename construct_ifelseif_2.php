<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Convert If-Else to Switch</h2>
	<?php


	?>

	<h2>Convert Switch to If-Else</h2>
	<?php 

		$year = 2010;
		if ((($year - 4) % 12) == 1 ){
			echo $year."<br>".(($year - 4) % 12)."<br> Rat";
		}

		else if ((($year - 4) % 12) == 2) {
			echo $year."<br>".(($year - 4) % 12)."<br> Dragon";
		}

		else if ((($year - 4) % 12) == 3) {
			echo $year."<br>".(($year - 4) % 12)."<br> Snake";
		}

		else {
			echo $year." Pig";
		}
	?>
</body>
</html>