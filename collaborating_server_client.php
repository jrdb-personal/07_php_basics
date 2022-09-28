<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Collaborating Server and Client</h2>

		<?php
			$text = [
				"header" => "This is the Header", 
				"body"=>"This is part of body content", 
				"header_size"=>2, 
				"body_size"=>5
			];
			//$x = 1;
			//$header = "This is a Header";
			//$body = "This is part of body content";
			echo "<h".$text["header_size"].">".$text["header"]
				."</h".$text["header_size"].">";
			echo "<h".$text["body_size"].">".$text["body"].
				"</h".$text["body_size"].">";
			/*
			$txt = "This is a test";
			$size = "25px";
			$face = "Courier New";
			$color = "blue";
			*/

			$values = [
						"txt" => "This is a test paragraph",
						"size" => "35px",
						"face" => "Tahoma",
						"color" => "green", 
						"style" => "i"
					];
			echo "<p style=\"color:{$values["color"]}; font-size:{$values["size"]}; font-family:'{$values["face"]}';\">{$values["txt"]}</p>";

		?>

</body>
</html>