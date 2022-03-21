<?php

session_start();

// if ($_SESSION['notification']) {
//     unset($_SESSION['notification']);
// }

require "includes/db.php";

$username = $_SESSION['username'];
$trainer = $_GET['trainer_id'];
$payment_type = "Online";

$query2 = "SELECT * FROM trainer WHERE trainer_id = '".$trainer."'";
$result2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($result2);

$amount = $row2['rate'];

$query1 = "SELECT * FROM member WHERE username = '".$username."'";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);

$member_id = $row1['member_id'];

$payment_insert = "INSERT INTO payment (member_id, payment_amount, trainer_id, payment_type) VALUES('$member_id', '$amount', '$trainer','$payment_type');";
$result2 = mysqli_query($conn, $payment_insert);

date_default_timezone_set('Asia/Colombo');
$date = date('Y-m-d');
$exp_date = date('Y-m-d',strtotime("+30 day", strtotime("$date")));

$assignment_insert = "INSERT INTO assignment (member_id, trainer_id, start_date, end_date) VALUES('$member_id','$trainer', '$date','$exp_date');";
$result3 = mysqli_query($conn, $assignment_insert);

$assignment_update = "UPDATE member set assign_trainer=$trainer WHERE member_id=$member_id";
$result4 = mysqli_query($conn, $assignment_update);

if ($result2 && $result3 && $result4) {
    $_SESSION['notification'] = "Successfully made the Assignment !";
    header('Location: membership.php');
} else {
    echo die(mysqli_error($conn));
}