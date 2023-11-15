<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tábla</h1>
    <table border='1'>
    <tr><td>ID</td><td>Név</td><td>Város</td><td>Fizetés</td></tr>
     <?php 
        $connect = mysqli_connect('localhost','root','','teszt');
        mysqli_query($connect,"set names utf8");
        $query = mysqli_query($connect,"select id,nev,varos,fizetes from adatok");

        while($rek = mysqli_fetch_array($query))
        {
            $nev = $rek['nev'];
            $id = $rek['id'];
            $varos = $rek['varos'];
            $fizetes = $rek['fizetes'];

            echo "<tr><td>$id</td><td>$nev</td><td>$varos</td><td>$fizetes</td></tr>";
        }
     ?>

    </table>
</body>
</html>