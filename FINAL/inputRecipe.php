<?php



    if(isset($_POST['submit'])){

        $recipeName = $_POST['recipe_name'];
        $recipeServ = $_POST['recipe_serving'];
        $recipeTime = $_POST['recipe_time'];
        
        try{

            require 'dbConnect.php';

            $sql = 'INSERT INTO recipe_data (recipe_name,recipe_serving,recipe_time,) VALUES 
            (:recipeName,:recipeServe,:recipeTime)';

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':recipeName', $recipeName);
            $stmt->bindParam(':recipeServe', $recipeServ);
            $stmt->bindParam(':recipeTime', $recipeTime);

            // echo "working so far";

            $stmt->execute();

            
            header('Location: recipeResponsePage.php');

            
        }

        catch(PDOException $e) {
            
				$message = "There has been a problem. The system administrator has been contacted. Please try again later.";
	
				error_log($e->getMessage());			//Delivers a developer defined error message to the PHP log file at c:\xampp/php\logs\php_error_log
				error_log(var_dump(debug_backtrace()));
    }
}

    else {
        
    ?>


<?php
    }
?> -->

<html>
<head>
<meta charset="utf-8">
<title>Add Recipe</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src = "validateRecipe.js"></script>
<link rel = "stylesheet" type = "text/css" href = "css/admin.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="recipeManager/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">

<style>
    h1{
        font-family:'dancing script';
        font-size: 5em;
        color:white;
        text-shadow: 1px 1px 1px black;
    }

    #recipeForm {
        background-color:#f6f2d4;
        border:.9em solid #5584AC;
        border-radius:5%;
        box-shadow:2px 2px 2px black;
        width:50%;
        margin-left:25%;
        display:flex;
        flex-direction:column;
        justify-content:center;
    }

    input[type='button']{
        width:40%;
    }
</style>
<script>

var counterInstructions = 0;
var counterIngredients = 0;
function resetPage(){

}
function addIngredient(){
	var x = document.createElement('tr');
	counterIngredients++; 
	x.innerHTML = 
		"<td colspan = '1' id = 'ing_"+counterIngredients+"'></td><td><input type = 'text' name = 'ingredients[]' required onBlur = 'valIngredient(this)'></td><td><input type = 'number' class = 'num' name = 'ingr_amount[]' step = '1' '></td><td><input type = 'button' value = 'X' onClick = 'deleteIngredient(this)'</td>";
	$("#ingredients").append(x);
}
function addInstruction(){
	var x = document.createElement('tr');
	counterInstructions++;
	x.innerHTML = 
		"<td colspan = '1' id = 'instruction_"+counterInstructions+"'></td><td colspan = '1'><textarea name = 'instructions[]' required rows = '5' cols = '40''></textarea></td><td><input type = 'button' value = 'X' onClick = 'deleteInstruction(this)'</td>";
	$("#instructions").append(x);
}
function deleteIngredient(r){
	var i = r.parentNode.parentNode.rowIndex;
	document.getElementById("ingredients").deleteRow(i);
}
function deleteInstruction(r){
	var i = r.parentNode.parentNode.rowIndex;
	document.getElementById("instructions").deleteRow(i);
}

</script>
</head>

<body>
	<div id = "container">
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
		
             <h1 class="row justify-content-center">Add Recipe</h1>
            <hr>
                <form class="px-5 py-4" action "inputRecipe.php" id = "recipeForm" method="post"> 
                    <div>
                        <table>
                            <tr>
                                <td>Recipe Name: </td>
                                <td><input type = "text" name = "recipe_name" id = "recipe_name" value = ""></td>
                            </tr>
                            <tr>
                                <td>Serving: </td>
                                <td><input type = "number" step = "1" class = "num" id="recipe_serving" name = "recipe_serving"></td>
                            </tr>
                            <tr>
                                <td>Preparation Time: </td>
                                <td>
                                    <input type = "number"  class = "num" name = "recipe_time" id = "recipe_time" value = "">
                                    <!-- <select name = "prep_unit">
                                        <option value = "minutes">Minutes</option>
                                        <option value = "hours">Hours</option>
                                    </select> -->
                                    
                                </td>
                            </tr>
                            
                        
                            <tr>
                                <td>Image: </td>
                                <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                            </tr>
                            <tr><td colspan="1"></td><td colspan="1"></td></tr>
                        </table>
                    </div>
                    <div>
                        <table id = "ingredients">
                            <tr><th colspan="2">Ingredients:</th><th colspan="1">Amt:</th><th colspan="1"></th></tr>
                            <script>addIngredient();</script>				</table>
                    </div>
                    <input class="mt-2 px-0" type = "button" onClick="addIngredient()" value = "Add a Ingredient">
                    <div>
                        <table id = "instructions">
                            <tr><th colspan="1"></th><th colspan="1">Instructions:</th></tr>
                            <script>addInstruction();</script>				</table>
                    </div>
                    <input class="mt-2 px-0" type = "button" onClick="addInstruction()" value = "Add a Instruction">
                    <div class="btn">
                        <input class="mr-3" type = "submit" name = "submit">
                        <input type = "reset" onClick = "resetPage()">
                    </div>
                </form>

            
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
</body>
</html>