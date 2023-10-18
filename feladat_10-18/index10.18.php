<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztráció</title>
    <style>
        .error {
            color:red;
        }
    </style>
</head>
<body>
    <form action="index10.18.php">
        <label for="fname">E-mail:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="lname">Jelszó:</label><br>
        <input type="text" id="pass" name="pass"><br>
        <label for="lname">Jelszó megerősítés:</label><br>
        <input type="text" id="passconf" name="passconf"><br><br>
        <input type="submit" value="Küldés">
    </form>
    <?php 

        if(isset($_GET['email']) && isset($_GET['pass']) && isset($_GET['passconf']))
        {

            $email = $_GET['email'];
            $pass = $_GET['pass'];
            $passconf = $_GET['passconf'];
            $error = "";
            //strlen(par): hány karakter van a paraméterben
            if(strlen($email) == 0)
                $error.= " Ki kell tölteni az Email címet!";
                if(strlen($email) == 0 || strlen($passconf) == 0)
                $error.= " Ki kell tölteni minden jelszót!";
            if($pass != $passconf)
                $error = 'A két jelszó nem egyezik meg.';
            //strpos(miben, mit) az adott paraméterben van e valami
            if(!strpos($email,'@'))
                $error.= " Nincs @ az Email címben.";
            
            echo "<label class=\"error\">$error</label>";
        }

    ?>
</body>
</html>