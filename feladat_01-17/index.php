<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oldal</title>
</head>
<body>
    <?php
    $email = "";
    $name = "";
    $town = "";
    if(isset($_GET['hidden'])) //submit gombbal jöttem
    {
        if(isset($_GET['email'])) 
            $email = $_GET['email'];
        if(isset($_GET['name'])) 
            $name = $_GET['name'];
        if(isset($_GET['town'])) 
            $town = $_GET['town'];

        $connect = mysqli_connect('localhost','root','','emailes');
        mysqli_query($connect, 'set names utf8');
        mysqli_query($connect, "insert into user (email,name,town) values ('$email','$name','$town')");
        echo mysqli_error($connect);
    }else{
        //Első alkalommal jöttem ide nem submit gombbal csak beírtam a címet a böngészőbe
        //Ez az ág nem is kellene mert itt nem csinálunk semmit
    }
    ?>
    <form action="index.php" method="get">
            <label>E-mail:</label><br>
            <input type="text" name="email" value="<?php echo $email;?>">
            <br>
            <label>Név:</label>
            <br>
            <input type="text" name="name" value="<?php echo $name;?>">
            <br>
            <label>Város:</label>
            <br>
            <input type="text" name="town" value="<?php echo $town;?>">
            <br>
            <br>
            <input type="hidden" name="hidden" value = "1">
            <input type="submit" value="Mentés">
    </form>

</body>
</html>