<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        /*
            Írjon függvényt paragrafsdiffcol néven.
            Három formális paramétere legyen.
            Az első egy szín.
            A második egy szín.
            A harmadik pedig egy változó számú paraméter.
            A függvény paragrafusokat generáljon le úgy, hogy váltakozzon a szöveg színe.
            Hívjuk is meg.
        */ 

        function paragrafsdiffcol($c1,$c2,...$elemek){
            $ret = "";
            $aktc = $c1;
            foreach($elemek as $elem)
            {
                $ret.="\n<p style = \"color:$aktc;\">$elem</p>";
                if($aktc == $c1)
                    $aktc = $c2;
                else    
                    $aktc = $c1;
            }


            return $ret;

        }

        echo paragrafsdiffcol("blue","green","Egér","Macska","Nyuszi","Liba");
        echo paragrafsdiffcol("black","red","Malac","Csupor","Parittya","Lébecol");

        /*
            Kell egy tablenum függvény. Két paraméter kell oszlopok száma és sorok száma. 
            A cellákban 1-től kezdődően növekvő számok legyenek.
        */
        function tablenum($sor,$oszlop)
        {
            $ret = "<table>";
            $num = 1;

            for($s = 0; $s < $sor;$s++)
            {
                $ret.="<tr>";
                for($o = 0; $o < $oszlop; $o++)
                {
                    $ret.="<td>$num</td>";
                    $num++;
                }
                $ret.="</tr>";
            }

            $ret .= "</table>";
            return $ret;
        }

        echo tablenum(20,50);

    ?>

<!--
    <table>
        <tr><td>1</td><td>2</td><td>3</td><td>4</td></tr>
        <tr><td>5</td><td>6</td><td>7</td><td>8</td></tr>
        <tr><td>9</td><td>10</td><td>11</td><td>12</td></tr>
        <tr><td>13</td><td>14</td><td>15</td><td>16</td></tr>
    </table>
    -->


</body>
</html>