<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wakacyjny czar</title>
    <link rel="stylesheet" href="Logowanie.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
</head>
<body>
   
    <div class="main">
        <div class="menu">
            <div class="Logo"> <img id="logo"#Logo src="img/napislogo1.png" alt=""></div>
            <hr class="Blank">
            <div class="Home">Home</div>
            <div class="oferta">Oferta </div>
            <div class="Onas">O nas</div>
            <div class="Konto">Konto</div>

        </div>
        <script>
            function pokazL() {
            document.getElementById("panel-rejestracja").style.display = 'none';
            document.getElementById("panel-logowanie").style.display = 'block';
            }

            function pokazR() {
            document.getElementById("panel-rejestracja").style.display = 'block';
            document.getElementById("panel-logowanie").style.display = 'none';
            }

        </script>
        <div class="logowanie">
            <div class="przyciski">
            <button id="plogowanie" onclick="pokazL()">Logowanie</button> 
            <button id="prejestracja" onclick="pokazR()">Rejestracja</button></div>
            <div id="panel-rejestracja">
                <form class="panel-rejestracja" method="POST" action="routing.php">
                    <input class="panel" type="text" name="Username" placeholder="Nazwa użytkownika" maxlength="25">
                    <input class="panel" type="text" name="e-mail" placeholder="Adres E-mail" maxlength="35">
                    <input class="panel" type="password" name="password" placeholder="Hasło" maxlength="25">
                    <input class="panel" type="password" name="password2" placeholder="Powtórz hasło" maxlength="25">
                    <input class="panel" type="text" name="Name" placeholder="Imię" maxlength="25">
                    <input class="panel" type="text" name="Surname" placeholder="Nazwisko" maxlength="35">
                    <input class="panel" type="text" name="City" placeholder="Miasto" maxlength="30">
                    <input class="panel" type="text" name="Zip-code" placeholder="Kod pocztowy (XX-XXX)"  maxlength="6" minlength="6">
                    <input class="panel" type="text" name="Address" placeholder="Adres (Ulica i numer domu/numer mieszkania)" maxlength="40"><br>
                    <input class="panel-zaj" type="submit" name="rejestruj" value="Zajerestruj">
                </form>
            </div>
            <div id="panel-logowanie">
                <form class="panel-logowanie" method="POST">
                    <input class="panel" type="text" name="login" placeholder="Podaj nazwę użytkownika lub e-mail">
                    <input class="panel" type="password" name="password" placeholder="Podaj hasło">
                    <input class="panel-zaj" type="submit" name="submit" value="Wyślij">
                </form>
            </div> 
    
        </div>    
    </div>
</body>
</html>