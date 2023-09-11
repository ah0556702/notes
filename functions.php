<?php
    date_default_timezone_set('America/Chicago');
    $todaysDate = date('M-d-Y h:i');

    function displayDate(){
        global $todaysDate;
        echo("Today's date is " . $todaysDate);
    }

    function calcFutureDate($daysToAdd = 0){
        global $todaysDate;
        $futureDate = date('Y-m-d: D', strtotime($todaysDate . "+ $daysToAdd days"));
        return($futureDate);
    }

    //calcFutureDate();

    //displayDate();

?>