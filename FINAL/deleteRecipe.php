<?php
    

    $deleteId = $_GET['recipeId'];

try {
    require 'dbConnect.php';

    $sql = "DELETE FROM recipe_data WHERE recipe_id=:recipeId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':recipeId', $deleteId);
    $stmt->execute();

}

catch(PDOException $e){
    //echo "Errors: " . $e->getMessage();
    $numDeletes= -1;
}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="recipeManager/styles.css">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     h1 {
            font-family:'dancing script';
            font-size: 4em;
            color:white;
            text-shadow: 1px 1px 1px black;
            display:flex;
            justify-content:center;
        }
        .btn {
            background-color:#F6F2D4;
            border:.2em solid #5584AC;
            border-radius:5%;
            width:40%;
            margin-left:29%;
            margin-top:5%;
            box-shadow:2px 2px 2px black;
            
        }

        .btn:hover {
            background-color:#5584AC;
            border:.7em solid #F6F2D4 ;
            border-radius:5%;
            color:white;
    }

    #return {
        text-decoration:none;
        color:black;
    }

    #return:hover {
        text-decoration:none;
        color:white;
    }
       
</style>
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
<?php
echo "<h1>  " . $stmt->rowCount() . ": Recipe Successfully Deleted</h1>";
?>
<hr>

    <div class="row justify-content-center btn btn-outline-secondary">
        <a id="return" href="selectRecipe.php">Return to List</a>
    </div>





        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <p class="pt-3 text-center footer-text"> Copyright &copy; 2021 All Rights Reserved. Mama's Cookbook.</p>
                    </div>
                </div>
            </div>
        </footer>
        
</div>
</body>
</html>