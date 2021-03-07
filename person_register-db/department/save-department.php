<?php

    $department_cod = $_REQUEST["department_cod"];
    $department_name = $_REQUEST["department_name"];

    //Connect DataBase
    $host = "localhost";
    $dbname = "person_register";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);

    //Build SQL Sentence
    $sql = "INSERT INTO department (id, department_cod, department_name) VALUES (NULL, '$department_cod', '$department_name');";

    //Prepare SQL Sentence
    $q = $cnx->prepare($sql);

    //Execute SQL Sentence
    $result = $q->execute();

    if($result){
        echo "Department saved successfully";
    }
    else{
        echo "There was an error creating the Department $department_name";
    }

?>