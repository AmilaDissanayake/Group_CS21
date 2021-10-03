<?php

require "includes/db.php";


// print_r($_POST);

$f_name_bb  = filter_var($_POST['f_name_cc'], FILTER_SANITIZE_STRING);
$l_name_bb = filter_var($_POST['l_name_cc'], FILTER_SANITIZE_STRING);
$gender_bb  = filter_var($_POST['gender_cc'], FILTER_SANITIZE_STRING);
$phone_no_bb = filter_var($_POST['phone_no_cc'], FILTER_SANITIZE_NUMBER_INT);
$dob_bb = $_POST['dob_cc'];
$address_bb = filter_var($_POST['address_cc'], FILTER_SANITIZE_STRING);
$injuries_bb = filter_var($_POST['injuries_cc'], FILTER_SANITIZE_STRING);
$email_bb = filter_var($_POST['email_cc'], FILTER_SANITIZE_EMAIL);
$username_bb = filter_var($_POST['username_cc'], FILTER_SANITIZE_STRING);
$password_bb = password_hash($_POST['password_cc'], PASSWORD_DEFAULT);
$membership_bb = $_POST['membership_cc'];
$trainer_bb = $_POST['trainer_cc'];



if ($trainer_bb > 0) {
    $assign_trainer_bb = 1;
} else {
    $assign_trainer_bb = 0;
}

// echo 'trainer check done';

$query = "INSERT INTO member (f_name, l_name, gender, phone_no, dob, address, injuries, email, username, password, assign_trainer ) VALUES ('$f_name_bb', '$l_name_bb', '$gender_bb', '$phone_no_bb', '$dob_bb', '$address_bb', '$injuries_bb', '$email_bb', '$username_bb', '$password_bb', '$assign_trainer_bb');";
// echo 'query check done';

$result = mysqli_query($conn, $query);

// echo $result;

if ($result) {
    echo 'done';
} else {
    echo "not";
    die(mysqli_error($conn));
}
