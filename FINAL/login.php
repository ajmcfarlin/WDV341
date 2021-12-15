<?php

    session_start();
    /* 

    if(form is submitted){
        process form data
        do database stuff
    }
    else{
        display form
    }

    isset(_POST)

    */

    $validUser = false;
    $errMsg = " ";

    if(isset($_POST['submit']) ) {
        // echo "Form has been submitted";

        $loginName = $_POST['loginName'];
        $loginPW = $_POST['loginPassword'];


        try{
            require "dbConnect.php";

            $sql = 'SELECT event_user_name, event_user_password FROM event_user WHERE event_user_name=:userName AND event_user_password=:userPW'; 
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':userName', $loginName);
            $stmt->bindParam(':userPW', $loginPW);


            $stmt->execute();

            // $count = $stmt->fetchColumn();

            // echo "Found $count rows in table";

            // if($count == ""){
            //     echo 'invalid username or password';
            // }
            // else {
            //     echo "Welcome back $count";
            // }


            $resultArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $numRows = count($resultArray);

            // echo "$numRows number of rows";

            if($numRows === 1){
                //set session variable for this user
                $_SESSION['validUser'] = true;

                $validUser = true;
                //valid user
                //display admin options
            }
            else {

                $errMsg = 'Sorry! invalid username or password';
                //invalid user
                //display from and error message
            }



            // echo "still working";
        }

        catch(PDOException $e) {
            
				$message = "There has been a problem. The system administrator has been contacted. Please try again later.";
	
				error_log($e->getMessage());			//Delivers a developer defined error message to the PHP log file at c:\xampp/php\logs\php_error_log
				error_log(var_dump(debug_backtrace()));
        }
        
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
        #loginForm {
            margin-top:5em;
            background-color:#F6F2D4;
            border:.9em solid #5584AC;
            display:flex;
            justify-content:center;
            margin-top:2em;
            margin-left:20em;
            margin-right:20em;
            border-radius:5%;
            box-shadow:2px 2px 2px black;
            
        }

        footer {
            margin-top: 20%;
        }

        h1 {
            font-family:'dancing script';
            font-size: 5em;
            color:white;
            text-shadow: 1px 1px 1px black;
        }

        @media only screen and (max-width: 500px) {
            #loginForm {
                margin-right:1em;
                margin-left:1em;
            }
        }

        input[type="submit"]{
            background-color:#5584AC;
            color:white;
        }

        input[type="submit"]:hover{
            transform: perspective(800px) translate3d(0px, 0px, 20px) rotateX(5deg) scale(.9);
	        box-shadow: 2px 2px 5px black;
        }
        input[type="reset"]:hover{
            transform: perspective(800px) translate3d(0px, 0px, 20px) rotateX(5deg) scale(.9);
	        box-shadow: 2px 2px 5px black;
        }

        h3 {
            font-family:'dancing script';
            font-size: 4em;
            color:white;
            text-shadow: 1px 1px 1px black;
        }
        h2 {
            display:flex;
            justify-content:center;
            margin-top:2em;
        }

        .adminOptions {
            background-color:#F6F2D4;
            width:20em;
            font-size:1.2em;
        }
        .adminOptions:hover{
            background-color:#F6F2D4;
            color:#22577E;
            transform: perspective(800px) translate3d(0px, 0px, 20px) rotateX(5deg) scale(.9);
	        box-shadow: 2px 2px 5px black;
        }

        .logOffBtn {
            background-color:#5584AC;
            color:white;
        }
        .logOffBtn:hover{
            background-color:#5584AC;
            transform: perspective(800px) translate3d(0px, 0px, 20px) rotateX(5deg) scale(.9);
	        box-shadow: 2px 2px 5px black;
        }
       
    </style>
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

<?php

        if($validUser){
            
        //if you have a valid user display block 1 else block 2
?>


    <div>
        <h3 class="row justify-content-center mt-4">Welcome, Admin!</h3>
        <hr>
        <ul>
            <li class=" mt-5 row justify-content-center">
                <a class="adminOptions btn btn-outline-secondary" href="inputRecipe.php">Add Recipe</a>
            </li>
            <li class=" mt-4 row justify-content-center">
                <a class="adminOptions btn btn-outline-secondary" href="selectRecipe.php">Delete Recipe</a>
                        
            </li>
            <li class=" row mt-4 justify-content-center">
                <a class="logOffBtn btn btn-outline-secondary" href="logout.php">Log Off</a>
            </li>
        </ul>
    </div>

<?php
        }
        else{
            echo "<h2>$errMsg</h2>";

?>

    <h1 class="row justify-content-center">Login</h1>
    
    <hr>
    <div id="loginForm" class="row py-5 justify-content-center">
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="loginName">Username:</label>
                <input type="text" name="loginName" id="loginName">
            </div>

            <div class="form-group">
                <label for="loginPassword">Password:</label>
                <input type="password" name="loginPassword" id="loginPassword">
            </div>

            <!-- <div class=" row justify-content-center mt-5">
                    <input class="col-5 mr-2l" type="reset">
                    <input class="col-5" type="submit" id="submit" value="Submit">
            </div> -->
            <div class="row ml-2 justify-content-center">
                <input class="col-4 mr-2" name="submit" type="submit" value="Submit">
                <input class="col-4" type="reset">
            </div>
        </form>
    </div>

<?php
        }
?>
    
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