<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <select name="termek">
            <?php 
                $termekek = array("pacal","körte","ohio","hellnah","yes");
                foreach($termekek as $termek){
                    echo "<option value=\"$termek\">$termek<option>";
                }
            ?>
        </select>
        <br><br>
        <label>Ár/termék</label>
        <input type="number" name="ar" value="1000">
        <br><br>
        <label>Mennyiség</label>
        <input type="number" name="mennyiseg">
        <br><br>
        <label>Árengedmény (%)</label>
        <input type="number" name="arengedmeny">
        <br><br>
        <label>Akarunk árengedményt</label>
        <input type="checkbox" name="dontes" checked>
        <br><br>
        <input type="submit" value="Elküldés">
    </form>
    <?php 
    $termek = "";
    $ar = 1000;
    $mennyiseg = 0;

    if(isset($_GET["termek"]) && isset($_GET["ar"]) && isset($_GET["mennyiseg"]) && isset($_GET["arengedmeny"])){
        $termek = $_GET["termek"];
        $ar = $_GET["ar"];
        $mennyiseg = $_GET["mennyiseg"];
        $arengedmeny = $_GET["arengedmeny"];

        $vegleges_ar = $ar * $mennyiseg;
        $szazalek = $vegleges_ar - ($arengedmeny / 100 * $vegleges_ar);

        echo "<p>Termék neve: $termek</p>";
        echo "<p>Termék végleges ára: $vegleges_ar Ft</p>";
        echo "<p>Termék ára akcióval: $szazalek Ft</p>";
    }
    ?>
</body>
</html>