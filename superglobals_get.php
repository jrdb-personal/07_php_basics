<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>SuperGlobals - GET</h2>

	<?php
			$id = $_GET['id'];
			$name = $_GET['name'];

			echo $id."<br>";
			echo $name."<br>";
	?>
</body>
</html>