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
        $f1 = fopen('f1.txt','r');
        $f3 = fopen('f3.txt','w');
        $num = 1;
        while(!feof($f1))
        {
            $sor = fgets($f1);
            fwrite($f3,"$num. $sor");
            $num++;
        }
        fclose($f1);

        $f2 = fopen('f2.txt','r');
        
        while(!feof($f2))
        {
            $sor = fgets($f2);
            fwrite($f3,"$num. $sor");
            $num++;
        }
        fclose($f2);


    ?>
</body>
</html>