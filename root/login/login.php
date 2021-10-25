<?php
session_start();

require "includes/db.php";

if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($conn, strtolower($_POST['username']));
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if ($username != "" && $password != "") {

        $sql_query = "SELECT password, user_type, username FROM users WHERE username='" . $username . "' OR email='" . $username . "'";
        $result = mysqli_query($conn, $sql_query);
        $row = mysqli_fetch_array($result);
        $password_hash = $row['password'];
        $username = $row['username'];

        $verify = password_verify($password, $password_hash);

        if ($verify) {
            $_SESSION['username'] = $username;
            if ($row['user_type'] == 'admin') {
                header('Location: ../admin/members.php');
            } elseif ($row['user_type'] == 'member') {
                header('Location: ../member/dashboard.php');
            } elseif ($row['user_type'] == 'trainer') {
                header('Location: ../trainer/dashboard.php');
            } elseif ($row['user_type'] == 'accountant') {
                header('Location: ../accountant/acc_dashboard.php');
            }
        } else {
            $_SESSION['notification'] = "Incorrect Username or Password.";
            header('Location: index.php');
        }
    }
}
