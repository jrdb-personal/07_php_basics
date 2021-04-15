<!DOCTYPE html>
<html>
<head>
    <title>PHP Training Course</title>
</head>
<body>

    <h1>PHP with MySQL Training Course</h1>
    <h2>Skipt and Break on Loop</h2>

    <?php 
    $colors = array("red", "green", "blue", "yellow"); 

    foreach ($colors as $color) {
        echo "$color <br>";
    }

    echo "<br>**********<br>";
    $superheroes = array(
        "spider-man" => array(
            "name" => "Peter Parker",
            "email" => "peterparker@mail.com",
        ),
        "super-man" => array(
            "name" => "Clark Kent",
            "email" => "clarkkent@mail.com",
        ),
        "iron-man" => array(
            "name" => "Harry Potter",
            "email" => "harrypotter@mail.com",
        )
    );
     
    // Printing all the keys and values one by one
    /*$keys = array_keys($superheroes);
    for($i = 0; $i < count($superheroes); $i++) {
        echo $keys[$i] . "{<br>";
        foreach($superheroes[$keys[$i]] as $key => $value) {
            echo $key . " : " . $value . "<br>";
        }
        echo "}<br>";
    }
    */
    echo "<br>**********<br>";
    foreach ($superheroes as $superhero) {
        echo $superhero['name']."<br>";
        echo $superhero['email']."<br>";
    }
?>
</body>
</html>