<?php

    $faculty = $_REQUEST["faculty"];

    //Connect DataBase
    $host = "localhost";
    $dbname = "person_register";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);

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

            <input type="submit" value="Save program">
      </form>

  </body>
</html>