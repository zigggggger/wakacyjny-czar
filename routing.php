<?php
require_once("config.php");
// FUNKCJE
// REJESTRACJA
function rejestracja($Username, $e_mail, $Password, $Password2, $Name, $Surname, $City, $Zip_code, $Address)
{
        $Username = htmlentities($Username);
        $e_mail = htmlentities($e_mail);
        $Password = htmlentities($Password);
        $Password2 = htmlentities($Password2);
        $Name = htmlentities($Name);
        $Surname = htmlentities($Surname);
        $City = htmlentities($City);
        $Zip_code = htmlentities($Zip_code);
        $Address = htmlentities($Address);

        $_SESSION['error'] = [];
        $Error = false;
        if ($Username == ''){
            array_push($_SESSION['error'], 'Nie podano nazwy użytkownika');
            $Error = true;
        }
        if ($e_mail == ''){
            array_push($_SESSION['error'], 'Nie podano adresu e-mail');
            $Error = true;
        }
        if ($Password == ''){
            array_push($_SESSION['error'], 'Nie podano hasła');
            $Error = true;
        }
        elseif ($Password != $Password2){
            array_push($_SESSION['error'], 'Hasła są różne');
            $Error = true;
        }
        elseif ($Password2 == ''){
            array_push($_SESSION['error'], 'Nie powtórzono hasła');
            $Error = true;
        }
        if ($Name == ''){
            array_push($_SESSION['error'], 'Nie podano imienia');
            $Error = true;
        }
        if ($Surname == ''){
            array_push($_SESSION['error'], 'Nie podano nazwiska');
            $Error = true;
        }
        if ($City == ''){
            array_push($_SESSION['error'], 'Nie podano miasta');
            $Error = true;
        }
        if ($Zip_code==''){
            array_push($_SESSION['error'], 'Nie podano kodu pocztowego');
            $Error = true;
        }
        elseif (substr($Zip_code, 2, 1)!="-" or !is_numeric(substr($Zip_code, 0, 2)) or !is_numeric(substr($Zip_code, 3, 3)) ){
            array_push($_SESSION['error'], 'Błędny kod pocztowy');
            $Error = true;
        }
        if ($Address == ''){
            array_push($_SESSION['error'], 'Nie podano miasta');
            $Error = true;
        }
        $Password_hash = password_hash($Password, PASSWORD_DEFAULT);
        if (!$Error){
            $conn=DB();
            $conn->query("INSERT INTO `clients` (`ID`, `Name`, `Surname`, `City`, `Zip_code`, `Address`) VALUES (NULL, '$Name', '$Surname', '$City', '$Zip_code', '$Address')");
            $result = $conn->query("SELECT ID FROM clients WHERE `Name` = '$Name' AND `Surname` = '$Surname' AND `City` = '$City' AND `Zip_code` = '$Zip_code' AND `Address` = '$Address';");
            $result = $result->fetch_assoc();
            $result = $result['ID'];
            $conn->query("INSERT INTO `user` (`ID`, `Username`, `e-mail`, `Password`) VALUES ($result, '$Username', '$e_mail' , '$Password_hash')");
            $conn->close();
        }

    }

//LOGOWANIE
//  function logowanie($Username, $Password)
//  {
//     $conn = DB()->query("SELECT ID, Username, Password FROM user WHERE Username = '$Username' ");
//     $dane = $conn->fetch_assoc();
//     if ($dane['Username'] == $Username && $dane['Password'] == $Password){
//         $_SESSION['Username'] = $Username;
//         $_SESSION['UserID'] = $dane['ID'];
//     }
//     else{
//         $_SESSION['error'] = 'Podano złą nazwę użytkownika lub hasło';
//     }


//  }





//WYWOŁYWANIE
    if(isset($_POST["rejestruj"])){
        rejestracja($_POST["Username"], $_POST["e-mail"], $_POST["password"], $_POST["password2"], $_POST["Name"], $_POST["Surname"], $_POST["City"], $_POST["Zip-code"], $_POST["Address"]);
        header("location: /Logowanie.php");
    }
    // if(isset($_POST["loguj"])){
    //     logowanie($_POST["Username"], $_POST["password"]);
    //     header("location: /main.php");
    // }
?>