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
        $username = "root";
        $password = "";
        $databaseName = "wakacyjny-czar";
    ?>
    <div class="main">
        
        <div class="menu">
            <div class="Logo"> <img id="logo"#Logo src="img/napislogo1.png" alt=""></div>
            <div class="Home">Home</div>
            <div class="oferta">Oferta </div>
            <div class="Onas">O nas</div>
            <div class="Konto">Konto</div>

        </div>
        <div class="logowanie">
            <button class="logowanie">Logowanie</button>
            <button class="rejestracja">Rejestracja</button>
        </div>
        <div class="panel-rej">
                <?php
                    $Username = $_POST["Username"];
                    $e_mail = $_POST["e-mail"];
                    $Password = $_POST["password"];
                    $con = new mysqli($servername, $username, $password);
                    if(isset($_POST["submit"])){
                        $sql = "INSERT INTO user (Username, e-mail, password) VALUES ('$Username', '$e_mail', '$Password')";
                    }
                ?>
                <form action="POST">
                    <input type="text" name="Username" placeholder="Nazwa użytkownika">
                    <input type="text" name="e-mail" placeholder="Adres E-mail">
                    <input type="password" name="password" id="pass1" placeholder="Hasło">
                    <input type="password" id="pass2" placeholder="Powtórz hasło">
                    <input type="text" name="Name" placeholder="Imię">
                    <input type="text" name="Surname" placeholder="Nazwisko">
                    <input type="text" name="City" placeholder="Miasto">
                    <input type="text" name="Zip-code" placeholder="Kod pocztowy (XX-XXX)">
                    <input type="text" name="Address" placeholder="Adres (Ulica i numer domu/numer mieszkania)">
                    <input type="button" value="submit">
                </form>
        </div>
        <!-- <div class="panel-log">
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
        </div> -->
    </div>
</body>
</html>