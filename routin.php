<?php
require_once("config.php");


function rejestracja($Username, $e_mail, $Password, $Name, $Surname, $City, $Zip_code, $Address)
{
        
        $sql1 = "INSERT INTO `clients` (`ID`, `Name`, `Surname`, `City`, `Zip_code`, `Address`) VALUES (NULL, '$Name', '$Surname', '$City', '$Zip_code', '$Address')";
        $conn=DB()->query($sql1);
        $result = $conn("SELECT ID FROM clients WHERE `Name` = '$Name' AND `Surname` = '$Surname' AND `City` = '$City' AND `Zip_code` = '$Zip_code' AND `Address` = '$Address';");
        $result = $result->fetch_assoc();
        $result = $result['ID'];
        $sql2 = "INSERT INTO `user` (`ID`, `Username`, `e-mail`, `Password`) VALUES ($result, '$Username', '$e_mail' , '$Password')";
        $conn($sql2);
        $conn->close();
    }


    if (!empty($_POST['Username']) && !empty($_POST['e-mail'])){ 
        if(isset($_POST["rejestruj"])){
            rejestracja($_POST["Username"], $_POST["e-mail"], $_POST["password"], $_POST["Name"], $_POST["Surname"], $_POST["City"], $_POST["Zip-code"], $_POST["Address"]);
        }
    }
    header("location: /Logowanie.php");

?>