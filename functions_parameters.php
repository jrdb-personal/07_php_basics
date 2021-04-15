<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Functions - Required and Optional Parameters </h2>
		<?php 

			/*
			function getRemarks($grades, $weight=1, $gwa=0){
				//compute for grades
				if ($gwa > 0) $gwa = $gwa;
				else {
					$totalunits = 0;
					for ($index = 0; $index < count($grades); $index++){	
						if (count($weight) > 0){
							$gwa += $grades[$index]*$weight[$index];
							$totalunits += $weight[$index];
						}
						else {
							$gwa += $grades[$index];
							$totalunits++;
						}
						$gwa /= $totalunits;
					}					
				}
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
			echo getRemarks($grades, $weight);
			*/

			/*
			function returnMultipleValues($p1, $p2)
			{      
				$arrayvalue  = array(); 
			 	for ($index = $p1; $index < $p2; $index++){
					$arrayvalue  [$index] = $index;
					
				}

				return $arrayvalue;
			}
			*/

			function returnMultipleValues($p1, $p2) {
				return array($p1+$p2, $p1-$p2, $p1*$p2, $p1/$p2);
			}

			list($sum, $difference, $product, $quotient) = returnMultipleValues(3, 9);
			echo "Sum of 2 numbers: ".$sum."<br>";
			echo "Difference of 2 numbers: ".$difference."<br>";
		?>
	</body>
</html>