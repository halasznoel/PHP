<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $products = array('sóska','lábzsír','toroksó','ujjprotézis','libalegelő','lábvíz','műhaj','hajháló','sósavas víz','ürgebőr','hajpótlás','macskapapucs');
        $prices =array(600,400,500,600,750,900,100,1000,1200,550,200,2000);
    ?>
    <form action="index.php" method="get">
        <?php
            $pos = 0;
            $össz = 0;
            echo "<table>\n";
            foreach ($products as $termék) {
                echo "<tr><td><label>$termék</label></td><td><input type=\"text\" value=\"\"></td><td><input type=\"radio\" name=\"$pos\"></td></tr>";
                $pos += 1;
            }
            echo "<tr><td colspan=\"3\"><input type=\"submit\" value=\"Mennyibe kerül összesen?\"></td></tr>";
            echo "</table>\n";
            echo "<label style=\"font-weight:bolder;\">Az összár: </label>";
        ?>
    </form>
</body>
</html>