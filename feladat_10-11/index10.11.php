<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Számológép</title>
</head>
<body>
    <form action="index10.11.php" method="get">
        <label>Első szám</label>
        <input type="text" name="elso">
        <label>Második szám</label>
        <input type="text" name="masodik">
        <input type="submit" value="Összeadás">
    </form>
    <?php
    if(isset($_GET['elso']) && isset($_GET['masodik']))
    {
        // Ha az elso és a masodik paramétert is megkaptuk
        $elso = $_GET['elso'];
        $masodik = $_GET['masodik'];
        if($elso == null || $masodik == null)
            //Ha mind a kettőbe írtunk valamit
            echo "Írj a mezőbe számokat";
        else
        {
            //ha mind a kettő számot tartalmaz
            if(is_numeric($elso) && is_numeric($masodik))
            {
                echo "<label>Összeg</label>";
                $osszeg = $elso + $masodik;
                echo "<input type=\"text\" value=\"$osszeg\">";
            }
            else
                echo "Számokat adj meg!";
        }
    }
    ?>
</body>
</html>