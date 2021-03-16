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

     <link rel="stylesheet" href="./css/styles.css">
     <link rel="stylesheet" href="./css/styleform.css">
     <script src="https://kit.fontawesome.com/58a0b94311.js" crossorigin="anonymous"></script>
    
     <title> Create Program</title>

  </head>
  <body>
        <header>
            <div class="header-content">
                <div class="name">
                    <h1> </h1>
                </div>

                <div class="menu">
                    <nav>
                        <ul>
                            <li class="nav-item"><a href="./index.html" > Home</a></li>
                            <li class="nav-item"><a href="./create-person.php"> Register Person </a></li>
                            <li class="nav-item"><a href="./create-user_type.php"> Create User Type </a></li>
                            <li class="nav-item"><a href="./create-document_type.php"> Create Document Type </a></li>
                            <li class="nav-item"><a href="./create-faculty.php"> Create Faculty</a></li>
                            <li class="nav-item-active"><a href="./create-program.php" class="text-nav-item-active"> Create Program </a></li>
                            <li class="nav-item"><a href="./create-department.php"> Create Department </a></li>
                            <li class="nav-item"><a href="./create-municipality.php"> Create Municipality </a></li>
                            <li class="nav-item"><a href="./create-health_provider.php"> Create Health Provider </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <div class="contact_form">

            <h2> Enter the Program </h2>
            <br>
            <hr>
            <br>
            <p class="advise">
                <span class="requires"> * </span> The fields are required 
            </p> 
            <br>

            <form action="create-program.php" method="POST">
                <p>
                    <label for="faculty" class="put_faculty"> Faculty <span class="required">*</span></label>
                    <select name="faculty" id="faculty" required="required">
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
                    <label for="program_cod" class="put_program_cod"> Program Code <span class="required">*</span></label>
                    <input type="text" name="program_cod" id="program_cod" required="required">
                </p>
                <p>
                    <label for="program_name" class="put_program_name"> Program Name <span class="required">*</span></label>
                    <input type="text" name="program_name" id="program_name" required="required">
                </p>

                <button type="submit" name="btn" value="Save Program"><p> Save Program</p></button>
            </form>
        </div>

        <div class="container-footer">
            <footer>
                <div class="name-footer">
                    <h1> Register Aplication </h1>
                </div>
                <div class="social-footer">
                    <a href="https://www.facebook.com/sebasrave33/"><i class="fab fa-facebook-f icon-social"></i></a>
                    <a href="https://github.com/SebasRaveg"><i class="fab fa-github icon-social"></i></a>
                    <a href="https://www.linkedin.com/in/sebastian-rave-gomez-1281a21b1/"><i class="fab fa-linkedin-in icon-social"></i></a>
                </div>

                <hr>
                <h4> by Sebastian Rave Gomez // 2021</h4>
            </footer>
        </div>
  </body>
</html>