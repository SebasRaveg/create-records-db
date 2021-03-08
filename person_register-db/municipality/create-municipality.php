<?php

    $department = $_REQUEST["department"];

    //Connect DataBase
    $host = "localhost";
    $dbname = "person_register";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);

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
      <form action="save-municipality.php" method="POST">
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
        
            <input type="submit" value="Save Municipality">
      </form>

  </body>
</html>