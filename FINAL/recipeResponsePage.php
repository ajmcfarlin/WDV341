<?php
    //set the id of the record we just entered
    //access the database to get the record we just entered
    //use that info on this page to personalize the confirmation message

    $eventId = $_GET['recipe_id'];

    // echo "<h3> you entered a new record with an id of $recipe. We will look that information up in the database and display it.";



    try{
        require "dbConnect.php";

        $sql = 'SELECT recipe_name, recipe_serving, recipe_time FROM recipe_data WHERE recipe_id (recipe_name,recipe_serving, recipe_time) VALUES 
        (:recipeName,:recipeServ,recipeTime;)';

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':recipeName', $recipeName);
        $stmt->bindParam(':recipeServ', $recipeServ);
        $stmt->bindParam(':recipeTime', $recipeTime);


        $stmt->execute();

        echo "still working";
        $recipeRecord = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo $recipeRecord['recipe_name'];

    }

    catch(PDOException $e) {
        
            $message = "There has been a problem. The system administrator has been contacted. Please try again later.";

            error_log($e->getMessage());			//Delivers a developer defined error message to the PHP log file at c:\xampp/php\logs\php_error_log
            error_log(var_dump(debug_backtrace()));
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="recipeManager/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<div id="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="" alt=""></a>
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link" href="recipeManager/index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recipeManager/contact.html">CONTACT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">LOGIN</a>
                </li>
              </ul>
              
            </div>
        </nav>

   

    <h3><?php echo $recipeRecord['recipe_name']; ?> Has been added to the cookbook!</h3>

</div>
    
</body>
</html>