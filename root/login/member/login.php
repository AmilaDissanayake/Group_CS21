<?php
session_start();

require "includes/db.php";

if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    if ($username != "" && $password != "") {

        $sql_query = "SELECT COUNT(*) AS cntUser FROM member WHERE username='" . $username . "' AND password='" . $password . "'";
        $result = mysqli_query($connection, $sql_query);

        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['username'] = $username;
            header('Location: ../../member/dashboard.php');
        } else {
            // echo "Invalid username and password";
            $_SESSION['error'] = "Incorrect Username or Password.";
            header('Location: index.php');
        }
    }
}
