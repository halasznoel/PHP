<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2024.01.04</title>
</head>
<body>
    <?php 
    /*Eljárás: nincs benne return, valamit kiír mondjuk */
    function para($duma,$size,$color,$background)
    {
        echo "\n<p style=\"font-size:$size". "px".";color:$color;background-color:$background\">$duma</p>";
    }
    para("Csigabiga",30,"red","green");
    para("Cicamica",20,"green","blue");

    /* Függvényt amelynek az első paramétere mondja meg, hogy számozott vagy számozatlan listát akarok-e. Ha 0 akkor számozott, ha 1 akkor számozatlan.
    A második paramétere egy határozatlan számú paraméte, ami a lista elemeit tartalmazza */

    function lista($milyenlista,...$elemek)
    {
        if($milyenlista == 0)
            $tag = "ol";
        elseif($milyenlista == 1)
            $tag = "ul";
        else
            return "\n<p>Rosszul adtad meg az első paramétert</p>";

        $eredmény = "\n<$tag>\n";

        foreach($elemek as $elem)
        {
            $eredmény.="\n<li>$elem</li>\n";
        }

        $eredmény.="</$tag>";
        return $eredmény;
    }

    echo lista(0,"Körte","Mangó","Eper");
    echo lista(1,"Körte","Mangó","Eper");
    echo lista(3,"Körte","Mangó","Eper");

    ?>
</body>
</html>