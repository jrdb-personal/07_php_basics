<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Include Function</h2>
		<?php
			$search = "Nissan";
			$cars = array("Volvo","BMW","Toyota", "Bentley", "Lexus", "Nissan", "Isuzu", "Subaru");
			for ($x=0; $x < count($cars); $x++){
				echo $cars[$x]."<br>";
				if ($cars[$x] == $search){
						echo "Item Found!<br>";
						break;
				}
			}

			end($cars);
			do 
			{
				echo current($cars)."<br>";
				if (current($cars) == $search){
						echo "Item Found!<br>";
						break;
				}
				prev($cars);
			}
			while (current($cars) == $search || (key($cars) != array_key_first($cars)))
			
			
		?>
	</body>
</html>