<?php

session_start();

if ($_SESSION['notification']) {
    unset($_SESSION['notification']);
}

require "includes/db.php";

$username = $_SESSION['username'];
$amount = $_POST['amount'];
$trainer = 1;
$payment_type = "Online";

$query1 = "SELECT * FROM member WHERE username = '".$username."'";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);

$member_id = $row1['member_id'];

$payment_insert = "INSERT INTO payment (member_id, payment_amount, trainer_id, payment_type) VALUES('$member_id', '$amount', '$trainer','$payment_type');";
$result2 = mysqli_query($conn, $payment_insert);

if ($result2) {
    $_SESSION['notification'] = "Successfully Extended the period !";
    header('Location: membership.php');
} else {
    echo die(mysqli_error($conn));
}