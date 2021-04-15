<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Functions</h2>
	<?php

		function myFunction($x, $y=100){
			echo "The first value is: ".$x."<br>";
			echo "The second value is: ".$y."<br>";
			echo "The sum of the 2 values is: ". computeSum($x,$y)."<br>";
		}

		function computeSum($x, $y){
			return $x+$y;
		}

		
		myFunction(10, 50);
	?>

</body>
</html>