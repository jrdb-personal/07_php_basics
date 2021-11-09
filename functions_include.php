<?php 


	function myFunction($x, $y){
		echo "The first value is: ".$x."<br>";
		echo "The second value is: ".$y."<br>";
		echo "The sum of the 2 values is: ". computeSum($x,$y)."<br>";
		echo "test end of function <br>";
	}

	function computeSum($x, $y){
		return $x+$y;
	}

?>