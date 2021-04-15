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
			
			
			$result = ($result - 2)/(3*4);
			echo $result."<br>";
		

			echo ++$result."<br>";
			$result = $result*3;
			echo $result."<br>";
			
			
			echo "<hr><br>";
			$x = 9;
			$y = 3;
			
			$x = $y;
			echo $x."<br>";
			echo $y."<br>";

			$x += $y;
			echo $x."<br>";
			echo $y."<br>";
			
			$x -= $y;
			echo $x."<br>";
			echo $y."<br>";
			
			$y *= $x;
			echo $x."<br>";
			echo $y."<br>";

			$y /= $y;
			echo $x."<br>";
			echo $y."<br>";
			
			echo "<hr>";

			$x .= $x/$y;
			echo $x."<br>";
			echo $y."<br>";

			echo "<hr>";

			$y %= $x;
			echo $x."<br>";
			echo $y."<br>";
			
	
			echo "<hr><br>";
			$j = "10";
			$k = 10;
			
			$result = ($j==$k) && ($x > $y);
			echo $result."<br>";
			echo "<hr>";
			echo ($j==$k)."<br>";
			echo "<hr>";
			$result = ($j!=$k) || ($y!=$x);
			echo $result."<br>";
			echo ($j!=$k)."<br>";
			
	

		?>
</body>
</html>