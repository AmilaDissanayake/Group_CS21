<?php

if (isset($_POST['submit'])) {

    $f_name  = filter_var($_POST['f_name'], FILTER_SANITIZE_STRING);
    $l_name  = filter_var($_POST['l_name'], FILTER_SANITIZE_STRING);
    $gender  = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
    $phone_no = filter_var($_POST['phone_no'], FILTER_SANITIZE_NUMBER_INT);
    $dob = $_POST['dob'];
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    $injuries = filter_var($_POST['injuries'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $membership = $_POST['membership'];
    $trainer = $_POST['trainer'];



    print_r($_POST);
}
