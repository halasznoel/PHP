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
        //fopen: file megnyitása "w" írásra nyitja meg, ha már létezett a file, akkor törlődik a tartalma
        //fopen: file megnyitása "a" írásra nyitja meg, (a:append) folytathatjuk a fájlt.

        $fp = fopen("liba.txt","a");
        //fwrite:írás a fileba
        //\n jelenti az új sort
        for($i = 1; $i <= 100; $i++)
            fwrite($fp,"$i. Ez egy sor.\n");
        //fclose:lezárja a fájlt
        fclose($fp);

    ?>
</body>
</html>