<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01.31</title>
</head>
<body>
<?php
        $s="";
        $v="";
        $t="";
        if(isset($_GET['s']))
            $s = $_GET['s'];
        if(isset($_GET['v']))
            $v = $_GET['v'];
        if(isset($_GET['t']))
            $t = $_GET['t'];

        if($s == "")
            $s = $v * $t;
        else if($v == "")
            $v = $s / $t;
        else
            $t = $s / $v;
    ?>
    <form action="index.php" method="get">
        <label >Távolság</label>
        <input type="text" name="s" value="<?php echo $s;?>">
        <label>km</label>
        <br>
        <br>
        <label>Sebesség</label>
        <input type="text" name="v" value="<?php echo $v;?>">
        <label>km/h</label>
        <br>
        <br>
        <label>Idő</label>
        <input type="text" name="t" value="<?php echo $t;?>">
        <label>h</label>
        <br>
        <br>
        <input type="submit" value="Számol">

    </form>
</body>
</html>