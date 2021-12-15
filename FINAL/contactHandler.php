<?php

    $to = $_POST['emailInput'];
    $subject = "Alec's Design Contact";
    $message = "
    <html>
    <body style='background-color:#95d1cc; '>
    <h1 style='color:white; margin-left:15px; padding-top:20%; font-family:Dancing Script;'> Hello" . " " . $_POST['firstName'] . "!" ." </h1>
    <div style='width:80%; margin-left:30px;'>
        <p style='font-size:1.2em;'> Thank you for reaching out, we have recieved your message and will respond as soon as possible to" . " " . $_POST ["emailInput"] . " " ."Thanks again, have a great day! </p>
        <p style='padding-bottom:20%; font-size:1.2em;'> Sincerely, Mama's Cookbook </p>
    </div>
    ";

    $headers = "From: alecjm@alecmcfarlin.com"  . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    if(mail($to, $subject, $message, $headers) ){
        // echo "accepted email";
    }
    else {
        echo "email failed";
    }

    $to = 'alecjm@gmail.com, alecjm@alecmcfarlin.com';
    $subject = 'Contact Message Details';
    $message = "
    <html>
    <head>
    <title>Contact Message</title>
    </head>
    <body>
    <p>Contact Message Details</p>
    <table>
    <tr>
    <th>First name</th>
    <th>Last name</th>
    </tr>
    <tr>
    <td>". $_POST['firstName'] ."</td>
    <td>". $_POST['lastName'] ."</td>
    </tr>
    <tr>
    <th>Email</th>
    </tr>
    <tr>
    <td>". $_POST['emailInput'] ."</td>
    </tr>
    <tr>
    <th>Reason</th>
    </tr>
    <tr>
    <td>". $_POST['contactReason'] ."</td>
    </tr>
    <tr>
    <th>Message</th>
    </tr>
    <tr>
    <td>". $_POST['messageArea'] ."</td>
    </tr>
    </table>
    </body>
    </html>
    ";
    $headers = 'From: alecjm@alecmcfarlin.com';
    // $headers = "From:" . $_POST['emailInput'] . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    if(mail($to, $subject, $message, $headers) ){
        // echo "accepted email";
    }
    else {
        // echo "email failed";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Handler</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">   
    <style>
        body {
            background-color: #95d1cc;
        }

        h1 {
            font-family: 'dancing script';
            font-size: 5em;
            color: white;
            text-shadow: 1px 1px 1px black;
        }

        #responseContainer {
            display:flex;
            margin-left:19%;
            width:60%;
            background-color:#5584ac;
            padding-bottom:4%;
            padding-left:5%;
            padding-right:5%;
            border-radius:10px;
            margin-bottom:20%;
            border: .9em solid #f6f2d4 ;
        }

        p {
            font-size: 1.2em;
            color:white;
            text-align:center;

        }

        .navbar {
            background-color: #f6f2d4;
        }

        footer {
            background-color:#f6f2d4;
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

        <h1 class="pt-5 row justify-content-center">Message Sent!</h1>

        <div id="mail" class="row justify-content-center">
            <img src="images/mail.png" alt="">
        </div>

        <div class="row justify-content-center mt-5" id="responseContainer">
        <p class="row justify-content-center mt-5">Thank you for reaching out <?php echo $_POST["firstName"]; ?>! We have recieved your message and will respond as soon as possible to <?php echo $_POST ["emailInput"]; ?>. Thanks again, have a great day! </p>
        </div>
        <!-- <?php

            echo "<table border='1'>";
            echo "<tr><th>Field Name</th><th>Value of Field</th></tr>";
            foreach($_POST as $key => $value)
            {
                echo '<tr>';
                echo '<td>',$key,'</td>';
                echo '<td>',$value,'</td>';
                echo "</tr>";
            } 
            echo "</table>";
            echo "<p>&nbsp;</p>";


        ?> -->
    
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


