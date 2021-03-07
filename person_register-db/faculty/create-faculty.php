<!Doctype html>
<html lang="en">
  <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/styles.css">
    
     <title> Create Faculty </title>

  </head>
  <body>
      <form action="save-faculty.php" method="POST">
            <p>
                <label for="faculty_cod" class="put_faculty_cod"> Faculty Code </label>
                <input type="text" name="faculty_cod" id="faculty_cod">
            </p>

            <p>
                <label for="faculty_name" class="put_faculty_name"> Faculty Name </label>
                <input type="text" name="faculty_name" id="faculty_name">
            </p>
        
            <input type="submit" value="Save Faculty">
      </form>

  </body>
</html>