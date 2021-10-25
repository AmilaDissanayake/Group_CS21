<?php 

session_start();
require "db.php";

$time_id = $_GET['time_id'];

$sql1 = "DELETE FROM availability WHERE time_id= '".$time_id."'";
mysqli_query($conn,$sql1);

header("location: ../calendar.php");  
$_SESSION['notification'] = "Successfully removed";
?>