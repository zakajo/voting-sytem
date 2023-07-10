<?php
    
    $host = 'localhost';
    $user_name = 'root';
    $password = 'mysql';
    // $database = 'users';

    $connect = new mysqli($host, $user_name, $password, $database);

    if($connect->connect_error) die('Connection feild'.$connect->connect_error);

?>