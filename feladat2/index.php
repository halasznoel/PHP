<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kampi</title>
</head>
<body>
<?php
    $a = 100; // szám
    $b = "100"; // szöveg
    
    if($a == $b)
        echo "Az érték megegyezik (a típus lehet, hogy nem)";
    else
        echo "Az érték nem egyezik meg";
    echo "<br>";
    $a = 100; // szám
    $b = 100; // szöveg
    
    if($a === $b)
        echo "Az érték megegyezik és a típus is";
    else
        echo "Az érték nem egyezik meg, vagy a típus nem egyezik meg";
     // === tagadás a !==

     /*
     Spaceship operátor
     <=>
     $a <=> $b
     -1:$a < $b
     0:$a === $b
     1:$a > $b
     */

    echo "<br>";
    $a = -10;
    $b = 100;
    echo $a <=> $b;

    echo "<br>";
    $a = 100;
    $b = 100;
    echo $a <=> $b;

    echo "<br>";
    $a = 100;
    $b = -10;
    echo $a <=> $b;

    /*
    Relációs operátorok
    ==
    !=
    ===
    !==
    <> ---> nem egyenlő
    < : kisebb
    > : nagyobb
    <= : kisebb =
    >= : nagyobb =
    <=> : -1,0,1
    */

    /*
    Logikai operátorok
    and, &&
    or, ||
    !, tagadás
    xor, kizáró vagy

    php-ban minden érték ami nem 0, igaznak számít
    */

    echo "<br>";
    $a = 10;
    $b = 20;
    echo $a && $b; // 1-et kapunk, mert az 1 igazat jelent

    echo "<br>";
    $a = 0;
    $b = 20;
    if($a && $b)
        echo "'a' is és 'b' is igaz";
    else
        echo "'a' hamis vagy 'b' hamis vagy 'a' is és 'b' is hamis";

    echo "<br>";
    $a = true;
    $b = false;
    if($a || $b)
        echo "'a' igaz vagy 'b' igaz vagy mindkettő igaz";
    else
        echo "Mindkettő hamis";

    
    /* xor : kizáró vagy (akkor igaz ha vagy az egyik igaz vagy a másik, de egyszerre a kettő nem)*/

    echo "<br>";
    $a = false;
    $b = true;
    if($a xor $b)
        echo "'a' igaz vagy 'b' igaz de mindkettő nem igaz";
    else
        echo "Mindkettő hamis vagy mindkettő igaz";
     /*
     . : szöveg (string) összefűző operátor
     */

    echo "<br>";
    $vnev = "Halmos";
    $knev = "László";
    $nev = $vnev." ".$knev; // 3 részből állítom össze a szöveget
    $nev .= " úr"; // értékadó operátor
    echo $nev;
    ?>
</body>
</html>