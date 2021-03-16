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

     <link rel="stylesheet" href="./css/styles.css">
     <link rel="stylesheet" href="./css/styleform.css">
     <script src="https://kit.fontawesome.com/58a0b94311.js" crossorigin="anonymous"></script>
    
     <title> Create Municipality</title>

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
                            <li class="nav-item"><a href="./create-user_type.php" > Create User Type </a></li>
                            <li class="nav-item"><a href="./create-document_type.php"> Create Document Type </a></li>
                            <li class="nav-item"><a href="./create-faculty.php"> Create Faculty</a></li>
                            <li class="nav-item"><a href="./create-program.php"> Create Program </a></li>
                            <li class="nav-item"><a href="./create-department.php"> Create Department </a></li>
                            <li class="nav-item-active"><a href="./create-municipality.php" class="text-nav-item-active"> Create Municipality </a></li>
                            <li class="nav-item"><a href="./create-health_provider.php"> Create Health Provider </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <div class="contact_form">

            <h2> Enter the Municipality </h2>
            <br>
            <hr>
            <br>
            <p class="advise">
                <span class="requires"> * </span> The fields are required 
            </p> 
            <br>

            <form action="create-municipality.php" method="POST">
                <p>
                    <label for="department" class="put_department"> Department <span class="required">*</span></label>
                    <select name="department" id="department" required="required">
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
                    <label for="municipality_cod" class="put_municipality_cod"> Municipality Code <span class="required">*</span></label>
                    <input type="text" name="municipality_cod" id="municipality_cod" required="required">
                </p>
                <p>
                    <label for="municipality_name" class="put_municipality_name"> Municipality Name <span class="required">*</span></label>
                    <input type="text" name="municipality_name" id="municipality_name" required="required">
                </p>
        
                <button type="submit" name="btn" value="Save Municipality"><p> Save Municipality</p></button>
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