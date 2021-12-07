<?php

session_start();

if ($_SESSION['notification']) {
    unset($_SESSION['notification']);
}

require "includes/db.php";

$username = $_SESSION['username'];
$slot = $_POST['time_cc'];
$date = $_POST['date_cc'];

$query1 = "SELECT * FROM member WHERE username = '".$username."'";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);

$member_id = $row1['member_id'];
$trainer_id = 1;

if($slot == 1){ $slot = '06:00:00';}else if($slot == 2){ $slot = '08:00:00';}else if($slot == 3){ $slot = '10:00:00';}else if($slot == 4){ $slot = '12:00:00';}else if($slot == 5){ $slot = '14:00:00';}else if($slot == 6){ $slot = '16:00:00';}else if($slot == 7){ $slot = '18:00:00';}else if($slot == 8){ $slot = '20:00:00';}

$make_booking = "INSERT INTO book (trainer_id,member_id, date, time) VALUES('$trainer_id', '$member_id', '$date','$slot');";
$result2 = mysqli_query($conn, $make_booking);

if ($result2) {
    $_SESSION['notification'] = "Successfully Completed the booking !";
    header('Location: booking.php');
} else {
    echo die(mysqli_error($conn));
}

