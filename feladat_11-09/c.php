<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"C" oldal</title>
</head>
<body>
    <?php 
        if(isset($_SESSION["nev"])){
            $kivolt = $_SESSION["nev"];
            echo "<label>Bejelentkezve: $kivolt</label>";
            echo "<p>Mindenféle tartalom</p>";
        }else{
            echo "<p>Nem vagy bejelentkezve, nincs jogod semmihez :)</p>";
        }
    ?>
</body>
</html>