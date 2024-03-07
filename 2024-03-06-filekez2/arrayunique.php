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
      $numbers = [1,1,1,4,4,5,5,5,4,4,33,2,2,21,1,1,12,2,1,2,2,2,2,2,2,2,2,2,2];
      //egy elemet csak egyszer szeretnénk megkapni

      $numbers = array_unique($numbers);//egy paramétere van, egy tömbb, eredményül ad egy tömböt, amiben egy érték már csak egyszer szerepel
      foreach($numbers as $number)
        echo "$number<br>";

    ?>
</body>
</html>