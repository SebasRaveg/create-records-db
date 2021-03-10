<?php

    $faculty = $_REQUEST["faculty"];
    $program_cod= $_REQUEST["program_cod"];
    $program_name = $_REQUEST["program_name"];

    //Connect DataBase
    $host = "localhost";
    $dbname = "person_register";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);

    //Build SQL Sentence
    $sql = "INSERT INTO program (id, faculty_id, program_cod, program_name) VALUES (NULL, '$faculty', '$program_cod', '$program_name');";

    //Prepare SQL Sentence
    $q = $cnx->prepare($sql);

    //Execute SQL Sentence
    $result = $q->execute();

    if($result){
        echo "Program saved successfully";
    }
    else{
        echo "There was an error creating the Program $program_name";
    }
    
?>