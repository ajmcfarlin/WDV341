<?php

    $yourName = 'Alec McFarlin';

    $number1 = 8;
    $number2 = 13;
    $total = 21;

    echo '<h1>3-1: PHP Basics</h1>';

    $phpArray = array('PHP', 'JavaScript', 'HTML');

    $codeLanguage = '';
    foreach($phpArray as $value){
        $codeLanguage .= "'" . $value . "', ";
    }

    echo $codeLanguage; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-1: PHP Bascis</title>
    <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
    <script>
    
        <?php
            echo "let languages = [$codeLanguage];";
        ?>

        $(document).ready(function(){
            $('#displayLanguages').html(languages + " ");
        });



        console.log(languages);

    </script>
</head>
<body>
    <h2> <?php echo $yourName; ?> </h2>
    <p> <?php echo $number1; ?> </p>
    <p> <?php echo $number2; ?> </p>
    <p> <?php echo $total; ?> </p>
    <p id= displayLanguages> </p>

    
</body>
</html>