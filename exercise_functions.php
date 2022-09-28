<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Functions - Challenge </h2>
		<?php 
			function getRemarks($grade){
				$values = [];
				if ($grade >= 60 && $grade < 69) {
					$values = ["Failed", "Red", "Tahoma"];
				}
				else if($grade >= 70 && $grade < 79){
					$values = ["Passed", "Green", "Harrington"];
				}
				else if ($grade >= 80 && $grade < 89){
					$values = ["Exceeds Expectations", "Blue", "Comic Sans"];
				}
				else {
					$values = ["Outstanding", "Orange", "Courier New"];
				}
				return $values;
			}
			function display($grade, $remarks, $color, $fontfamily = "Tahoma"){
				print "<u><b><font face=\"$fontfamily\" color=\"$color\">$grade - $remarks</font></b></u><br>";
			};
			
			for($x=0; $x<10; $x++){
				//generate grade
				$grade = rand(60,100);
				//get remarks description
				$values = getRemarks($grade);
				$remarks = $values[0];
				$color = $values[1];
				$fontfamily = $values[2];
				//display grade-remarks
				display($grade, $remarks, $color, $fontfamily);
			}

		?>
	</body>
</html>