<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Skip and Break on Loop</h2>
	<?php 
		$x = 0;
		while($x <= 100) {
			$numbers[$x] = $x;
			$x++;
		} 
		for ($x=0; $x <= 100; $x++){
			if($numbers[$x]%3== 0){
				continue;
			}

			if ($numbers[$x] == 50){
				break;
			}
			echo $numbers[$x]."<br>";

		}
	?>
</body>
</html>