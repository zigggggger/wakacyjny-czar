<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wakacyjny czar</title>
    <link rel="stylesheet" href="oferta.css">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
</head>
<body>
   
<div class="main">
        <div class="menu">
            <div class="Logo"> <img id="logo"#Logo src="../img/napislogo1.png" alt=""></div>
            <hr class="Blank">
            <div class="Home"><a class="Duze" href="../index.php">Home</a></div>
            <div class="oferta"><a class="Duze" href="oferta.php">Oferta</a></div>
            <div class="Onas"><a class="Duze" href="../Onas/onas.php">O nas</a>
              <div class="Onas1"><a href="../Onas/polityka.php">Polityka prywatności</a></div>
            </div>
            <div class="Konto"><a class="Duze" href="../Konto/konto.php">Konto</a>
                <div class="Konto1"><a href="../Konto/mojewycieczki.php">Moje wycieczki</a></div>
                <div class="Konto1"><a href="../Konto/ustawienia.php">Ustawienia</a></div>
                <div class="Konto1"><a href="../logowanie.php">Logowanie i rejestracja</a></div>
            </div>
        </div>

    <div class="opis">
        <div class="opisnapis">Nasza oferta</div>
        <div class="opisopis"> oferujemy wycieczki... itd itp marcin tu tekst wkleisz jak napiszesz ok? ok</div>
    </div>
    
    <div class="oferty">
        <div class="oferty1"> <button class="button" onclick="pokazeu()">Europa <ion-icon class="ikona" name="caret-up-outline"></ion-icon></button>
            <div id="ofertaeu"> asasadfsaffasasfasfasfasfsfaasf</div>
        </div>

        <div class="oferty1"> <button class="button" onclick="pokazaz()">Azja <ion-icon class="ikona" name="caret-up-outline"></ion-icon></button>
            <div id="ofertaaz"> asasadfsaffasasfasfasfasfsfaasf</div>
        </div>
        
        <div class="oferty1"> <button class="button" onclick="pokazaa()">Ameryka <ion-icon class="ikona" name="caret-up-outline"></ion-icon></button>
            <div id="ofertaaa"> asasadfsaffasasfasfasfasfsfaasf</div>
        </div>
    </div>
        


</div>

<script>
    function pokazeu() {
    var x = document.getElementById("ofertaeu");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }
    function pokazaz() {
    var x = document.getElementById("ofertaaz");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }
    function pokazaa() {
    var x = document.getElementById("ofertaaa");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }


</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
