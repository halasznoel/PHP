<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci számok</title>
    <style>
        table{
            border-collapse:collapse;
        }
        td{
            border:1px solid black;
        }
    </style>
</head>
<body>
    <table>
    <?php
        $a = 0;
        $b = 1;
        echo "<tr><td>$a</td><td>$b</td></tr>";
        echo $a . " " . $b . " ";
        for ($i = 0; $i < 28; $i++) { 
            $c = $a + $b;
            echo "<td>$c</td>";
            $a = $b;
            $b = $c;
        }
    ?>
    </table>
</body>
</html>