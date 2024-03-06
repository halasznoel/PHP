<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        /*Mennyi a szegediek fizetésének összege az  adatok.txt fájlban
        
        */
        $s = fopen('adatok.txt','r');
        $eredmeny = 0;
        while(!feof($s)) { // eof: End of File
            $sor = fgets($s);
            $elemek = explode(' ',$sor);
            if($elemek[0] == 'Szeged')
                $eredmeny += (int)$elemek[2];
        }
        echo "A szegediek fizetésénék összege: $eredmeny";
        fclose($s);
    ?>
</body>
</html>