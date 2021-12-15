<?php
    include '../dbConnect.php';

    try {
        $sql = "SELECT recipe_name,recipe_serving,recipe_time,ingred_num,ingred_unit,recipe_ingred,recipe_instruct,recipe_photo FROM recipe_data;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // echo $result['ingred_num'];
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
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<script>
    function onLoad(){
        for (let i = 0; i < recipeOne.ingredients.length; i++){
            let newLi = document.createElement('li');
            newLi.innerHTML = recipeOne.ingredients[i].ingred_num;
            document.getElementById("numList").appendChild(newLi);
        }

        for (let i = 0; i < recipeOne.ingredients.length; i++){
            let newLi = document.createElement('li');
            newLi.innerHTML = recipeOne.ingredients[i].ingred_unit;
            document.getElementById("unitList").appendChild(newLi);
        }

        for (let i = 0; i < recipeOne.ingredients.length; i++){
            let newLi = document.createElement('li');
            newLi.innerHTML = recipeOne.ingredients[i].ingred;
            document.getElementById("ingredList").appendChild(newLi);
        } 

        for (let i = 0; i < recipeOne.instructions.length; i++){
            let newLi = document.createElement('li');
            newLi.innerHTML = recipeOne.ingredients[i].ingred;
            document.getElementById("ingredList").appendChild(newLi);
        }
        //END RECIPE ONE

        for (let i = 0; i < recipeTwo.ingredients.length; i++){
            let newLi = document.createElement('li');
            newLi.innerHTML = recipeTwo.ingredients[i].ingred_num;
            document.getElementById("numList2").appendChild(newLi);
        }

        for (let i = 0; i < recipeTwo.ingredients.length; i++){
            let newLi = document.createElement('li');
            newLi.innerHTML = recipeTwo.ingredients[i].ingred_unit;
            document.getElementById("unitList2").appendChild(newLi);
        }

        for (let i = 0; i < recipeTwo.ingredients.length; i++){
            let newLi = document.createElement('li');
            newLi.innerHTML = recipeTwo.ingredients[i].ingred;
            document.getElementById("ingredList2").appendChild(newLi);
        } 
        
        for (let i = 0; i < recipeTwo.instructions.length; i++){
            let newLi = document.createElement('li');
            newLi.innerHTML = recipeTwo.instructions[i];
            document.getElementById("instructList2").appendChild(newLi);
        }
        //END RECIPE TWO


        for (let i = 0; i < recipeThree.ingredients.length; i++){
            let newLi = document.createElement('li');
            newLi.innerHTML = recipeThree.ingredients[i].ingred_num;
            document.getElementById("numList3").appendChild(newLi);
        }

        for (let i = 0; i < recipeThree.ingredients.length; i++){
            let newLi = document.createElement('li');
            newLi.innerHTML = recipeThree.ingredients[i].ingred_unit;
            document.getElementById("unitList3").appendChild(newLi);
        }

        for (let i = 0; i < recipeThree.ingredients.length; i++){
            let newLi = document.createElement('li');
            newLi.innerHTML = recipeThree.ingredients[i].ingred;
            document.getElementById("ingredList3").appendChild(newLi);
        }
        
        for (let i = 0; i < recipeThree.instructions.length; i++){
            let newLi = document.createElement('li');
            newLi.innerHTML = recipeThree.instructions[i];
            document.getElementById("instructList3").appendChild(newLi);
        }
        //END RECIPE THREE

        for (let i = 0; i < recipeFour.ingredients.length; i++){
            let newLi = document.createElement('li');
            newLi.innerHTML = recipeFour.ingredients[i].ingred_num;
            document.getElementById("numList4").appendChild(newLi);
        }

        for (let i = 0; i < recipeFour.ingredients.length; i++){
            let newLi = document.createElement('li');
            newLi.innerHTML = recipeFour.ingredients[i].ingred_unit;
            document.getElementById("unitList4").appendChild(newLi);
        }

        for (let i = 0; i < recipeFour.ingredients.length; i++){
            let newLi = document.createElement('li');
            newLi.innerHTML = recipeFour.ingredients[i].ingred;
            document.getElementById("ingredList4").appendChild(newLi);
        }

        // for (let i = 0; i < recipeFour.instructions.length; i++){
        //     let newLi = document.createElement('li');
        //     newLi.innerHTML = recipeFour.instructions[i];
        //     document.getElementById("instructList4").appendChild(newLi);
        // }




        // document.querySelector('#ingredListOne').style.display= 'none';
        

        document.querySelector('#recipeOneContainer').style.display = 'none';
        document.querySelector('#recipeTwoContainer').style.display = 'none';
        document.querySelector('#recipeThreeContainer').style.display = 'none';
        document.querySelector('#recipeFourContainer').style.display = 'none';

      
    }

    
    // function showIngredOne {
    //     document.querySelector('#ingredListOne').style.display = 'block';
    // }
   
    
</script>
<style>
    .btn {
            background-color:#F6F2D4;
            border:.7em solid #5584AC;
            border-radius:5%;
            box-shadow:2px 2px 2px black;
            
    }

   

    .btn:hover {
            background-color:#5584AC;
            border:.7em solid #F6F2D4 ;
            border-radius:5%;
            color:white;
    }

        .btnBlock{
            width:calc(100% / 6);display:inline-block;margin-top:.4rem; margin-right:2.5rem; margin-left:2.9rem; .5rem;border:.3em solid #5584AC;;padding:.2rem;background:#F6F2D4;border-radius:10px;font-size:.875rem;line-height:1.5
        }
        
        .productBlock{
            width:calc(100% / 5);display:inline-block;margin-top:2rem; margin-right:2rem; .5rem;border:.7em solid #5584AC;;padding:1rem;background:#F6F2D4;border-radius:10px;font-size:.875rem;line-height:1.5
        }
        .productImage img{
            display:block;margin-left:auto;margin-right:auto;width:100%;height:auto
        }
        .productName{
            font-size:1.4rem;margin:1rem 0 .5rem;
        }
        .productDesc{
            margin-left:10px;margin-right:10px;margin:0; 
        }
        .productPrice{
            font-size:larger;margin:.5rem 0;text-align:center
        }
        
        #recipeOneContainer {
            background-color:#F6F2D4;
            margin-top:2em;
            width:80%;
            margin-left:6.4em;
            padding:10%;
            border:.7em solid #5584AC;
            border-radius:5%;
            box-shadow:2px 2px 2px black;
        }

        #recipeTwoContainer {
            background-color:#F6F2D4;
            margin-top:2em;
            width:80%;
            margin-left:6.4em;
            padding:10%;
            border:.7em solid #5584AC;
            border-radius:5%;
            box-shadow:2px 2px 2px black;
        }

        #recipeThreeContainer {
            background-color:#F6F2D4;
            margin-top:2em;
            width:80%;
            margin-left:6.4em;
            padding:10%;
            border:.7em solid #5584AC;
            border-radius:5%;
            box-shadow:2px 2px 2px black;
        }

        #recipeFourContainer {
            background-color:#F6F2D4;
            margin-top:2em;
            width:80%;
            margin-left:6.4em;
            padding:10%;
            border:.7em solid #5584AC;
            border-radius:5%;
            box-shadow:2px 2px 2px black;
        }

       li {
           list-style-type: none;
           font-size:1.2em;
           font-family:'nunito';
       }

       #numList {
            margin-right:-3%;
       }
       #numList2 {
            margin-right:-3%;
       }

       .recipeTitle {
           font-family:'Dancing script';
           color:white;
           text-shadow: 1px 1px 1px black;
           font-size:5em;
       }
       

</style>
<script src="recipe.js"></script>
<body onLoad="onLoad()">
    <div id="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="" alt=""></a>
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">CONTACT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../login.php">LOGIN</a>
                </li>
              </ul>
              
            </div>
        </nav>

        <header>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <h1 class="dancingText">Mama's</h1>
                    </div>
    
                    <div class="row justify-content-center">
                        <h1 class="headingText">Cookbook</h1>
                    </div> 
                </div>
            </div>
        </header>

        <hr>

        <section>
            <div id="welcomeRow"  class="row">
                <div  class="col-5 mt-3 text-center">
                    <h3>The recipe manager with all of Mama's favorites. Select a meal below to view the secret! <hr class="mt-2">
                </h3>
                   
                </div>

                <div  class="mt-2 col-5">
                    <img width="60%" src="../images/arrowDown.png" alt="">
                </div>
            </div>
        </section>

        

        <main>

        <div onclick=showRecipeOne(); class="productBlock ml-5 btn">
                <p class="productName"><?php echo $result['recipe_name']; ?></p>
                <p class="productDesc">Estimated Time: <?php echo $result['recipe_time']; ?> minutes</p>
                <p class="productPrice">Serving Size: <?php echo $result['recipe_serving']; ?></p> 
              
            </div>

            

        <?php 
            foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $result) {
        ?>

            <div onclick=showRecipeTwo(); class="productBlock btn">
                <p class="productName"><?php echo $result['recipe_name']; ?></p>
                <p class="productDesc">Estimated Time: <?php echo $result['recipe_time']; ?> minutes</p>
                <p class="productPrice">Serving Size: <?php echo $result['recipe_serving']; ?></p> 
              
            </div>

        <?php   
            }

        ?>

            <div onclick=showRecipeOne(); class='btn btnBlock'>See Recipe</div>
            <div onclick=showRecipeTwo(); class='btn btnBlock'>See Recipe</div>
            <div onclick=showRecipeThree(); class='btn btnBlock'>See Recipe</div>
            <div onclick=showRecipeFour(); class='btn btnBlock'>See Recipe</div>
            
        </main>

        <!-- <div class="pt-4" id="recipeOneContainer">
            <img class="col-6" src="../images/chili.jpeg" alt="">
        
            <div id="recipeOneDisplay">
                <h1></h1>
                <h3></h3>
                <h4></h4>

                <div id="recipeList">
                    <ul>
                        <li></li>       
                    </ul>
                </div>
                <button>hi</button>
            </div>
        </div>

        <div class="pt-4" id="recipeTwoContainer">
            <img class="col-6" src="../images" alt="">
        
            <div id="recipeTwoDisplay">
                <h1></h1>
                <h3></h3>
                <h4></h4>

                <div>
                    <ul>
                        <li></li>       
                    </ul>

                </div>
            </div>
        </div> -->
            <section class="pt-3 pb-2" id="recipeOneContainer">
                <div>
                    <h1 class="recipeTitle">
                        <script>
                            document.write(recipeOne.recipe_name);
                        </script>
                    </h1>
                    <div>
                        <label >Show Ingredients</label>
				        <input onclick=showIngredOne(); type="checkbox" id="togIngred">
                    </div>
                    <div>
                        <input name="radio" type="radio">
                        <label for="">Default</label>
                        <input name="radio" type="radio">
                        <label for="">Half</label>
                        <input name="radio" type="radio">
                        <label for="">Double</label>
                    </div>
                        <div class="row">
                            <div id="ingredListOne" class="col-6 mx-0">
                                <div class="row">
                                <ul class="col-2" id="numList">
                                    <li></li>
                                </ul>
                                <ul class="col-2" id="unitList">
                                    <li></li>
                                </ul>
                                <ul class="col-8" id="ingredList">
                                    <li></li>
                                </ul>
                                </div>
                            </div>
                            <div class="col-6">
                                <img width=.9em; src="../images/chili.jpeg" alt="">
                            </div>
                        </div>

                        <div class="row">
                            <ul id="instructList">
                                <li></li>
                            </ul>
                        </div>
                </div>
            </section>

            <section class="pt-3 pb-2" id="recipeTwoContainer">
                <div>
                    <h1 class="recipeTitle">
                        <script>
                            document.write(recipeTwo.recipe_name);
                        </script>
                    </h1>
                    <div>
                        <input type="radio">
                        <label for="">Default</label>
                        <input type="radio">
                        <label for="">Half</label>
                        <input type="radio">
                        <label for="">Double</label>
                    </div>
                        <div class="row mx-0">
                            <ul class="col-1" id="numList2">
                                <li></li>
                            </ul>
                            <ul class="col-1 mr-5" id="unitList2">
                                <li></li>
                            </ul>
                            <ul class="col-1 col-md-5" id="ingredList2">
                                <li></li>
                            </ul>
                        </div>


                        <div class="row">
                            <ul id="instructList2">
                                <li></li>
                            </ul>
                        </div>
                </div>
            </section>

            <section class="pt-3 pb-2" id="recipeThreeContainer">
                <div>
                    <h1 class="recipeTitle">
                        <script>
                            document.write(recipeThree.recipe_name);
                        </script>
                    </h1>
                    <div>
                        <input type="radio">
                        <label for="">Default</label>
                        <input type="radio">
                        <label for="">Half</label>
                        <input type="radio">
                        <label for="">Double</label>
                    </div>
                        <div class="row mx-0">
                            <ul class="col-1" id="numList3">
                                <li></li>
                            </ul>
                            <ul class="col-1" id="unitList3">
                                <li></li>
                            </ul>
                            <ul class="col-1 col-md-5" id="ingredList3">
                                <li></li>
                            </ul>
                        </div>

                        <div class="row">
                            <ul id="instructList3">
                                <li></li>
                            </ul>
                        </div>
                </div>
            </section>

            <section class="pt-3 pb-2" id="recipeFourContainer">
                <div>
                    <h1 class="recipeTitle">
                        <script>
                            document.write(recipeFour.recipe_name);
                        </script>
                    </h1>
                    <div>
                        <input type="radio">
                        <label for="">Default</label>
                        <input type="radio">
                        <label for="">Half</label>
                        <input type="radio">
                        <label for="">Double</label>
                    </div>
                        <div class="row mx-0">
                            <ul class="col-1" id="numList4">
                                <li></li>
                            </ul>
                            <ul class="col-1" id="unitList4">
                                <li></li>
                            </ul>
                            <ul class="col-1 col-md-5" id="ingredList4">
                                <li></li>
                            </ul>
                        </div>
                </div>
            </section>
            
	   

        


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

    






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c185c896ce.js" crossorigin="anonymous"></script>
</body>
</html>

