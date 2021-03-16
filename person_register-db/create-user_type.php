<!-- PHP CODE DB -->
<?php
    //DB Connection
    include("connection_db.php");
?>
<?php

    $user_type = $_REQUEST["user_type"];
    $description = $_REQUEST["description"];

    if(isset($_POST["btn"])){
        $VBoton=$_POST["btn"];
        
        if($VBoton=="Save User"){
            //Build SQL Sentence
            $sql = "INSERT INTO user_type (id, user_type, description) VALUES (NULL, '$user_type', '$description');";
            //Prepare SQL Sentence
		    $q = $cnx->prepare($sql);
            //Execute SQL Sentence
            $result = $q->execute();
            echo "<script> alert('User Type $user_type saved successfully');</script>";
		}
        else{
            echo "<script> alert(There was an error creating the User Type $user_type);</script>";
        }
    }
?>

<!-- HTML CODE -->
<!Doctype html>
<html lang="en">
  <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="./css/styles.css">
     <link rel="stylesheet" href="./css/styleform.css">
     <script src="https://kit.fontawesome.com/58a0b94311.js" crossorigin="anonymous"></script>
    
     <title> Create User Type </title>

  </head>
  <body>
        <header>
            <div class="header-content">
                <div class="menu">
                    <nav>
                        <ul>
                            <li class="nav-item"><a href="./index.html" > Home</a></li>
                            <li class="nav-item"><a href="./create-person.php"> Register Person </a></li>
                            <li class="nav-item-active"><a href="./create-user_type.php" class="text-nav-item-active"> Create User Type </a></li>
                            <li class="nav-item"><a href="./create-document_type.php"> Create Document Type </a></li>
                            <li class="nav-item"><a href="./create-faculty.php"> Create Faculty</a></li>
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

                <h2> Enter the Type of User </h2>
                <br>
                <hr>
                <br>
                <p class="advise">
                    <span class="requires"> * </span> The fields are required 
                </p> 
                <br>

            <form action="create-user_type.php" method="POST">
                <p>
                    <label for="user_type" class="put_user"> User Type <span class="required">*</span></label>
                    <input type="text" name="user_type" id="user_type" required="required">
                </p>
                <p>
                    <label for="description" class="put_description"> Description <span>Optional</span></label>                     
                    <textarea name="description" class="text_description" id="description"></textarea> 
                </p> 
                
                <button type="submit" name="btn" value="Save User"><p> Save User</p></button>
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