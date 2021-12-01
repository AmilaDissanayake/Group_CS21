<?php
include "db.php";
session_start();

if ($_SESSION['notification']) {
    unset($_SESSION['notification']);
}

if(isset($_POST['date-submit'])){
    $trainer_id=$_SESSION['trainer_id'];
    $date = $_POST['date'];
    $date=date("Y-m-d",strtotime($date));
    $slot = $_POST['time'];
    $currentTime = time();

    if ($date !== date("Y-m-d")){
    $sql_query="INSERT INTO availability(trainer_id, date, time_slot) VALUES('$trainer_id','$date','$slot')";
    mysqli_query($conn,$sql_query);
    header("location: ../calendar.php");  
    $_SESSION['notification'] = "Successfully set availability";}

    elseif (((int) date('H', $currentTime)) <= 06 && ($slot == "All day" || $slot == "Morning" || $slot == "Evening")){
    $sql_query="INSERT INTO availability(trainer_id, date, time_slot) VALUES('$trainer_id','$date','$slot')";
    mysqli_query($conn,$sql_query);
    header("location: ../calendar.php");  
    $_SESSION['notification'] = "Successfully set availability";
    }

    elseif (((int) date('H', $currentTime)) <= 15 && $slot == "Evening"){
        $sql_query="INSERT INTO availability(trainer_id, date, time_slot) VALUES('$trainer_id','$date','$slot')";
        mysqli_query($conn,$sql_query);
        header("location: ../calendar.php");  
        $_SESSION['notification'] = "Successfully set availability";
    }
    else{
        header("location: ../calendar.php");  
        $_SESSION['notification'] = "Cannot set availability";
    }
}

?>