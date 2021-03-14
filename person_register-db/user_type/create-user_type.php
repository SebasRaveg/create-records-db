<?php
    //DB Connection
    include("connection_db.php");
?>
<?php

    $user_type = $_REQUEST["user_type"];
    $description = $_REQUEST["description"];

    if(isset($_POST["btn"])){
        $VBoton=$_POST["btn"];
        
        if($VBoton=="Save User"){
            //Build SQL Sentence
            $sql = "INSERT INTO user_type (id, user_type, description) VALUES (NULL, '$user_type', '$description');";
            //Prepare SQL Sentence
		    $q = $cnx->prepare($sql);
            //Execute SQL Sentence
            $result = $q->execute();
            echo "<script> alert('User Type $user_type saved successfully');</script>";
		}
        else{
            echo "<script> alert(There was an error creating the User Type $user_type);</script>";
        }
    }
?>

<!Doctype html>
<html lang="en">
  <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/styles.css">
    
     <title> Create User Type </title>

  </head>
  <body>
      <form action="create-user_type.php" method="POST">
            <p>
                <label for="user_type" class="put_user"> User Type </label>
                <input type="text" name="user_type" id="user_type">
            </p>
            <p>
                <label for="description" class="put_description"> Description</label>                     
                <textarea name="description" class="text_description" id="description"></textarea> 
            </p> 
        
            <input type="submit" name="btn" value="Save User">
      </form>

  </body>
</html>