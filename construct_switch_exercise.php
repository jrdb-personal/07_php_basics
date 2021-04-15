<!DOCTYPE html>
<html>
<head>
    <title>PHP Day 1 - Switch</title>
</head>
<body>

<h1>PHP</h1>
<?php
        $year = 2001;

        switch (($year - 4) % 12){
        case 1: echo $year." Rat"; break;

        case 2: echo $year. " Ox"; break;

        case 3: echo $year. "Tiger"; break;

        case 4: echo $year. "  Rabbit"; break;

        case 5: echo $year." Dragon"; break;
        
        case 6: echo $year." Snake"; break;
        
        case 7: echo $year." Horse"; break;
        
        case 8: echo $year." Goat"; break;
        
        case 9: echo $year. " Monkey"; break;
        
        case 10: echo $year." Rooster"; break;
        
        case 11: echo $year." Dog"; break;

        default: echo $year." Pig"; break;        
}

//echo returnChineseZodiac(1989);




?>
</body>
</html>