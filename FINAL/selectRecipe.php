<?php
    include 'dbConnect.php';

try {
    $sql = "SELECT * FROM recipe_data";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // echo "<h1> Number of Recipes: " . $stmt->rowCount() . "</h1>";


    // $result = $stmt->fetch(PDO::FETCH_ASSOC);
    // echo $result['events_id'];
    // echo $result['events_name'];

   
}

catch(PDOException $e) {
    echo "Errors" . $e->getMessage();
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

    <style>
      .deleteContainer{
        width:40%;
        margin-top:5em;
            background-color:#F6F2D4;
            border:.9em solid #5584AC;
            display:flex;
            flex-direction:column;
            padding-left:1.2em;
            padding-top:1.2em;
            margin-top:2em;
            margin-left:25em;
            margin-right:20em;
            border-radius:5%;
            box-shadow:2px 2px 2px black;
      }

      a {
        background-color:#5584AC;
        color:white;
        padding:.2em;
        border-radius:5%;
      }

      a:hover {
        text-decoration:none;
        color:white;
        transform: perspective(800px) translate3d(0px, 0px, 20px) rotateX(5deg) scale(.9);
	      box-shadow: 2px 2px 5px black;
      }

      #navLink {
        background-color:#f6f2d4;
      }
      h1 {
      font-family:'dancing script';
            font-size: 5em;
            color:white;
            text-shadow: 1px 1px 1px black;
        }
     

      
    </style>

</head>
<body>
<div id="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a id="navLink" class="nav-link" href="recipeManager/index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a id="navLink" class="nav-link" href="recipeManager/contact.html">CONTACT</a>
                </li>
                <li class="nav-item">
                  <a id="navLink" class="nav-link" href="login.php">LOGIN</a>
                </li>
              </ul>
              
            </div>
        </nav>
    <h1 class="row justify-content-center">Delete a Recipe!</h1>
    <hr>

  <div class="deleteContainer">
<?php
     foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {

        echo "<h3>";
        echo $row['recipe_name'];
        echo "</h3>";
        echo "<div> Recpipe Serving: ";
        echo $row['recipe_serving'];
        echo "</div>";
        echo "<p> <a href='deleteRecipe.php?recipeId=" . $row["recipe_id"] . "'> Delete Recipe </a> </p>";
    }
?>

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