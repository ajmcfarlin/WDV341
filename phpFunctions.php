<?php 


$date = date_create();
$formatedDate = date_format($date, "m/d/Y");
$formateIntDate = date_format($date, "d/m/Y");

$inputString = 'HELLO';
$phoneNumber = '';
$dollarNumber = '';
$character = 'dmacc';

// function stringInfo($inputString) {
    $trimmedString = trim($inputString);

   $stringLength = strlen($inputString);

   $lowerCase = strtolower($inputString);

   function findString($character){
       global $inputString;
       if(strstr( $inputString, $character)){
           echo("dmacc is in this string");
       }
       else{
           echo("dmacc is not in this string");
       }
   }


// }
 
// function formatPhone($phoneNumber){
    // if(preg_match('/^\+\d(\d{3}) (\d{3}) (\d{4})$/', $phoneNumber, $matches)) {
    //     $result = $matches[1] . '-' . $matches[2] . '-' . $matches[3];
        
    // }
    // echo ("the phone number is: $result");
// }

function formatPhone($phoneNumber){
$result = sprintf("%s-%s-%s",
        substr($phoneNumber, 0, 3),
        substr($phoneNumber, 3, 3),
        substr($phoneNumber, 6)
    );
    echo("the phone number format is: $result");
}

function formatCurrency($dollarNumber){
    setlocale(LC_MONETARY, "en_US");
    $output = money_format("%i", $dollarNumber);
    echo ("The dollar amount is: " . '$'. $dollarNumber);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
    <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
    <script>
    
    </script>
</head>
<body>

    <p>Create a function that will accept a timestamp and format it into mm/dd/yyyy format: <?php echo $formatedDate; ?></p>

    <p>Create a function that will accept a timestamp and format it into dd/mm/yyyy format to use when working with international dates: <?php echo $formateIntDate; ?></p>

    <p>Create a function that will accept a string input.  It will do the following things to the string:</p>

    <ul>
        <li>
            Display the number of characters in the string:  <?php echo $stringLength;?>
        </li>
        <li>
            Trim any leading or trailing whitespace: <?php echo $trimmedString; ?>
        </li>
        <li>
            Display the string as all lowercase characters: <?php echo $lowerCase; ?>
        </li>
        <li>
            Will display whether or not the string contains "DMACC" either upper or lowercase: <?php echo findString($inputString); ?>
        </li>
    </ul>

    <p><?php echo formatPhone('1234567890');?></p>
    <p>Curreny: <?php echo formatCurrency('1234.56')?></p>



    
</body>
</html>