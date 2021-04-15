<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Superglobals - Server </h2>

	<?php 
		echo $_SERVER['PHP_SELF'];
		echo "<br>";
		echo $_SERVER['SERVER_NAME'];
		echo "<br>";
		echo $_SERVER['HTTP_HOST'];
		echo "<br>";
		echo $_SERVER['HTTP_REFERER'];
		echo "<br>";
		echo $_SERVER['HTTP_USER_AGENT'];
		echo "<br>";
		echo $_SERVER['SCRIPT_NAME'];
		echo "<br>";
		echo $_SERVER['GATEWAY_INTERFACE'];
		echo "<br>";
		echo $_SERVER['SERVER_ADDR'];
		echo "<br>";
		echo $_SERVER['REQUEST_TIME'];
		echo "<br>";
		//echo $_ENV['HOSTNAME'];
	?>

</body>
</html>