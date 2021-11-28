<?php

    class Event {
        //comments
        //properties
        //constructor method
        //setters/getters
        //processing methods

        public $events_id;
        public $events_name;
        public $events_description;

        function setEventId($inId){
            $this->events_id = $inId;
        }
        function getEventId(){
            return $this->events_id;
        }

        function setEventName($inName){
            $this->events_name = $inName;
        }

        function getEventName(){
            return $this->events_name;
        }

        function setEventDescription($inDescription){
            $this->eventDescription = $inDescription;
        }

        function getEventDescription(){
            return $this->getEventDescription;
        }

        //there are tools to generate setters and getters for each property

    } //end Event class 

?>