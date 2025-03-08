<?php 

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "pdo_db";
    
    try{
        $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $exeption){
        echo "Connection Failed ". $exeption->getMessage();
    }


