<?php

    $user_type = $_REQUEST["user_type"];
    $document_type = $_REQUEST["document_type"];
    $document_number = $_REQUEST["document_number"];
    $names = $_REQUEST["names"];
    $surnames = $_REQUEST["surnames"];
    $age = $_REQUEST["age"];
    $email = $_REQUEST["email"];
    $municipality = $_REQUEST["municipality"];
    $neighborhood = $_REQUEST["neighborhood"];
    $address = $_REQUEST["address"];
    $program = $_REQUEST["program"];
    $code = $_REQUEST["code"];
    $health_provider = $_REQUEST["health_provider"];
    $medical_preexistence = $_REQUEST["medical_preexistence"];

    //Connect DataBase
    $host = "localhost";
    $dbname = "person_register";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);

    //Build SQL Sentence
    $sql = "INSERT INTO person (id, user_type_id, document_type_id, document_number, names, surnames, age, email, municipality_id, neighborhood, address, program_id, code, health_provider_id, medical_preexistence) VALUES (NULL, '$user_type', '$document_type, '$document_number', '$names',
        '$surnames', '$age', '$email', '$municipality', '$neighborhood', '$address', '$program', '$code', '$health_provider', '$medical_preexistence');";

    //Prepare SQL Sentence 
    $q = $cnx->prepare($sql);

    //Execute SQL Sentence
    $result = $q->execute();

    if($result){
        echo "Person saved successfully";
    }
    else{
        echo "There was an error creating the Person $names";
    }

?>