<?php 
    include "functions.php";
    if($_GET){
        //print_r($_GET);

        $calculated = calcFutureDate($_GET["numDays"]);
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
    <?php include "nav.php"; ?>
    <h1>
        <?php if($_GET){
            echo($calculated);
        }
        else{
            //echo("Todays date is: $todaysDate");
            displayDate();
        }
        ?>
        </h1>
    <?php include "form.php"; ?>
</body>
</html>