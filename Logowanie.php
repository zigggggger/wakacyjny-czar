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
    <?php
        $servername = "localhost";
        $usrnme = "root";
        $passwd = "";
        $databaseName = "wakacyjny-czar";
    ?>
    <div class="main">
        <div class="menu">
            <div class="Logo"> <img id="logo"#Logo src="img/napislogo1.png" alt=""></div>
            <hr class="Blank">
            <div class="Home"><a class="Duze" href="http://www.onet.pl"target="_blank">Home</a></div>
            <div class="oferta"><a class="Duze" href="http://www.onet.pl"target="_blank">Oferta</a></div>
            <div class="Onas">O nas
              <div class="Onas1"><a href="http://www.onet.pl"target="_blank">Polityka prywatności</a></div>
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
                <form class="panel-rejestracja" method="POST" action="Logowanie.php">
                    <input class="panel" type="text" name="Username" placeholder="Nazwa użytkownika">
                    <input class="panel" type="text" name="e-mail" placeholder="Adres E-mail">
                    <input class="panel" type="password" name="password" id="pass1" placeholder="Hasło">
                    <input class="panel" type="password" id="pass2" placeholder="Powtórz hasło">
                    <input class="panel" type="text" name="Name" placeholder="Imię">
                    <input class="panel" type="text" name="Surname" placeholder="Nazwisko">
                    <input class="panel" type="text" name="City" placeholder="Miasto">
                    <input class="panel" type="text" name="Zip-code" placeholder="Kod pocztowy (XX-XXX)">
                    <input class="panel" type="text" name="Address" placeholder="Adres (Ulica i numer domu/numer mieszkania)"><br>
                    <input class="panel-zaj" type="submit" name="submit" value="Zajerestruj">
                </form>
                <?php
                    $con = new mysqli($servername, $usrnme, $passwd, $databaseName);
                    if(isset($_POST["submit"])){
                        if (!empty($_POST['Username']) && !empty($_POST['e-mail'])){ 
                            $Username = $_POST["Username"];
                            $e_mail = $_POST["e-mail"];
                            $Password = $_POST["password"];
                            $Name = $_POST["Name"];
                            $Surname = $_POST["Surname"];
                            $City = $_POST["City"];
                            $Zip_code = $_POST["Zip-code"];
                            $Address = $_POST["Address"];
                        }
                        $sql1 = "INSERT INTO `clients` (`ID`, `Name`, `Surname`, `City`, `Zip_code`, `Address`) VALUES (NULL, '$Name', '$Surname', '$City', '$Zip_code', '$Address')";
                        if(isset($sql1)){
                            if ($con->query($sql1) === TRUE) {
                                echo "New record created successfully";
                            } 
                            else {
                                echo "Error: " . $sql1 . "<br>" . $con->error;
                            }
                        }
                        $sql3 = "SELECT ID FROM clients WHERE `Name` = '$Name' AND `Surname` = '$Surname' AND `City` = '$City' AND `Zip_code` = '$Zip_code' AND `Address` = '$Address';";
                        // if(isset($sql3)){
                        //     if ($result = $con->query($sql3) === TRUE) {
                        //         echo "New record created successfully";
                        //     } 
                        //     else {
                        //         echo "Error: " . $sql3 . "<br>" . $con->error;
                        //     }
                        // }
                        $result = $con->query($sql3);
                        $result = $result->fetch_assoc();
                        echo $result;
                        $result = $result['ID'];
                        $sql2 = "INSERT INTO `user` (`ID`, `Username`, `e-mail`, `Password`, `ID_client`) VALUES ($result3, '$Username', '$e_mail' , '$Password')";
                    }
                    if ($con->connect_error) {
                        die("Connection failed: " . $con->connect_error);
                    }
                    else{
                        echo "powinno śmigać";
                    }
                    if(isset($sql2)){
                        if ($con->query($sql2) === TRUE) {
                            echo "New record created successfully";
                        } 
                        else {
                            echo "Error: " . $sql2 . "<br>" . $con->error;
                        }
                    }
                    $con->close();
                    
                ?>
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