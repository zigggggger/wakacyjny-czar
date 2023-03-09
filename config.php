<?php 

function DB(){
    $localhost = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'wakacyjny-czar';
    
    $DB = @new mysqli($localhost, $user, $pass, $db_name);

    return $DB;
}
?>