<?php
    /* form is submitted{
        process from data 
        do DB process
    }
    else {
        displayForm
    }
    */

    if(isset($_POST['submit'])){

        $eventName = $_POST['events_name'];
        $eventDesc = $_POST['events_description'];
        $eventPres = $_POST['events_presenter'];
        
        try{

            require 'dbConnect.php';

            $sql = 'INSERT INTO wdv341_events (events_name,events_description,events_presenter) VALUES 
            (:eventName,:eventDesc,:eventPres)';

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':eventName', $eventName);
            $stmt->bindParam(':eventDesc', $eventDesc);
            $stmt->bindParam(':eventPres', $eventPres);

            echo "working so far";

            $stmt->execute();

            
            header('Location: eventResponsePage.php');

            
        }

        catch(PDOException $e) {
            
				$message = "There has been a problem. The system administrator has been contacted. Please try again later.";
	
				error_log($e->getMessage());			//Delivers a developer defined error message to the PHP log file at c:\xampp/php\logs\php_error_log
				error_log(var_dump(debug_backtrace()));
    }
}

    else {
        echo "Form not submitted.";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Form</title>
    <style>

    form {
        border: 2px solid black;
        padding: 3%;
        margin-left: 2%;
        width: 20%;
        display: flex;
        flex-direction: column;
    }

    p {
        display: flex;
        justify-content: space-between;
    }

    div input[type=submit]{
        margin-right: 20px;
        margin-top: 20px;
    }

    div input[type=reset]{
        margin-top: 20px;
    }

  


    </style>
</head>
<body>
    <header>
        <h1>WDV341 Intro <span>PHP</span></h1>
        <h2>Self Posting Event Form</h2>
    </header>

    <section>
        <div id="form-content">
            <div>
                <h3>Add an Event!</h3>
            </div>

            <form name="eventForm" id="eventForm" method="post" action="eventForm.php">

                <p>
                    <label for="events_name">Event Name:</label>
                    <input type="text" name="events_name" id="events_name">
                </p>

                <p>
                    <label for="events_description">Event Description:</label>
                    <input type="text" name="events_description" id="events_description">
                </p>

                <p>
                    <label for="events_presenter">Event Presenter:</label>
                    <input type="text" name="events_presenter" id="events_presenter">
                </p>

                <div>
                    <input type="submit" name="submit" id="submit" value="Add Event">
                    <input type="reset" name="Reset" id="button" value="Reset">
                </div>
            </form>
        </div>
    </section>
</body>
</html>
<?php
    }
?>