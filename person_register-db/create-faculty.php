<?php
    //DB Connection
    include("connection_db.php");
?>
<?php

    $faculty_cod = $_REQUEST["faculty_cod"];
    $faculty_name = $_REQUEST["faculty_name"];

    if(isset($_POST["btn"])){
        $VBoton=$_POST["btn"];
        
        if($VBoton=="Save Faculty"){
            //Build SQL Sentence
            $sql = "INSERT INTO faculty (id, faculty_cod, faculty_name) VALUES (NULL, '$faculty_cod', '$faculty_name');";
            //Prepare SQL Sentence
		    $q = $cnx->prepare($sql);
            //Execute SQL Sentence
            $result = $q->execute();
            echo "<script> alert('$faculty_name saved successfully');</script>";
		}
        else{
            echo "<script> alert(There was an error creating the $faculty_name);</script>";
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
    
     <title> Create Faculty </title>

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
                            <li class="nav-item-active"><a href="./create-faculty.php" class="text-nav-item-active"> Create Faculty</a></li>
                            <li class="nav-item"><a href="./create-program.php"> Create Program </a></li>
                            <li class="nav-item"><a href="./create-department.php"> Create Department </a></li>
                            <li class="nav-item"><a href="./create-municipality.php"> Create Municipality </a></li>
                            <li class="nav-item"><a href="./create-health_provider.php"> Create Health Provider </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <div class="contact_form">

            <h2> Enter the Faculty </h2>
            <br>
            <hr>
            <br>
            <p class="advise">
                <span class="requires"> * </span> The fields are required 
            </p> 
            <br>

            <form action="create-faculty.php" method="POST">
                <p>
                    <label for="faculty_cod" class="put_faculty_cod"> Faculty Code <span class="required">*</span></label>
                    <input type="text" name="faculty_cod" id="faculty_cod" required="required">
                </p>
                <p>
                    <label for="faculty_name" class="put_faculty_name"> Faculty Name <span class="required">*</span></label>
                    <input type="text" name="faculty_name" id="faculty_name" required="required">
                </p>
        
                <button type="submit" name="btn" value="Save Faculty"><p> Save Faculty</p></button>
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