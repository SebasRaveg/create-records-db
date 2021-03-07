<!Doctype html>
<html lang="en">
  <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/styles.css">
    
     <title> Create User Type </title>

  </head>
  <body>
      <form action="save-user_type.php" method="POST">
            <p>
                <label for="user_type" class="put_user"> User Type </label>
                <input type="text" name="user_type" id="user_type">
            </p>
            <p>
                <label for="description" class="put_description"> Description</label>                     
                <textarea name="description" class="text_description" id="description"></textarea> 
            </p> 
        
            <input type="submit" value="Save User">
      </form>

  </body>
</html>