<!Doctype html>
<html lang="en">
  <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/styles.css">
    
     <title> Create Health Provider </title>

  </head>
  <body>
      <form action="save-health_provider.php" method="POST">
            <p>
                <label for="health_provider_cod" class="put_health_provider_cod"> Health Provider Code </label>
                <input type="text" name="health_provider_cod" id="health_provider_cod">
            </p>

            <p>
                <label for="health_provider_name" class="put_health_provider_name"> Health Provider Name </label>
                <input type="text" name="health_provider_name" id="health_provider_name">
            </p>

            <p>
                <label for="health_provider_phone" class="put_health_provider_phone"> Health Provider Phone </label>
                <input type="number" name="health_provider_phone" id="health_provider_phone">
            </p>
        
            <input type="submit" value="Save Health Provider">
      </form>

  </body>
</html>