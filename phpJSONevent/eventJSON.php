<?php
 /* This page will create a new Event object
 it will access the Events table from the database
 it will create and load an event object with data from the database
 it will then convert the Event object into a JSON object
 it will echo "return" the JSON object to the calling program

 the program will retun all the events from the wdv341_events table
 */

 require "Event.php";

 $eventObject = new Event();

 $eventObject->setEventId("42");

 $eventsArray = [];

//  echo $eventObject->getEventId();

 require 'dbConnect.php';

 try {
        $sql = "SELECT events_id,events_name,events_description FROM wdv341_events WHERE events_id=1 ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    
        //foreach row in the $stmt load the object
        //add the object to any array
        //after all rows are loaded convert array into JSON object
        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {

            $eventObject = new Event();

            $eventObject->setEventId($row['events_id']);
            $eventObject->setEventName($row['events_name']);
            $eventObject->setEventDescription($row['events_description']);

            array_push( $eventsArray, $eventObject);
        }

        echo json_encode($eventsArray);
     }
    
     catch(PDOException $e) {
        echo "Errors" . $e->getMessage();
    }


//  Follow works for one row at a time not for all rows

//  try {
//     $sql = "SELECT events_id,events_name,events_description FROM wdv341_events";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();

//     $result = $stmt->fetch(PDO::FETCH_ASSOC);
//  }

//  catch(PDOException $e) {
//     echo "Errors" . $e->getMessage();
// }

// echo $result['events_id'];
// echo $result['events_name'];
// echo $result['events_description'];

// $eventObject->setEventId($result['events_id']);
// $eventObject->setEventName($result['events_name']);
// $eventObject->setEventDescription($result['events_description']);

// // echo $eventObject;

// echo json_encode($eventObject);

// $result = $stmt->fetch(PDO::FETCH_ASSOC);

// $eventObject->setEventId($result['events_id']);
// $eventObject->setEventName($result['events_name']);
// $eventObject->setEventDescription($result['events_description']);

// echo json_encode($eventObject);
?>