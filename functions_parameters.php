<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>
	<h1>PHP with MySQL Training Course</h1>
	<h2>Functions - Required and Optional Parameters </h2>
		<?php 
			function computeGrades($grades, $weight=1){
				//compute for grades
				$totalunits = 0;
				$gwa = 0;
				for ($index = 0; $index < count($grades); $index++){
					if ($weight != 1){
						//computing grades with weight
						//[90*2+ 95*1.5 ... ]/[10];
						$gwa += ($grades[$index]*$weight[$index]);
						$totalunits += $weight[$index];
					}
					else {
						//computing grades without weight
						//[90+97+87+92]/4
						$gwa += $grades[$index];
						$totalunits++;
					}
				}
				$gwa = $gwa/$totalunits;
				echo getRemarks($gwa);
			}

			function getRemarks($gwa){
				//check $gwa remarks
				switch ($gwa) {
					case ($gwa >= 60 && $gwa < 69):
						return "$gwa Failed";
						break;
					case ($gwa >= 70 && $gwa < 79):
						return "$gwa Passed";
						break;
					case ($gwa >= 80 && $gwa < 89):
						return "$gwa Exceeds Expectations";
						break;
					default:
						return "$gwa Outstanding";
				}
			}

			$grades = array(90, 95, 92, 92, 94, 93, 91,	95);
			$weight = array(2, 1.5, 1.5, 2, 1, 1, 2, 1);
			computeGrades($grades, $weight);
			
			//using array method
			function returnMultipleValuesAsArray($p1, $p2)
			{      
				$arrayvalue  = array(); 
			 	for ($index = $p1; $index < $p2; $index++){
					$arrayvalue [$index] = $index;
					
				}
				return $arrayvalue;
			}
			
			$arr = returnMultipleValuesAsArray(1, 3);
			echo "<br>".$arr[1].$arr[2]."<br>";

			//using list method
			function returnMultipleValuesAsList($p1, $p2) {
				return array($p1+$p2, $p1-$p2, $p1*$p2, $p1/$p2);
			}

			list($sum, $difference, $product, $quotient) = returnMultipleValuesAsList(3, 9);
			echo "Sum of 2 numbers: ".$sum."<br>";
			echo "Difference of 2 numbers: ".$difference."<br>";
			echo "Product of 2 numbers: ".$product."<br>";
			echo "Quotient of 2 numbers: ".$quotient."<br>";
		?>
	</body>
</html>