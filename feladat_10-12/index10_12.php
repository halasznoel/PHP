<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="index10_12.php" method="get">
        <label>Látott ufót</label>
        <input type="checkbox" name="ufo" value="1">
        <fieldset>
            <legend>Városok</legend>
        <?php 
            $towns = array("Szeged", "Orosháza", "Tótkomlós", "Békésszentandrás");
            foreach($towns as $town) {
                echo "<label>$town</label>";
                echo "<input type=\"radio\" name=\"town\" value=\"$town\">";
            }
        ?>

        </fieldset>
        <br><br>
    <select name="varos">
        <?php 
           foreach($towns as $town)
                echo "<option>$town</option>";
        ?>
    </select>

        <br><br>
        <input type="submit">
    </form>
</body>
</html>