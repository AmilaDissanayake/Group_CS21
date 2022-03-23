<?php
    require "check_login.php";
    require "db.php";
    if(isset($_POST['form_submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $assigned_trainer = $_POST['assigned_trainer'];
        $mem_type = $_POST['membership_type'];

        if($mem_type == 2500){
            $membership_type = 1;
        }else if($mem_type == 7000){
            $membership_type = 3;
        }else if($mem_type == 13500){
            $membership_type = 6;
        }else if($mem_type == 20000){
            $membership_type = 12;
        }
        else{
            $membership_type = 0;
        }
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

            if ($assigned_trainer==0){
                $assigned_trainer = "N/A";
            }
            
            if($assigned_trainer!=0 && $membership_type!=0){
                $description = "Trainer Assignment & Renew Membership";
            }
            else if($assigned_trainer==0 && $membership_type!=0){
                $description = "Renew Membership";
            }
            else{
                $description = "Trainer Assignment";
            }
            

            $sql3 = "INSERT INTO payment(member_id, description, payment_amount, trainer_id, payment_type) VALUES('$member_id', '$description', '$amount', '$assigned_trainer', '$payment_type')";
            mysqli_query($conn, $sql3);

            
            date_default_timezone_set('Asia/Colombo');
            $date = date('Y-m-d');

            $query4 = "UPDATE membership SET membership_type = '$membership_type', joined_date='$date' WHERE member_id = '".$member_id."'";
            $result4 = mysqli_query($conn, $query4);                    

        if ($result1 && $result2 && $result4) {
            $_SESSION['notification'] = "Payment successfully";
            header("location:../member_payment.php");
            }
        else {
                echo die(mysqli_error($conn));
            }
            
        }
    }
