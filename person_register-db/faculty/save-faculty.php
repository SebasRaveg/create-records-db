<?php

    $faculty_cod = $_REQUEST["faculty_cod"];
    $faculty_name = $_REQUEST["faculty_name"];

    //Connect DataBase
    $host = "localhost";
    $dbname = "person_register";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);

    //Build SQL Sentence
    $sql = "INSERT INTO faculty (id, faculty_cod, faculty_name) VALUES (NULL, '$faculty_cod', '$faculty_name');";

    //Prepare SQL Sentence
    $q = $cnx->prepare($sql);

    //Execute SQL Sentence
    $result = $q->execute();

    if($result){
        echo "Faculty saved successfully";
    }
    else{
        echo "There was an error creating the Faculty $faculty_name";
    }

?>