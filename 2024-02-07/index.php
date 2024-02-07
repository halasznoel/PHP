<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
    <?php
        $root_dir = $_SERVER['DOCUMENT_ROOT'];
        echo "Szerver dokumentumgyökér: " . $root_dir;
        echo "<br>";

        $files = glob($root_dir.'/felkotommagam/images/*.*');
        echo "<select name=\"mikell\">";
        foreach ($files as $file) {
            echo '<option>'.basename($file).'</option>';
        }
        echo "</select>";
    ?>
    <input type="submit" value="Mutasd">
    </form>
    <?php 
        if(isset($_GET['mikell'])){
            echo "<img src=\"./images/".$_GET['mikell']."\">";
        }
    ?>
</body>
</html>