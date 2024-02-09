<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $weight = "";
        $height = "";
        $bmi = "";
        $bmitext = "";

        if(isset($_GET['height']) && isset($_GET['weight'])){
            $height = $_GET['height'];
            $weight = $_GET['weight'];

            $bmi = $weight / ($height * $height);

            if($bmi < 12)
                $bmitext = "Súlyos soványság";
            elseif($bmi < 16)
                $bmitext = "Mérsékelt soványság";
            elseif($bmi < 17)
                $bmitext = "Enyhe soványság";
            elseif($bmi < 18.5)
                $bmitext = "Normális testsúly";
            elseif($bmi < 25)
                $bmitext = "Túlsúlyos";
            elseif($bmi < 30)
                $bmitext = "I. Fokú elhízás";
            elseif($bmi < 35)
                $bmitext = "II. Fokú elhízás";
            else
                $bmitext = "III. Fokú elhízás";
            
        }
    ?>
    <form action="index1.php" method="get">
        <label>Súly (kg)</label>
        <input type="text" name="weight" value="<?php echo $weight; ?>">
        <br><br>
        <label>Magasság (m)</label>
        <input type="text" name="height" value="<?php echo $height; ?>">
        <br><br>
        <label>BMI</label>
        <input type="text" value="<?php echo $bmi; ?>">
        <br><br>
        <label>BMI szövegesen</label>
        <input type="text" value="<?php echo $bmitext; ?>">
        <br><br>
        <input type="submit" value="Számítás">
    </form>
</body>
</html>