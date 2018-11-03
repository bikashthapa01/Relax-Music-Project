<?php 
    
    $serverName = 'localhost:3325';
    $userName = 'root';
    $password = '';
    $dbName = 'relaxMusic';

    $conn = new mysqli($serverName,$userName,$password,$dbName);

        if($conn->connect_error){
            die('Database Connection Error.');
        }


?>