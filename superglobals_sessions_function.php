
<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>
	<?php 
		session_start();

		$_SESSION["username"] = $_POST["username"];
		$_SESSION["password"] = $_POST["password"];

		header("Location: home.php");
	?>
</body>
</html>