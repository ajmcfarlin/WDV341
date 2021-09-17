<?php

    $to = "alecjm@gmail.com";
    $subject = "Information from WDV341 PHP email function()";
    $message = "This verifies that the application can send an email";
    $headers = "From: alecjm@alecmcfarlin.com" . "\r\n";

    if(mail($to, $subject, $message, $headers) ){
        echo "accepted email";
    }
    else {
        echo "email failed";
    }
?>