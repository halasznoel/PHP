<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03.07</title>
</head>
<body>
    <?php
        if(isset($_GET['value'])){
            $value = $_GET['value'];
            $fp = fopen('adatok.txt','r');
            $sorok = [];
            while(!feof($fp))
            {
                $sor = trim(fgets($fp));
                array_push($sorok,$sor)
            }
            fclose($fp);
            if(!in_array($value,$sorok))
            {
                $fp = fopen('adatok.txt','a')
                fwrite($fp,"$value\n")
                fclose($fp);
            }
        }

    ?>
    <form action="index.php" method="get">
        <input type="text" name="value">
        <input type="submit" value="Írás">
    </form>
</body>
</html>