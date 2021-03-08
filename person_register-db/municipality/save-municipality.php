<?php

    $department = $_REQUEST["department"];
    $municipality_cod= $_REQUEST["municipality_cod"];
    $municipality_name = $_REQUEST["municipality_name"];

    //Connect DataBase
    $host = "localhost";
    $dbname = "person_register";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);

    //Build SQL Sentence
    $sql = "INSERT INTO municipality (id, department_id, municipality_cod, municipality_name) VALUES (NULL, '$department', '$municipality_cod', '$municipality_name');";

    //Prepare SQL Sentence
    $q = $cnx->prepare($sql);

    //Execute SQL Sentence
    $result = $q->execute();

    if($result){
        echo "Municipality saved successfully";
    }
    else{
        echo "There was an error creating the Municipality $municipality_name";
    }

?>

