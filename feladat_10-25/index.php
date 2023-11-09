<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php">
        <p>Kérem válasszon egy várost a szállítási díj meghatározásához</p>
        <?php
            $varosok = array("Szeged","Orosháza","Kardoskút","Algyő","Sopron","Pécs","Győr","Debrecen");
            ?>
        <label>Város</label>
        <select name="varos">
            <?php
                foreach($varosok as $varos)
                echo "<option>$varos</option>";
            ?>
        </select>
        <br><br>
        <?php 
            if(isset($_GET['varos']))
            {
                $varos = $_GET['varos'];
                if($varos == "Szeged")
                {
                    echo "<label >Szállítási díj</label> <input type=\"text\" value=\"1000\">";
                }
                elseif($varos == "Algyő")
                {
                    echo "<label >Szállítási díj</label> <input type=\"text\" value=\"2000\">";
                }
                else
                {
                    echo "<label >Szállítási díj</label> <input type=\"text\" value=\"3000\">";
                }
            }
        ?>
        
        <br><br>
        <input type="submit">
    </form>
</body>
</html>