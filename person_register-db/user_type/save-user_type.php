<?php

    $user_type = $_REQUEST["user_type"];
    $description = $_REQUEST["description"];

    //Connect DataBase
    $host = "localhost";
    $dbname = "person_register";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);

    //Build SQL Sentence
    $sql = "INSERT INTO user_type (id, user_type, description) VALUES (NULL, '$user_type', '$description');";

    //Prepare SQL Sentence
    $q = $cnx->prepare($sql);

    //Execute SQL Sentence
    $result = $q->execute();

    if($result){
        echo "User Type saved successfully";
    }
    else{
        echo "There was an error crating the User Type $user_type";
    }

?>