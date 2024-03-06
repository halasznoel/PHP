<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $s = "alma,eper,cseresznye,szigszalag,colostok,ámbráscet";

        //explode parancs szétdarabolj az elemeket a megadott szeparátor szerint és egy tömböt ad eredményül
        $elemek = explode(',',$s);
        foreach($elemek as $elem)
            echo "$elem<br>";


    ?>
</body>
</html>