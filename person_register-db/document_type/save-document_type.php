<?php

    $document_type = $_REQUEST["document_type"];
    $description = $_REQUEST["description"];

    //Connect DataBase
    $host = "localhost";
    $dbname = "person_register";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);

    //Build SQL Sentence
    $sql = "INSERT INTO document_type (id, document_type, description) VALUES (NULL, '$document_type', '$description');";

    //Prepare SQL Sentence
    $q = $cnx->prepare($sql);

    //Execute SQL Sentence
    $result = $q->execute();

    if($result){
        echo "Document Type saved successfully";
    }
    else{
        echo "There was an error crating the Document Type $document_type";
    }

?>