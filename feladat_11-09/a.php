<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"A" oldal</title>
</head>
<body>
    <h1>Most az "A" oldalon van</h1>
    <form action="b.php" method="get">
        <label>Név</label>
        <input type="text" name="nev">
        <input type="submit">
    </form>
    <?php 
        if(isset($_SESSION["nev"])){
            $kivolt = $_SESSION["nev"];
            echo "<label>Bejelentkezve: $kivolt</label>";
        }
    ?>
</body>
</html>