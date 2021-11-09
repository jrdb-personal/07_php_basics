<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>SuperGlobals - POST(server)</h2>

	<?php
			$name = $_POST['username'];
			$password = $_POST['password'];

			echo $name."<br>";
			echo $password."<br>";
	?>
</body>
</html>