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
        $s = "alma eper cseresznye szigszalag colostok ámbráscet";

        //explode parancs szétdarabolja az elemeket a megadott szeparátor szerint és egy tömbböt ad eredményül
        $elemek = explode(' ',$s);

    
        foreach($elemek as $elem)
            echo "$elem<br>";



    ?>
</body>
</html>