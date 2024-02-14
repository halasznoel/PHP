<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Három eurós bolt</title>
</head>
<body>
    <h1>Három eurós bolt</h1>
    <form action="index.php" method="get">
        <p>Termék kiválasztása:</p>
        <select name="termek">
            <?php
            $termekek = array("Alma", "Körte", "Szőlő", "Banán", "Narancs");
            foreach ($termekek as $termek) {
                echo "<option value=\"$termek\">$termek</option>";
            }
            ?>
        </select>
        <br><br>
        <p>Termék ára (Ft):</p>
        <input type="number" name="ar" value="1000">
        <br><br>
        <p>Mennyiség:</p>
        <input type="number" name="mennyiseg" value="1">
        <br><br>
        <p>Árengedmény (%):</p>
        <input type="number" name="engedmeny" value="0">
        <p>Akarunk árengedményt?</p>
        <input type="checkbox" name="engedmeny_igen" value="igen">
        <br><br>
        <input type="submit" value="Fizetés">
    </form>

    <?php
    $termek = "";
    $ar = 1000;
    $mennyiseg = 1;
    $engedmeny = 0;
    $engedmeny_igen = false;
    $brutto_ar = 0;

    if (isset($_GET["termek"]) && isset($_GET['ar']) && isset($_GET["mennyiseg"]) && isset($_GET["engedmeny"]) && isset($_GET["engedmeny_igen"])) {
        $termek = $_GET["termek"];
        $ar = (int)$_GET["ar"];
        $mennyiseg = (int)$_GET["mennyiseg"];
        $engedmeny = (int)$_GET["engedmeny"];
        $engedmeny_igen = true;
      
        // Ellenőrzések
        if ($mennyiseg <= 0) {
          echo "<p>A mennyiség nem lehet 0!</p>";
          exit;
        }
        if ($engedmeny < 0 || $engedmeny > 100) {
          echo "<p>Az árengedmény 0 és 100% között kell, hogy legyen!</p>";
          exit;
        }
      
        $brutto_ar = $ar * $mennyiseg;
        $engedmeny_szazalek = $engedmeny / 100;
        $netto_ar = $brutto_ar - ($brutto_ar * $engedmeny_szazalek);

        echo "<p>Termék: $termek</p>";
        echo "<p>Mennyiség: $mennyiseg db</p>";
        echo "<p>Darabár: $ar Ft</p>";
        echo "<p>Ár: $brutto_ar Ft</p>";
        echo "<p>Engedményes ár: $netto_ar Ft</p>";
        echo "<p>Engedmény: $engedmeny %</p>";
      
      }
      
    ?>
</body>
</html>