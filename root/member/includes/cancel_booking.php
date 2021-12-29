<?php 

session_start();
require "db.php";

$time_id = $_GET['book_id'];

$sql1 = "DELETE FROM book WHERE book_id= '".$time_id."'";
mysqli_query($conn,$sql1);

header("location: ../booking.php");  
$_SESSION['notification'] = "Successfully Canceled the booking !";
?>