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
      $fp = fopen('adatok.txt','r');
      //(eof:End Of File)
      //!: tagadás
      //feof:igazat ad eredményül ha a file végén vagyunk
      //fgets:kiolvassa a következő sort
      //Soronként olvassa a fájlt, amíg nem jut el a végéig
      while(!feof($fp)) {
        echo fgets($fp) . "<br>";
      }
      //ha kiolvasta az utolsó sort is, akkor vége a while ciklusnak

      fclose($fp);
    ?>
</body>
</html>