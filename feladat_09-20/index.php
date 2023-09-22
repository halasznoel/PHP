<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sajt</title>
</head>
<body>
    <?php
        $row = $_GET['row'];
        $col = $_GET['col'];
        $caption = $_GET['caption'];
        $data = $_GET['data'];
        echo "<br>";
        echo $row;
        echo "<br>";
        echo $col;
        echo "<br>";
        echo $caption;
        echo "<br>";
        echo $data;

        echo "<br>";

        echo "<table>";
        echo "<caption>$caption</caption>";
        for ($sor = 0; $sor < $row;$sor++) { 
            echo "\n<tr>";
            for($oszlop = 0; $oszlop < $col;$oszlop++)
                echo "<td>$data</td>";
            echo "</tr>\n";
        }
        echo "</table>";
    ?>
</body>
</html>