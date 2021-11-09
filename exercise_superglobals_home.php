<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Web Pages and Transitions - Home Page</h2>

	<?php 
		session_start();
		print "Welcome!"; 
		echo $_SESSION['name']."<br>";
		echo $_SESSION['email']."<br>";
		echo $_SESSION['password']."<br>";
		echo $_SESSION['birthdate']."<br>";
		echo $_SESSION['gender']."<br>";
	?>
	
</body>
</html>