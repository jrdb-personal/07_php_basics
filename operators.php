<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>
		<h1>PHP with MySQL Training Course</h1>
		<h2>Operators</h2>
		<?php
			echo "OPERATORS"."<br>";
			$result = 0;
			$result = 10+20;
			echo $result."<br>";
			
			$result = ($result - 2)/(3*4);// (30 - 2)/(3*4); 28/12; 2.333
			echo $result."<br>";

			echo ++$result."<br>"; //3.333
			$result = $result*3; 
			echo $result."<br>";//10
			
			echo "<hr><br>";
			$x = 9;
			$y = 3;
			
			$x = $y;
			echo $x."<br>"; //3
			echo $y."<br>"; //3

			$x += $y;
			echo $x."<br>"; //6
			echo $y."<br>"; //3
	
			$x -= $y;
			echo $x."<br>"; //3
			echo $y."<br>";	//3

			$y *= $x;
			echo $x."<br>"; //3
			echo $y."<br>"; //9

			$y /= $y;
			echo $x."<br>"; //3
			echo $y."<br>"; //1
			
			echo "<hr>";

			$x .= $x/$y;
			echo $x."<br>"; //33
			echo $y."<br>"; //1

			echo "<hr>";

			$y %= $x;
			echo $x."<br>"; //33
			echo $y."<br>"; //1
	
			echo "<hr><br>";
			$j = "10";
			$k = 10;
			
			$result = ($j==$k) && ($x > $y); //  F && T ; F
			echo ($j==$k)."<br>";
			echo "<hr>";
			echo ($x > $y)."<br>";
			echo "<hr>";
			echo $result."<br>";
			echo "<hr>";
			$result = ($j!=$k) || ($y!=$x); // T || T; T
			echo $result."<br>";
			echo ($j!=$k)."<br>";
		?>
</body>
</html>