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

    $sql_query="INSERT INTO availability(trainer_id, date, time_slot) VALUES('$trainer_id','$date','$slot')";
    mysqli_query($conn,$sql_query);
    header("location: ../calendar.php");  
    $_SESSION['notification'] = "Successfully set availability";
}

?>