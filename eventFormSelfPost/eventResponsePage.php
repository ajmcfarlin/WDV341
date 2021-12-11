<?php
    //set the id of the record we just entered
    //access the database to get the record we just entered
    //use that info on this page to personalize the confirmation message

    $eventId = $_GET['events_id'];

    echo "<h3> you entered a new record with an id of $eventId. We will look that information up in the database and display it.";



    try{
        require "dbConnect.php";

        $sql = 'SELECT events_name, events_description FROM wdv341_events WHERE events_id (events_name,events_description, events_presenter) VALUES 
        (:eventName,:eventDescription,;events_presenter)';

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':eventName', $eventName);
        $stmt->bindParam(':eventDescription', $eventDescription);
        $stmt->bindParam(':eventPresenter', $eventPresenter);


        $stmt->execute();

        echo "still working";
        $eventRecord = $stmt->fetch(PDO::FETCH_ASSOC);
        echo $eventRecord['events_name'];

    }

    catch(PDOException $e) {
        
            $message = "There has been a problem. The system administrator has been contacted. Please try again later.";

            error_log($e->getMessage());			//Delivers a developer defined error message to the PHP log file at c:\xampp/php\logs\php_error_log
            error_log(var_dump(debug_backtrace()));
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

    <h1> WDV341 Events Input Response Page</h1>

    <h3>Your Event has been submitted!</h3>

    <p>Event Name: <?php echo $eventRecord['events_name']; ?></p>
    <p>Event Description: </p>
    
</body>
</html>