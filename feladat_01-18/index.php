<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>igen</title>
</head>
<body>
    <?php 
    $nev = "";
    $oazon = "";
    if(isset($_GET['hidden'])){
        $connect = mysqli_connect('localhost','root','','adatok');
        mysqli_query($connect, 'set names utf8');
        if(isset($_GET['oazon'])){
            $oazon = $_GET['oazon'];
            if(is_numeric($oazon))
            {
                $ered = mysqli_query($connect, "select nev from olvasok where oazon=$oazon");
                $nev = mysqli_fetch_array($ered)['nev'];
                if($nev == '')
                    $nev = "Error (nincs ilyen kód)";
            }
        }
    }

    ?>
    <form action="index.php" method="get">
            <label>Azonosító:</label><br>
            <input type="text" value="<?php echo $oazon;?>" name="oazon" >
            <br>
            <label>Név:</label>
            <br>
            <input type="text" value="<?php echo $nev;?>" name="nev">
            <br>
            <br>
            <input type="hidden" name="hidden" value = "1">
            <input type="submit" value="Keresés">
    </form>
</body>
</html>