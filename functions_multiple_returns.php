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
					$values = ["Outstanding", "Yellow", "Courier New"];
				}

			return $values;
		}


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