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
            <hr class="Blank">
            <div class="Home">Home</div>
            <div class="oferta">Oferta </div>
            <div class="Onas">O nas</div>
            <div class="Konto">Konto</div>

        </div>
        <div class="logowanie">
            <div class="przyciski">
            <button class="plogowanie" onclick="pokazL()">Logowanie</button> 
            <button class="prejestracja" onclick="pokazR()">Rejestracja</button></div>
            <div id="panel-rejestracja">
            
                <?php
                    // $Username = $_POST["Username"];
                    // $e_mail = $_POST["e-mail"];
                    // $Password = $_POST["password"];
                    // $con = new mysqli($servername, $username, $password);
                    // if(isset($_POST["submit"])){
                    //     $sql = "INSERT INTO user (Username, e-mail, password) VALUES ('$Username', '$e_mail', '$Password')";
                    // }
                ?>
                <form class="panel-rejestracja" action="POST">
                    <input class="panel" type="text" name="Username" placeholder="Nazwa użytkownika">
                    <input class="panel" type="text" name="e-mail" placeholder="Adres E-mail">
                    <input class="panel" type="password" name="password" id="pass1" placeholder="Hasło">
                    <input class="panel" type="password" id="pass2" placeholder="Powtórz hasło">
                    <input class="panel" type="text" name="Name" placeholder="Imię">
                    <input class="panel" type="text" name="Surname" placeholder="Nazwisko">
                    <input class="panel" type="text" name="City" placeholder="Miasto">
                    <input class="panel" type="text" name="Zip-code" placeholder="Kod pocztowy (XX-XXX)">
                    <input class="panel" type="text" name="Address" placeholder="Adres (Ulica i numer domu/numer mieszkania)"><br>
                    <input class="panel-zaj" type="button" value="Zajerestruj">
                </form>
            </div>

            <div id="panel-logowanie">
            <?php
                // $con = new mysqli($servername, $username, $password);
                // if(isset($_POST["submit"])){
                //     if($_POST["password"] == "sekret1"){
            ?>
                     <!-- Tutaj jest chroniona zawartość... -->
             <?php
                //     }
                //     else{
                //     echo "Nieprawidłowe hasło";
                //     }
                // }
                // else{
                // echo "Wprowadź hasło";
                //}
            ?>
            <form class="panel-rejestracja" method="POST">
                <input class="panel" type="text" name="login" placeholder="Podaj nazwę użytkownika lub e-mail">
                <input class="panel" type="password" name="password" placeholder="Podaj hasło">
                <input class="panel-zaj" type="submit" name="submit" value="Wyślij">
            </form>
            </div>
            <script>
                function pokazL() {

                }

                function pokazR() {
                
                }
            </script>
                    
        </div>
    </div>
</body>
</html>