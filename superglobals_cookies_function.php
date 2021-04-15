
<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<?php
		
		function createCookie($name, $value){
			setcookie($name, $value, time() + (86400 * 30), "/");
		}
		// 86400 = 1 day

		
		$title = $_POST['title'];
		$rows = $_POST['rows'];
		$columns = $_POST['columns'];


		function createTable($cols, $rows, $title){
			echo "<table border=1>";
			echo "<th colspan = $cols>". $title. "</th>";
				for($x = $rows; $x > 0; $x--){
					echo "<tr>";
						for ($y = $cols; $y > 0; $y--){
							echo "<td>";
							
								echo "<img src = 'images/cookies.jpg' ></img>";
							echo "</td>";
						}
					echo "</tr>";
				}
			echo "</table>";
		}
 	
		createTable($columns, $rows, $title);
		createCookie('row', $_POST['rows']);
		createCookie('column', $_POST['columns']);
		createCookie('title', $_POST['title']);

		echo "Cookies are saved!";
		
	?>

</body>
</html>














