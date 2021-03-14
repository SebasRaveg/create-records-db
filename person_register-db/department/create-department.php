<?php
    //DB Connection
    include("connection_db.php");
?>
<?php

    $department_cod = $_REQUEST["department_cod"];
    $department_name = $_REQUEST["department_name"];

    if(isset($_POST["btn"])){
        $VBoton=$_POST["btn"];
        
        if($VBoton=="Save Department"){
            //Build SQL Sentence
            $sql = "INSERT INTO department (id, department_cod, department_name) VALUES (NULL, '$department_cod', '$department_name');";
            //Prepare SQL Sentence
		    $q = $cnx->prepare($sql);
            //Execute SQL Sentence
            $result = $q->execute();
            echo "<script> alert('Department $department_name saved successfully');</script>";
		}
        else{
            echo "<script> alert(There was an error creating the Department $department_name);</script>";
        }
    }
?>

<!Doctype html>
<html lang="en">
  <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/styles.css">
    
     <title> Create Department </title>

  </head>
  <body>
      <form action="create-department.php" method="POST">
            <p>
                <label for="department_cod" class="put_department_cod"> Department Code </label>
                <input type="text" name="department_cod" id="department_cod">
            </p>

            <p>
                <label for="department_name" class="put_department_name"> Department Name </label>
                <input type="text" name="department_name" id="department_name">
            </p>
        
            <input type="submit" name="btn" value="Save Department">
      </form>

  </body>
</html>