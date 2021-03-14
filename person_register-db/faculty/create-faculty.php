<?php
    //DB Connection
    include("connection_db.php");
?>
<?php

    $faculty_cod = $_REQUEST["faculty_cod"];
    $faculty_name = $_REQUEST["faculty_name"];

    if(isset($_POST["btn"])){
        $VBoton=$_POST["btn"];
        
        if($VBoton=="Save Faculty"){
            //Build SQL Sentence
            $sql = "INSERT INTO faculty (id, faculty_cod, faculty_name) VALUES (NULL, '$faculty_cod', '$faculty_name');";
            //Prepare SQL Sentence
		    $q = $cnx->prepare($sql);
            //Execute SQL Sentence
            $result = $q->execute();
            echo "<script> alert('$faculty_name saved successfully');</script>";
		}
        else{
            echo "<script> alert(There was an error creating the $faculty_name);</script>";
        }
    }
?>

<!Doctype html>
<html lang="en">
  <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/styles.css">
    
     <title> Create Faculty </title>

  </head>
  <body>
      <form action="create-faculty.php" method="POST">
            <p>
                <label for="faculty_cod" class="put_faculty_cod"> Faculty Code </label>
                <input type="text" name="faculty_cod" id="faculty_cod">
            </p>

            <p>
                <label for="faculty_name" class="put_faculty_name"> Faculty Name </label>
                <input type="text" name="faculty_name" id="faculty_name">
            </p>
        
            <input type="submit" name="btn" value="Save Faculty">
      </form>

  </body>
</html>