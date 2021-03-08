<?php

    $user_type = $_REQUEST["user_type"];
    $document_type = $_REQUEST["document_type"];
    $municipality = $_REQUEST["municipality"];
    $program = $_REQUEST["program"];
    $health_provider = $_REQUEST["health_provider"];

    //Connect DataBase
    $host = "localhost";
    $dbname = "person_register";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);

    //Build SQL Sentence
    $sql = "SELECT id, user_type FROM user_type";
    //Prepare SQL Sentence
    $q = $cnx->prepare($sql);
    //Execute SQL Sentence
    $result = $q->execute();
    $user_type = $q->fetchAll();

    //Build SQL Sentence
    $sql = "SELECT id, document_type FROM document_type";
    //Prepare SQL Sentence
    $q = $cnx->prepare($sql);
    //Execute SQL Sentence
    $result = $q->execute();
    $document_type = $q->fetchAll();

    //Build SQL Sentence
    $sql = "SELECT id, municipality_name FROM municipality";
    //Prepare SQL Sentence
    $q = $cnx->prepare($sql);
    //Execute SQL Sentence
    $result = $q->execute();
    $municipality = $q->fetchAll();

    //Build SQL Sentence
    $sql = "SELECT id, program_name FROM program";
    //Prepare SQL Sentence
    $q = $cnx->prepare($sql);
    //Execute SQL Sentence
    $result = $q->execute();
    $program = $q->fetchAll();

    //Build SQL Sentence
    $sql = "SELECT id, health_provider_name FROM health_provider";
    //Prepare SQL Sentence
    $q = $cnx->prepare($sql);
    //Execute SQL Sentence
    $result = $q->execute();
    $health_provider = $q->fetchAll();
?>

<!Doctype html>
<html lang="en">
  <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/styles.css">
    
     <title> Create Person </title>

  </head>
  <body>
      <form action="save-person.php" method="POST">
            <p>
                <label for="user_type" class="put_user_type"> User Type </label>
                <select name="user_type" id="user_type">
                    <option> Select a User Type</option>
                    <?php
                        for($i=0; $i<count($user_type); $i++){
                    ?>

                    <option value="<?php echo $user_type[$i]["id"]?>">
                            <?php echo $user_type[$i]["user_type"]?>
                    </option> 

                    <?php
                        }
                    ?>
                </select>
            </p>   

            <p>
                <label for="document_type" class="put_document_type"> Document Type </label>
                <select name="document_type" id="document_type">
                    <option> Select a Document Type</option>
                    <?php
                        for($i=0; $i<count($document_type); $i++){
                    ?>

                    <option value="<?php echo $document_type[$i]["id"]?>">
                            <?php echo $document_type[$i]["document_type"]?>
                    </option> 

                    <?php
                        }
                    ?>
                </select>
            </p>

            <p>
                <label for="document_number" class="document_number"> Document Number </label>
                <input type="number" name="document_number" id="document_number">
            </p>

            <p>
                <label for="names" class="put_names"> Name </label>
                <input type="text" name="names" id="names">
            </p>

            <p>
                <label for="surnames" class="put_surnames"> Surnames </label>
                <input type="text" name="surnames" id="surnames">
            </p>

            <p>
                <label for="age" class="put_age"> Age </label>
                <input type="number" name="age" id="age">
            </p>

            <p>
                <label for="email" class="put_email"> Email </label>
                <input type="email" name="email" id="email">
            </p>

            <p>
                <label for="municipality" class="put_municipality"> Municipality </label>
                <select name="municipality" id="municipality">
                    <option> Select a Municipality</option>
                    <?php
                        for($i=0; $i<count($municipality); $i++){
                    ?>

                    <option value="<?php echo $municipality[$i]["id"]?>">
                            <?php echo $municipality[$i]["municipality_name"]?>
                    </option> 

                    <?php
                        }
                    ?>
                </select>
            </p>

            <p>
                <label for="neighborhood" class="put_neighborhood"> Neighborhood </label>
                <input type="text" name="neighborhood" id="neighborhood">
            </p>

            <p>
                <label for="address" class="put_address"> Address </label>
                <input type="text" name="address" id="address">
            </p>

            <p>
                <label for="program" class="put_program"> Program </label>
                <select name="program" id="program">
                    <option> Select a Program</option>
                    <?php
                        for($i=0; $i<count($program); $i++){
                    ?>

                    <option value="<?php echo $program[$i]["id"]?>">
                            <?php echo $program[$i]["program_name"]?>
                    </option> 

                    <?php
                        }
                    ?>
                </select>
            </p>

            <p>
                <label for="code" class="put_code"> Student Code </label>
                <input type="text" name="code" id="coode">
            </p>

            <p>
                <label for="health_provider" class="put_health_provider"> Health Provider </label>
                <select name="health_provider" id="health_provider">
                    <option> Select a Health Provider</option>
                    <?php
                        for($i=0; $i<count($health_provider); $i++){
                    ?>

                    <option value="<?php echo $health_provider[$i]["id"]?>">
                            <?php echo $health_provider[$i]["health_provider_name"]?>
                    </option> 

                    <?php
                        }
                    ?>
                </select>
            </p>

            <p>
                <label for="medical_preexistence" class="put_medical_preexistence"> Medical Preexistence</label>                     
                <textarea name="medical_preexistence" class="text_medical_preexistence" id="medical_preexistence"></textarea> 
            </p> 
        
            <input type="submit" value="Save Person">
      </form>

  </body>
</html>