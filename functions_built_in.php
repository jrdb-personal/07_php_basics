<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Include Function</h2>
		<?php
			include("functions.php");

			myFunction(4, 6);

			$search = "Lexus";
			$cars = array("Volvo","BMW","Toyota", "Bentley", "Lexus", "Nissan", "Isuzu", "Subaru");

			
			
			for ($x=0; $x < count($cars); $x++){
				echo $cars[$x]."<br>";
				if (current($cars) == $search){
						echo "Item Found!";
						break;
				}
			}
			
			/*
			do 
			{
				echo current($cars)."<br>";
				if (current($cars) == $search){
						echo "Item Found!";
						break;
				}
				next($cars);
			}
			while (current($cars) == $search || (key($cars) != array_key_last($cars)))
			*/
			
		?>
	</body>
</html>