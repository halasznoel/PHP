<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"B" oldal</title>
</head>
<body>
    <h1>Most az "B" oldalon van</h1>

    <?php 
        if(isset($_GET["nev"])){
            $nev = $_GET["nev"];
            echo "<label>Bejelentkezve: $nev</label>";
            $_SESSION["nev"] = $nev;
        }
    ?>
    <br>
    <a href="c.php" target="_blank">Ugrás a "C" oldalra</a>
</body>
</html>