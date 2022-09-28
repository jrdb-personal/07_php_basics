<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>SuperGlobals - Validating Request Data</h2>
	<?php 
		session_start();
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			$errorMessage = array();
			function checkIfSetOrNull($value){
				if (isset($value) && !empty($value)) return true;
			}
			function checkIfValidEmail($value){
				if (strpos($value, '@')) return true;
			}
			function checkIfAlphaNumeric($value){
				if (strlen($value) > 6) return true;
			}
			function checkIfValidDate($value){
				if (isset($value) && !empty($value)) return true;
			}
			if(checkIfSetOrNull($_POST['name'])){
				if(checkIfSetOrNull($_POST['email']) && checkIfValidEmail($_POST['email'])){
					if(checkIfSetOrNull($_POST['password']) && checkIfAlphaNumeric($_POST['password'])){
						if(checkIfSetOrNull($_POST['birthdate']) && checkIfValidDate($_POST['birthdate'])){
							if(checkIfSetOrNull($_POST['gender'])){
								$_SESSION["name"] = $_POST['name']."<br>";
								$_SESSION["email"] = $_POST['email']."<br>";
								$_SESSION["password"] = $_POST['password']."<br>";
								$_SESSION["birthdate"] = $_POST['birthdate']."<br>";
								$_SESSION["gender"] = $_POST['gender']."<br>";
								header("Location: exercise_superglobals_home.php");
								/*echo $_POST['name']."<br>";
								echo $_POST['email']."<br>";
								echo $_POST['password']."<br>";
								echo $_POST['birthdate']."<br>";
								echo $_POST['gender']."<br>";*/
							}
							else {
								array_push($errorMessage, "Please provide valid value for Gender.");}
						}
						else {
							array_push($errorMessage, "Please provide valid value for Birthdate.");}
					}
					else {
						array_push($errorMessage, "Please provide valid value for Password.");}
				}
				else {
					array_push($errorMessage, "Please provide valid value for Email.");
				}
			}
			else {
				array_push($errorMessage, "Please provide valid value for Name.");
			}		
			?>
		<form method="POST" 
			  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" 
		      enctype="multipart/form-data">
			<h1>Please fill up the form</h1>
			<h4 style="font-weight:bold; color:red;">
			<?php 
				foreach($errorMessage as $error){
					echo $error."<br>";
				}
			?>
			</h4><br>
			Name: <input type="text" name="name"><br><br>
			E-mail: <input type="text" name="email"><br><br>
			Password: <input type="password" name="password"><br><br>
			Birthdate: <input type=text name="birthdate"><br><br>
			Gender: 
			<div>
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="male">Male
			</div>
			<br><br>
			<input type="submit" value="Register">
		</form>
	<?php 
		}
		else {
	?>
		<form method="POST" 
			  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" 
			  enctype="multipart/form-data">
			Please fill up the form <br>
			Name: <input type="text" name="name"><br><br>
			E-mail: <input type="text" name="email"><br><br>
			Password: <input type="password" name="password"><br><br>
			Birthdate: <input type=text name="birthdate"><br><br>
			Gender: 
			<div>
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="male">Male
			<div>
			<br><br>
			<input type="submit" value="Register">
		</form>
	<?php
		}
	?>
</body>
</html>