<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doga</title>
</head>
<body>
    <?php 

    /* 
    1. Készítsen függvényt minagyobb azonosítóval. A függvénynek két szám típusú formális paramétere legyen. A függvény 1-et adjon eredményül ha az első paraméter nagyobb vagy egyenlő, mint a második. 2-őt ha a második nagyobb, mint az első. Hívja is meg kétszer és írja az eredményt a képernyőre bekezdés formájában.
    */
    function minagyobb($number1,$number2)
    {
        if($number1 > $number2)
            $tag = "1";
        else
            $tag = "0";

        $eredmény = "<p>$tag</p>";
        return $eredmény;

    }
    echo minagyobb(10,5);
    echo minagyobb(5,10);

    /* 
    2. Készítsen eljárást szinestext azonosítóval. Két szöveges formális paramétere legyen. Az első paraméter a megjelenítendő szöveget tartalmazza a második pedig a színét. Az eljárás egy bekezdést állítson elő a megadott színnel. Hívja is meg kétszer különböző színekkel és szövegekkel.
    */

    function szinestext($text,$color)
    {
        echo "\n<p style=\"color:$color\">$text</p>\n";
    }
    szinestext("szöveg","blue");
    szinestext("szöveg","red");

    /* 
        3. Készítsen eljárást createselect azonosítóval. Egy paramétere legyen, ami egy határozatlan számú paraméter. Az eljárás készítsen select elemet a paraméterben megkapott szövegekből. Hívja is meg.

        segítség html kódhoz:

        <select>
        <option>savanyú</option>
        <option>édes</option>
        <option>sós</option>
        </select>
    */
  
    function createselect($parameterek)
    {
        $tag = "select";
        $eredmény = "\n<$tag>";
        
        foreach($parameterek as $parameter)
        {
            $eredmény.="\n<option>$parameter</option>";
        }
    }
    createselect("savanyú","édes","sós")
    ?>
</body>
</html>