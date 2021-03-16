<?php
    //DB Connection
    include("connection_db.php");
?>
<?php

    $department_cod = $_REQUEST["department_cod"];
    $department_name = $_REQUEST["department_name"];

    if(isset($_POST["btn"])){
        $VBoton=$_POST["btn"];
        
        if($VBoton=="Save Department"){
            //Build SQL Sentence
            $sql = "INSERT INTO department (id, department_cod, department_name) VALUES (NULL, '$department_cod', '$department_name');";
            //Prepare SQL Sentence
		    $q = $cnx->prepare($sql);
            //Execute SQL Sentence
            $result = $q->execute();
            echo "<script> alert('Department $department_name saved successfully');</script>";
		}
        else{
            echo "<script> alert(There was an error creating the Department $department_name);</script>";
        }
    }
?>

<!Doctype html>
<html lang="en">
  <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="./css/styles.css">
     <link rel="stylesheet" href="./css/styleform.css">
     <script src="https://kit.fontawesome.com/58a0b94311.js" crossorigin="anonymous"></script>
    
     <title> Create Department </title>

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
                            <li class="nav-item-active"><a href="./create-department.php" class="text-nav-item-active"> Create Department </a></li>
                            <li class="nav-item"><a href="./create-municipality.php"> Create Municipality </a></li>
                            <li class="nav-item"><a href="./create-health_provider.php"> Create Health Provider </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <div class="contact_form">

            <h2> Enter the Department </h2>
            <br>
            <hr>
            <br>
            <p class="advise">
                <span class="requires"> * </span> The fields are required 
            </p> 
            <br>

            <form action="create-department.php" method="POST">
                <p>
                    <label for="department_cod" class="put_department_cod"> Department Code <span class="required">*</span></label>
                    <input type="text" name="department_cod" id="department_cod" required="required">
                </p>
                <p>
                    <label for="department_name" class="put_department_name"> Department Name <span class="required">*</span></label>
                    <input type="text" name="department_name" id="department_name" required="required">
                </p>

                <button type="submit" name="btn" value="Save Department"><p> Save Department</p></button>
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