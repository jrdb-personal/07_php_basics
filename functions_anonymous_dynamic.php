<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Functions - Anonymous and Dynamic</h2>

		<?php



			/***************************/
			
			//normal function
			function fontStyle($text, $size, $face="Arial", $color = "blue") {
				echo "<p style=\"color:{$color}; font-size:{$size}; font-family:'{$face}';\">{$text}</p>";
			}


			//normal function call
			fontStyle("A heading<br>",5,"Courier New");
		
			/***************************/

			//anonymous function
			$af = function($text, $size, $face="Arial", $color = "blue"){
				echo "<p style=\"color:{$color}; font-size:{$size}; font-family:'{$face}';\">{$text}</p>";
			};

			//anonymous function call
			$af("A heading<br>",5,"Tahoma", "Orange");

			/***************************/
			
			//dynamic function
			$dfn = "fontStyle";

			//dynamic function call
			$dfn("A heading<br>",5,"Times New Roman", "red");
			
			/***************************/

		?>
	</body>
</html>