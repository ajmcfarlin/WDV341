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

                $errMsg = 'invalid username or password';
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
</head>
<body>
    <h1>My Company Sign on Page</h1>

<?php

        if($validUser){
            
        //if you have a valid user display block 1 else block 2
?>


    <div>
        <h3>Welcome to the Admin Area for Valid Users</h3>

        <p>You have the following options available as an admin</p>

        <ol>
            <li>
                <a href="eventForm.php">Input new events</a>
            </li>
            <li>
                delete products from the database        
            </li>
            <li>
                select products for update
            </li>
            <li>
                <a href="logout.php">log off admin system</a>
            </li>
        </ol>
    </div>

<?php
        }
        else{
            echo "<h3>$errMsg</h3>";

?>
    <div>
        <form method="post" action="login.php">
            <div>
                <label for="loginName">Username:</label>
                <input type="text" name="loginName" id="loginName">
            </div>

            <div>
                <label for="loginPassword">Password:</label>
                <input type="password" name="loginPassword" id="loginPassword">
            </div>

            <div>
                <input name="submit" type="submit" value="SignOn">
                <input type="reset">
            </div>
        </form>
    </div>

<?php
        }
?>
    

   
    
</body>
</html>

