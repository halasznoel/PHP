<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaMa nincs</title>
</head>
<body>
    <?php
       /*Mennyi a szegediek fizetésének összege az adatok.txt fájlban

       */

     $fp = fopen('adatok.txt','r');
     $sum = 0;
      while(!feof($fp)) {
        $sor = fgets($fp);
        $elemek = explode(' ',$sor);
        if($elemek[0] == 'Szeged')
            $sum += (int)$elemek[2];

      }
     
      echo "A szegediek fizetésének összege: $sum";
      fclose($fp);

    ?>
</body>
</html>