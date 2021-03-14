<?php
    //DB Connection
    include("connection_db.php");
?>

<?php

    $department = $_REQUEST["department"];
    $municipality_cod= $_REQUEST["municipality_cod"];
    $municipality_name = $_REQUEST["municipality_name"];

    if(isset($_POST["btn"])){
        $VBoton=$_POST["btn"];
        
        if($VBoton=="Save Municipality"){
            //Build SQL Sentence
            $sql = "INSERT INTO municipality (id, department_id, municipality_cod, municipality_name) VALUES (NULL, '$department', '$municipality_cod', '$municipality_name');";
            //Prepare SQL Sentence
		    $q = $cnx->prepare($sql);
            //Execute SQL Sentence
            $result = $q->execute();
            echo "<script> alert('Municipality $municipality_name saved successfully');</script>";
		}
        else{
            echo "<script> alert(There was an error creating the Municipality $municipality_name);</script>";
        }
    }
?>

<?php

    $department = $_REQUEST["department"];
    
    //Build SQL Sentence
    $sql = "SELECT id, department_name FROM department";
    //Prepare SQL Sentence
    $q = $cnx->prepare($sql);
    //Execute SQL Sentence
    $result = $q->execute();
    $department = $q->fetchAll();

?>

<!Doctype html>
<html lang="en">
  <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/styles.css">
    
     <title> Create Municipality</title>

  </head>
  <body>
      <form action="create-municipality.php" method="POST">
            <p>
                <label for="department" class="put_department"> Department </label>
                <select name="department" id="department">
                    <option> Select a Department</option>
                    <?php
                        for($i=0; $i<count($department); $i++){
                    ?>

                    <option value="<?php echo $department[$i]["id"]?>">
                            <?php echo $department[$i]["department_name"]?>
                    </option> 

                    <?php
                        }
                    ?>
                </select>
            </p>

            <p>
                <label for="municipality_cod" class="put_municipality_cod"> Municipality Code </label>
                <input type="text" name="municipality_cod" id="municipality_cod">
            </p>

            <p>
                <label for="municipality_name" class="put_municipality_name"> Municipality Name </label>
                <input type="text" name="municipality_name" id="municipality_name">
            </p>
        
            <input type="submit" name="btn" value="Save Municipality">
      </form>

  </body>
</html>