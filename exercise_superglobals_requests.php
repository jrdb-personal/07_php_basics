<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Web Pages and Transitions</h2>

	<?php
		$login = false;

		if ($login){
			header("Location: exercise_superglobals_home.php");
		}

	?>


	<form method="POST" action="superglobals_post.php">
		User Name: <input type="text" name="username">
		Password: <input type="text" name="password">

		<input type="submit" value="Submit">
	</form>

</body>
</html>