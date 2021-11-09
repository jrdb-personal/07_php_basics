<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>SuperGlobals - Exercise</h2>
	<?php //session_start(); ?>
	<h3>Welcome <?php //echo $_SESSION["username"]."!" ?></h3>

	<form method="POST" action="superglobals_cookies_function.php" 
	enctype="multipart/form-data">
		Please provide details of your table
		Title:  <input type="text" name="title">
		<hr>
		Rows: <input type="text" name="rows">
		Columns: <input type="text" name="columns">
		<hr>
		<input type="submit" value="Create Table">
	</form>

</body>
</html>