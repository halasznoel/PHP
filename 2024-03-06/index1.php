<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $numbers = [1,1,1,1,1,2,2,2,2,2,3,3,3,3,4,4,4,4,5,5,5,5];
        //egy elemet csak egyszer szeretnénk megkapni

        $numbers = array_unique($numbers);
        foreach($numbers as $number)
            echo "$number<br>";
    ?>
</body>
</html>