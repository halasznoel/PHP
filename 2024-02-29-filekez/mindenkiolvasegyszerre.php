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
       //filesize parancs megadja, hogy hány bájt a file mérete
        echo filesize('index.php')."<br>";
        //r jelentése read, olvasás
        
        $fp = fopen('adatok.txt','r');
        //fread: egy fájlból megadott számú karaktert olvas ki
        $mindenis = fread($fp,filesize('adatok.txt'));//Összes karaktert olvassa ki és eltárolja a $mindenis változóba
        echo $mindenis;


    
    ?>
</body>
</html>