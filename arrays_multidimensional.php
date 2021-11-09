	
<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Multi-dimensional Arrays</h2>
	<?php
		$names = ["John", "Joe", "Jane"];
		//$cars = array("Volvo","BMW","Toyota", "Test");
		$cars = ["A" => 'Volvo', 77=>"BMW", 88 =>"Toyota"];
		$mixed =[		
					'1' => 'Apple', 		
					'2' => 'Banana', 
					'3' => $cars, 
					4 => $names, 
					5 => 'new', 
					'6' => 'old'
				];
		echo $mixed[4][2];
	?>
</body>



