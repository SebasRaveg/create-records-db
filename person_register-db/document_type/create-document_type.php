<!Doctype html>
<html lang="en">
  <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/styles.css">
    
     <title> Create Document Type </title>

  </head>
  <body>
      <form action="save-document_type.php" method="POST">
            <p>
                <label for="document_type" class="put_document"> Document Type </label>
                <input type="text" name="document_type" id="document_type">
            </p>
            <p>
                <label for="description" class="put_description"> Description</label>                     
                <textarea name="description" class="text_description" id="description"></textarea> 
            </p> 
        
            <input type="submit" value="Save Document">
      </form>

  </body>
</html>