<!DOCTYPE html>
<html>
<head>
    <title>PHP Day 1 - Switch</title>
</head>
<body>

<h1>PHP</h1>
<?php
$favcolor = 21;
switch ($favcolor) {
    case 3:
        echo "Your favorite color is red!<br>";
        break;
    case 5:
        echo "Your favorite color is silver!<br>";
        break;
    case 6:
        print "Your favorite color is gold!<br>";
	case 7:
        echo "Your favorite color is black!<br>";
	   break;
    case 8: 
	case 9:
        echo "Your favorite color is orange!<br>";
	case 10:
        echo "Your favorite color is yellow!<br>";
    break;
    case 12:
        echo "Your favorite color is blue!<br>";
        break;
    case 11:

	case 20: 
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

echo "<br>-------------------------------<br>";


?>
</body>
</html>