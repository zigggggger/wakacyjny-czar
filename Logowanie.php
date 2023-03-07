<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wakacyjny czar</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="Logowanie.css">

</head>
<body>
    <?php
        $servername = "localhost";
        $username = "admin";
        $password = "";
    ?>
    <div class="main">
        
        <div class="menu">
            <div class="logo"><img class="Logo" src="img/favicon.png" alt=""> Wakacyjny czar</div>
            <div class="Home">Home</div>
            <div class="oferta">Oferta </div>
            <div class="Onas">O nas</div>
            <div class="Konto">Konto</div>

        </div>
        <div class="logowanie">
            <button class="logowanie">Logowanie</button>
            <button class="rejestracja">Rejestracja</button>
        </div>
        <div class="panel-log">
        <?php
            $con = new mysqli($servername, $username, $password);
            if(isset($_POST["submit"])){
                if($_POST["password"] == "sekret1"){
                ?>
                Tutaj jest chroniona zawartość...
                <?php
                }
                else{
                echo "Nieprawidłowe hasło";
                }
            }
            else{
            echo "Wprowadź hasło";
            }
            ?>
            <form method="POST">
                <input type="text" name="login" placeholder="Podaj nazwę użytkownika lub e-mail">
                <input type="password" name="password" placeholder="Podaj hasło">
                <input type="submit" name="submit" value="Wyślij">
            </form>
        </div>
        <div class="panel-rej"></div>
    </div>
</body>
</html>