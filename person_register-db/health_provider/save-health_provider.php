<?php

    $health_provider_cod = $_REQUEST["health_provider_cod"];
    $health_provider_name = $_REQUEST["health_provider_name"];
    $health_provider_phone = $_REQUEST["health_provider_phone"];

    //Connect DataBase
    $host = "localhost";
    $dbname = "person_register";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);

    //Build SQL Sentence
    $sql = "INSERT INTO health_provider (id, health_provider_cod,  health_provider_name, health_provider_phone) VALUES (NULL, '$health_provider_cod', '$health_provider_name', '$health_provider_phone');";

    //Prepare SQL Sentence
    $q = $cnx->prepare($sql);

    //Execute SQL Sentence
    $result = $q->execute();

    if($result){
        echo "Health Provider saved successfully";
    }
    else{
        echo "There was an error creating the Health Provider $health_provider_name";
    }

?>