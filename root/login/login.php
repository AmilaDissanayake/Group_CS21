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
                $_SESSION['user_type'] = 'admin';
            } elseif ($row['user_type'] == 'member') {
                date_default_timezone_set('Asia/Colombo');
                $today = date('Y-m-d');
                $expirey = date('Y-m-d');// $expirey = "2021-12-01";
                 
                if($today > $expirey ){
                    $_SESSION['user_type'] = 'member';
                    $_SESSION['subscription'] = 'Invalid';
                    header('Location: ../member/membershipexpire.php');
                }else{
                    header('Location: ../member/dashboard.php');
                    $_SESSION['subscription'] = 'Valid';
                    $_SESSION['user_type'] = 'member';
                }
            } elseif ($row['user_type'] == 'trainer') {
                header('Location: ../trainer/dashboard.php');
                $_SESSION['user_type'] = 'trainer';
            } elseif ($row['user_type'] == 'accountant') {
                header('Location: ../accountant/acc_dashboard.php');
                $_SESSION['user_type'] = 'accountant';
            }
        } else {
            $_SESSION['notification'] = "Incorrect Username or Password.";
            header('Location: index.php');
        }
    }
}
