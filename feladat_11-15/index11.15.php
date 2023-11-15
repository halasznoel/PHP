<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index11.15.php" method="get">
        <label>Név</label>
        <input type="text" name="nev">
        <br>
        <label>Város</label>
        <input type="text" name="varos">
        <br>
        <label>Fizetés</label>
        <input type="text" name="fizetes">
        <br>
        <input type="submit" value="Ment">
        <br>
    </form>
    <?php
        /* Adatok kiolvasása kell ide a GET tömbből, ne legyen hiba akkor sem ha még nem kaptuk meg valamelyiket */
        if(isset($_GET['nev']) && isset($_GET['varos']) && $_GET['fizetes'])
        {
            $nev = $_GET['nev']; //Megszerezzük az űrlap által küldött nevet
            $varos = $_GET['varos']; //Megszerezzük az űrlap által küldött várost
            $fizetes = $_GET['fizetes']; //Megszerezzük az űrlap által küldött fizetést
        }


        $connect = mysqli_connect('localhost','root','','teszt'); //Kapcsolúdunk a helyi szerverhez mint root, jelszó nincs, a teszt adatbázist akarom elérni
        mysqli_query($connect,"set names utf8"); // Ez kell, hogy a magyar ékezetesekkel ne legyen gond
        mysqli_query($connect,"insert into adatok (nev,varos,fizetes) values ('$nev','$varos','$fizetes')"); // Az adatok táblába beszúrunk egy új 
    ?>
</body>
</html>