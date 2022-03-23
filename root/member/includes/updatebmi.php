<?php

session_start();

if (isset($_SESSION['notification'])) {
    unset($_SESSION['notification']);
}

require "db.php";

$username = $_SESSION['username'];
$bmi_val = $_POST['bmi_value'];
$month = $_POST['cur_month'];


$query1 = "SELECT * FROM member WHERE username = '".$username."'";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);

$member_id = $row1['member_id'];

$query2 = "SELECT * FROM membership WHERE member_id = '".$member_id."'";
$result2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($result2);

$membership_type = $row2['membership_type'];

$package_table = $membership_type.'m_package_progress';

$default_list = array(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

$input_list= json_encode($default_list,true);

$query_f = "UPDATE $package_table SET bmi_values=$input_list WHERE member_id= '".$member_id."'";
$result_f = mysqli_query($conn, $query_f);

if ($result1 && $result2 && $result3 && $result4) {
    $_SESSION['notification'] = "Successfully update the BMI value!";
    header('Location: ../progress.php');
} else {
    echo die(mysqli_error($conn));
}