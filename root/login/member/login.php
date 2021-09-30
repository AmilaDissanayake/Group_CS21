<?php
session_start();

require "includes/db.php";

if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($conn, strtolower($_POST['username']));
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if ($username != "" && $password != "") {

        $sql_query = "SELECT password FROM member WHERE username='" . $username . "' OR email='" . $username . "'";
        $result = mysqli_query($conn, $sql_query);
        $row = mysqli_fetch_array($result);
        $password_hash=$row['password'];

        $verify = password_verify($password,$password_hash);

        if($verify){
            $_SESSION['username'] = $username;
            header('Location: ../../member/dashboard.php');
        }
        else{
            $_SESSION['error'] = "Incorrect Username or Password.";
            header('Location: index.php');
        }
    }
}
