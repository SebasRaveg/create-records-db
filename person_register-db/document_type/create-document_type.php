<?php
    //DB Connection
    include("connection_db.php");
?>
<?php

    $document_type = $_REQUEST["document_type"];
    $description = $_REQUEST["description"];

    if(isset($_POST["btn"])){
        $VBoton=$_POST["btn"];
        
        if($VBoton=="Save Document"){
            //Build SQL Sentence
            $sql = "INSERT INTO document_type (id, document_type, description) VALUES (NULL, '$document_type', '$description');";
            //Prepare SQL Sentence
		    $q = $cnx->prepare($sql);
            //Execute SQL Sentence
            $result = $q->execute();
            echo "<script> alert('Document Type $document_type saved successfully');</script>";
		}
        else{
            echo "<script> alert(There was an error creating the Document Type $document_type);</script>";
        }
    }
?>

<!Doctype html>
<html lang="en">
  <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/styles.css">
    
     <title> Create Document Type </title>

  </head>
  <body>
      <form action="create-document_type.php" method="POST">
            <p>
                <label for="document_type" class="put_document"> Document Type </label>
                <input type="text" name="document_type" id="document_type">
            </p>
            <p>
                <label for="description" class="put_description"> Description</label>                     
                <textarea name="description" class="text_description" id="description"></textarea> 
            </p> 
        
            <input type="submit" name="btn" value="Save Document">
      </form>

  </body>
</html>