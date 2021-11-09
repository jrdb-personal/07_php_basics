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

		$x = 5;
		echo "Value of x: ".$x.'<br>';
		echo "Display datatype of $x: ".gettype($x).'<br>';
		$x = '5';
		echo "Value of x: ".$x.'<br>';
		echo "Display datatype of $x: ".gettype($x).'<br>';
		
		$y = 10.5;
		$bool = false;
		echo "Display datatype of $y: ".gettype($y).'<br>';
		echo "Display datatype of $bool: ".gettype($bool).'<br>';
	
		$concat = $x.$y;
		echo "Value of $concat".'<br>';
		echo "Display datatype of $concat ".gettype($concat);	
	?>
</body>
</html>