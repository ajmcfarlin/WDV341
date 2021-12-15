<?php

// GRANT ALL PRIVILEGES ON *.* TO `root`@`localhost` WITH GRANT OPTION;

// GRANT PROXY ON ''@'%' TO 'root'@'localhost' WITH GRANT OPTION;

    $database = "wdv341"; //name of database
    $serverName = "localhost"; //most default to localhost
    $username = "root"; //username for the database, NOT your account
    $password = ""; //password for the database, NOT your account

try {

    $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);  
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected Successfully";
}

catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage(); 
}



?>