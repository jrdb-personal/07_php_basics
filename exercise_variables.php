<html>
<head>
	<title>PHP Day 1 - Variables</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Variable</h2>
	<?php
		$txt = "Hello world!";
		echo "Display datatype of $txt: ".gettype($txt).'<br>';
		
		$x = 5; $z = 'c'; 
		echo "Value of x: ".$x.'<br>';
		echo "Display datatype of $x: ".gettype($x).'<br>';
		echo "Value of x: ".$x.'<br>';
		$x = '5';
		echo "Display datatype of $x: ".gettype($x).'<br>';
		
		$y = 10.5;
		$bool = true;
		echo "Display datatype of $y: ".gettype($y).'<br>';
		echo "Display datatype of $bool: ".gettype($bool).'<br>';
	
		$concat = $x.$y;
		echo "Value of $concat".'<br>';
		echo "Display datatype of $concat".gettype($concat);
		$TXT = "Hi World";
		
	?>

</body>
</html>