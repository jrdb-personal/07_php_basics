<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Functions with Multiple returns</h2>
	<?php

		function returnWithConstructs(){
		}

		function returnUsingArray($grade){
				if ($grade >= 60 && $grade <= 69) {
					return ["Failed", "35px", "Red", "Tahoma"];
				}
				else if($grade >= 70 && $grade <= 79){
					return ["Passed", "35px","Green", "Harrington"];
				}
				else if ($grade >= 80 && $grade <= 89){
					return ["Exceeds Expectations", "35px", "Blue", "Comic Sans"];
				}
				else {
					return ["Outstanding", "35px","Yellow", "Courier New"];
				}
		}
		$values = returnUsingArray(89);
		echo "<p style=\"color:
		{$values[2]}; font-size:
		{$values[1]}; font-family:'
		{$values[3]}';\">
		{$values[0]}</p>";



		function returnUsingList($p1, $p2) {
		    return array($p1+$p2, $p1-$p2, $p1*$p2, $p1/$p2);
		}
		list($sum, $difference, $product, $quotient) = returnUsingList(5, 5);
		echo $sum."<br>";
		echo $difference."<br>";
		echo $product."<br>";
		echo $quotient."<br>";
	?>

</body>
</html>