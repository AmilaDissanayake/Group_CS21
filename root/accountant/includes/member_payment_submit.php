<?php
    require "check_login.php";
    require "db.php";
    if(isset($_POST['form_submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $assigned_trainer = $_POST['assigned_trainer'];
        $membership_type = $_POST['membership_type'];
        $amount = $_POST['amount'];
        $payment_type = 'cash';

        $sql1 = "SELECT email FROM users WHERE username = '".$username."' ";
        $result1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $email2 = $row1['email'];

        if($email == $email2){
            $sql2 = "SELECT member_id FROM member WHERE username = '".$username."' ";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);

            $member_id = $row2['member_id'];

            $sql3 = "INSERT INTO payment(member_id, payment_amount, trainer_id, payment_type) VALUES('$member_id', '$amount', '$assigned_trainer', '$payment_type')";
            mysqli_query($conn, $sql3);

            $sql4 = "INSERT INTO membership(member_id, membership_type) VALUES ('$member_id', '$membership_type')";
            mysqli_query($conn, $sql4);
        }
        header("location:../member_payment.php");
    }
