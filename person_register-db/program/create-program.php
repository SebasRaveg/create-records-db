<?php
    //DB Connection
    include("connection_db.php");
?>

<?php

    $faculty = $_REQUEST["faculty"];
    $program_cod= $_REQUEST["program_cod"];
    $program_name = $_REQUEST["program_name"];

    if(isset($_POST["btn"])){
        $VBoton=$_POST["btn"];
        
        if($VBoton=="Save Program"){
            //Build SQL Sentence
            $sql = "INSERT INTO program (id, faculty_id, program_cod, program_name) VALUES (NULL, '$faculty', '$program_cod', '$program_name');";
            //Prepare SQL Sentence
		    $q = $cnx->prepare($sql);
            //Execute SQL Sentence
            $result = $q->execute();
            echo "<script> alert('Program $program_name saved successfully');</script>";
		}
        else{
            echo "<script> alert(There was an error creating the Program $program_name);</script>";
        }
    }
?>

<?php

    $faculty = $_REQUEST["faculty"];

    //Build SQL Sentence
    $sql = "SELECT id, faculty_name FROM faculty";
    //Prepare SQL Sentence
    $q = $cnx->prepare($sql);
    //Execute SQL Sentence
    $result = $q->execute();
    $faculty = $q->fetchAll();

?>

<!Doctype html>
<html lang="en">
  <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/styles.css">
    
     <title> Create Program</title>

  </head>
  <body>
      <form action="create-program.php" method="POST">
            <p>
                <label for="faculty" class="put_faculty"> Faculty </label>
                <select name="faculty" id="faculty">
                    <option> Select a Faculty</option>
                    <?php
                        for($i=0; $i<count($faculty); $i++){
                    ?>

                    <option value="<?php echo $faculty[$i]["id"]?>">
                            <?php echo $faculty[$i]["faculty_name"]?>
                    </option> 

                    <?php
                        }
                    ?>
                </select>
            </p>

            <p>
                <label for="program_cod" class="put_program_cod"> Program Code </label>
                <input type="text" name="program_cod" id="program_cod">
            </p>

            <p>
                <label for="program_name" class="put_program_name"> Program Name </label>
                <input type="text" name="program_name" id="program_name">
            </p>

            <input type="submit" name="btn" value="Save Program">
      </form>

  </body>
</html>