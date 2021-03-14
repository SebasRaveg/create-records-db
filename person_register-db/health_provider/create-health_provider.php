<?php
    //DB Connection
    include("connection_db.php");
?>
<?php

    $health_provider_cod = $_REQUEST["health_provider_cod"];
    $health_provider_name = $_REQUEST["health_provider_name"];
    $health_provider_phone = $_REQUEST["health_provider_phone"];

    if(isset($_POST["btn"])){
        $VBoton=$_POST["btn"];
        
        if($VBoton=="Save Health Provider"){
            //Build SQL Sentence
            $sql = "INSERT INTO health_provider (id, health_provider_cod,  health_provider_name, health_provider_phone) VALUES (NULL, '$health_provider_cod', '$health_provider_name', '$health_provider_phone');";
            //Prepare SQL Sentence
		    $q = $cnx->prepare($sql);
            //Execute SQL Sentence
            $result = $q->execute();
            echo "<script> alert('Health Provider $health_provider_name saved successfully');</script>";
		}
        else{
            echo "<script> alert(There was an error creating the Health Provider $health_provider_name);</script>";
        }
    }
?>

<!Doctype html>
<html lang="en">
  <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/styles.css">
    
     <title> Create Health Provider </title>

  </head>
  <body>
      <form action="create-health_provider.php" method="POST">
            <p>
                <label for="health_provider_cod" class="put_health_provider_cod"> Health Provider Code </label>
                <input type="text" name="health_provider_cod" id="health_provider_cod">
            </p>

            <p>
                <label for="health_provider_name" class="put_health_provider_name"> Health Provider Name </label>
                <input type="text" name="health_provider_name" id="health_provider_name">
            </p>

            <p>
                <label for="health_provider_phone" class="put_health_provider_phone"> Health Provider Phone </label>
                <input type="number" name="health_provider_phone" id="health_provider_phone">
            </p>
        
            <input type="submit" name="btn" value="Save Health Provider">
      </form>

  </body>
</html>