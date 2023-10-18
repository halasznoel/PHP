<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asszociatív tömbök</title>
</head>
<body>
    <?php
    // Asszociatív tömb
        $adatok = array(
            "Pista" => 500000,
            "Sanyi" => 120000,
            "Olga" => 80000
        );

        // echo $adatok["Sanyi"];
        // Asszociatív tömb elemein történő végigierálás
        foreach($adatok as $kulcs => $érték)
            echo "<p>$kulcs - $érték</p>";
        
        // $_GET['email'] ---> ez egy asszociatív tömb

        // Függvény
        function valami($duma,$db,$html)//$duma, $db formális paraméterek
        {
            for($i = 0; $i < $db; $i++)
                echo "<".$html.">".$duma."</".$html.">\n";

                // ez a függvény nem ad eredményül semmi, ezért eljárásnak nevezzük
        }

        function összead($a,$b)
        {
            return $a + $b;
        }
        
        // meghívjuk a függvényt (a függvény nem hajtódik addig végre, amíg nem hívjuk meg)
        valami("csiga",3,"h1"); //"csiga" stb: aktuális paraméterek
        valami("paradicsom",2,"h2");

        $c = összead(10,50);
        echo $c;
    ?>
</body>
</html>