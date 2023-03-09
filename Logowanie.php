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
            <div class="Onas">O nas
                <div class="Onas1">
                   <a href="http://www.onet.pl"target="_blank">Polityka Prywatności</a>
                </div>
                <div class="Onas1"><a href="http://www.onet.pl"target="_blank">O nas</a></div>
            </div>
            <div class="Konto">Konto
                <div class="Konto1"><a href="http://www.onet.pl"target="_blank">Moje wycieczki</a></div>
                <div class="Konto1"><a href="http://www.onet.pl"target="_blank">Ustawienia</a></div>
            </div>

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