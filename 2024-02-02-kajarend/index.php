<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="get">
        <?php 
            $kaják=array('uborka saláta','rántott szelet','főtt orja','sültkrumpli','céklalé','kovászos uborka','húsleves','paradicsomleves','krumplis tészta','palacsinta');
            $árak=array(500,3000,1500,1000,2000,1500,1200,800,1600,850);
            $sum = 0;
            echo "<table><tr><th>Étel</th><th>Ár</th><th></th>Rendelés</th></tr>";

            for($i = 0;$i < sizeof($kaják); $i++)
            {
                $checked = "";
                if(isset($_GET[$i])){
                    $checked = "checked";
                    $sum += $árak[$i];
                }
                echo "\n<tr>\n<td>$kaják[$i]</td><td>$árak[$i]</td><td><input type=\"checkbox\" name=\"$i\"></td></tr>";
            }
            echo "<tr><td colspan=\"3\">A megrendelés értéke: $sum </td></tr>";
            echo "</table>";
            ?>
    <input type="submit" value="Rendelések">
    </form>
</body>
</html>