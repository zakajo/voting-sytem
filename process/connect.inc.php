<?php
    
    $host = 'localhost';
    $user_name = 'root';
    $password = '';
    $database = 'voting_system';

    $dbCon = new mysqli($host, $user_name, $password, $database);


    if($dbCon->connect_error){
        die('Connection feild'.$dbCon->connect_error);
    }else{
        $dbCon;
    }

?>