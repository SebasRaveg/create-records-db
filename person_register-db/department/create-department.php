<!Doctype html>
<html lang="en">
  <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/styles.css">
    
     <title> Create Department </title>

  </head>
  <body>
      <form action="save-department.php" method="POST">
            <p>
                <label for="department_cod" class="put_department_cod"> Department Code </label>
                <input type="text" name="department_cod" id="department_cod">
            </p>

            <p>
                <label for="department_name" class="put_department_name"> Department Name </label>
                <input type="text" name="department_name" id="department_name">
            </p>
        
            <input type="submit" value="Save Department">
      </form>

  </body>
</html>