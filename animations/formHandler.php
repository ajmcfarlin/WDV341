<?php

    $to = $_POST['emailInput'];
    $subject = "Alec's Design Contact";
    $message = "
    <html>
    <body style='background-color:white; '>
    <h1 style='color:rgb(159, 182, 139); margin-left:15px; padding-top:20%; font-family:Dancing Script;'> Hello" . " " . $_POST['firstName'] . "!" ." </h1>
    <div style='width:80%; margin-left:30px;'>
        <p> Thank you for reaching out, I have recieved your message and will respond as soon as possible to" . " " . $_POST ["emailInput"] . " " ."Thanks again, have a great day! </p>
        <p style='padding-bottom:20%;'> Sincerely, Alec </p>
    </div>
    ";

    $headers = "From: alecjm@gmail.com"  . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    if(mail($to, $subject, $message, $headers) ){
        echo "accepted email";
    }
    else {
        echo "email failed";
    }

    $to = 'alecjm@gmail.com';
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
    $headers = "From:" . $_POST['emailInput'] . "\r\n";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    if(mail($to, $subject, $message, $headers) ){
        echo "accepted email";
    }
    else {
        echo "email failed";
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
            background-color: rgb(249, 237, 225);
        }

        h1 {
            font-size: 6em;
            font-weight: 600;
            font-family: 'Dancing Script';
            display: inline-block;
            color: rgb(120, 138, 104);
        }

        #responseContainer {
            display:flex;
            margin-left:19%;
            width:60%;
            background-color:rgb(120, 138, 104);
            padding-bottom:5%;
            padding-left:5%;
            padding-right:5%;
            border-radius:10px;
            margin-bottom:20%;
        }

        p {
            font-size: 1.2em;
            color:white;
            text-align:center;

        }

        #main-nav {
            background-color: rgb(159, 182, 139);
            font-size: 1.3em;
            font-weight: 200;
        }

        footer {
            background-color:rgb(159, 182, 139);
        }
    </style>
</head>
<body>

<nav id="main-nav" class="navbar navbar-expand-sm navbar-dark py-0 fixed-top">
            <a class="navbar-brand" href="#">ALEC'S DESIGN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Projects
                        </a>
                        <div class="dropdown-menu pt-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">WDV101</a>
                        <a class="dropdown-item" href="WDV221/index.html">WDV221</a>
                        <a class="dropdown-item" href="WDV205/index.html">WDV205</a>
                        <a class="dropdown-item" href="#">WDV240</a>
                        <a class="dropdown-item" href="WDV 321(JS)/index.html">WDV321(JS)</a>
                        <a class="dropdown-item" href="WDV 341(PHP)/index.html">WDV341(PHP)</a>
                        <a class="dropdown-item" href="WDV 351(webApp)/index.html">WDV240(webApp)</a>
                        </div>
                    </li>
                </ul>
                <div class="ml-auto mediaLink">
                    <a class="text-white" target="_blank" href="https://www.linkedin.com/in/alec-mcfarlin-330854221">
                    <i class="fab fa-linkedin pr-3"></i>
                    </a> 
                    <a class="text-white" target="_blank" href="https://github.com/ajmcfarlin/WDV341.git"><i class="fab fa-github pr-2"></i>
                    </a> 
                </div>
            </div>
        </nav>

        <h1 class="pt-5 row justify-content-center">Contact</h1>

        <div id="mail" class="row justify-content-center">
            <img src="images/mail.png" alt="">
        </div>

        <div class="row justify-content-center mt-5" id="responseContainer">
        <p class="row justify-content-center mt-5">Thank you for reaching out <?php echo $_POST["firstName"]; ?>! I have recieved your message and will respond as soon as possible to <?php echo $_POST ["emailInput"]; ?>. Thanks again, have a great day! </p>
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
                        <p class="text-center footer-text"> Copyright &copy; 2021 All Rights Reserved. Alec's Web Design.</p>
                    </div>
                </div>
            </div>
        </footer>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c185c896ce.js" crossorigin="anonymous"></script>
</body>
</html>