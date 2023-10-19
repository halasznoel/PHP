<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hallgatók</title>
    <style>
        table{
            border-collapse:collapse;
            margin:auto;
            width:200px;
        }
        tr:nth-child(2n-1){
            background-color:#336699;
        }
        tr:nth-child(2n){
            background-color:#996633;
        }
    </style>
</head>
<body>
    <h1>Hallgatói névsor</h1>
    <table border='1'>
    <?php
        $connect = mysqli_connect("localhost","root","","elso");
        mysqli_query($connect,"set names utf8");
        $query = mysqli_query($connect,"select nev from hallgato order by nev");

        while($rek = mysqli_fetch_array($query))
        {
            $nev = $rek['nev'];
            echo "<tr><td>$nev</td></tr>";
        }
    ?>
</body>
</html>