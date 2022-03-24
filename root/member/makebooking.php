<?php

session_start();

if (isset($_SESSION['notification'])) {
    unset($_SESSION['notification']);
}

require "includes/db.php";



$username = $_SESSION['username'];
$slot = $_POST['time_cc'];
$date = $_POST['date_cc'];

$query1 = "SELECT * FROM member WHERE username = '".$username."'";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);

$member_id = $row1['member_id'];
$trainer_id = $row1['assign_trainer'];

$assignment_query = "SELECT * FROM assignment WHERE member_id =$member_id AND trainer_id =$trainer_id ORDER BY assignment_id DESC LIMIT 1;";
$assignment_result = mysqli_query($conn, $assignment_query);
$assignment_row = mysqli_fetch_assoc($assignment_result);

$t_assign_d = $assignment_row['start_date'];
$t_exp_d = $assignment_row['end_date'];

$check_date = new DateTime($date);
$t_assign_date = new DateTime($t_assign_d);
$t_exp_date = new DateTime($t_exp_d); 


$tr_interval = $check_date->diff($t_exp_date);

if($tr_interval->y > 0 || $tr_interval->m > 0 || $tr_interval->d >0){
    date_default_timezone_set('Asia/Colombo');
    $today = date('Y-m-d');
    $time = date('H:i:s');


    if($slot == 1){ 
        $sel_Time = DateTime::createFromFormat('H\h i\m s\s','06h 00m 00s')->format('H:i:s');}
    else if($slot == 2){ 
        $sel_Time = DateTime::createFromFormat('H\h i\m s\s','08h 00m 00s')->format('H:i:s');}
    else if($slot == 3){ 
        $sel_Time = DateTime::createFromFormat('H\h i\m s\s','10h 00m 00s')->format('H:i:s');}
    else if($slot == 4){ 
        $sel_Time = DateTime::createFromFormat('H\h i\m s\s','12h 00m 00s')->format('H:i:s');}
    else if($slot == 5){ 
        $sel_Time = DateTime::createFromFormat('H\h i\m s\s','14h 00m 00s')->format('H:i:s');}
    else if($slot == 6){ 
        $sel_Time = DateTime::createFromFormat('H\h i\m s\s','16h 00m 00s')->format('H:i:s');}
    else if($slot == 7){ 
        $sel_Time = DateTime::createFromFormat('H\h i\m s\s','18h 00m 00s')->format('H:i:s');}
    else if($slot == 8){ 
        $sel_Time = DateTime::createFromFormat('H\h i\m s\s','20h 00m 00s')->format('H:i:s');}

    if( $sel_Time <= $time && date($date) == $today ){
            $_SESSION['notification'] = "Selected Time slot is Unavailable !";
            header('Location: booking.php');
    }else{
        $bookingforDay = "SELECT * FROM book WHERE member_id=$member_id AND trainer_id=$trainer_id AND date='$today'";
        $bk_result = mysqli_query($conn, $bookingforDay);

        if(mysqli_num_rows($bk_result) == 0){
            if($slot == 1){ $slot = '06:00:00';}else if($slot == 2){ $slot = '08:00:00';}else if($slot == 3){ $slot = '10:00:00';}else if($slot == 4){ $slot = '12:00:00';}else if($slot == 5){ $slot = '14:00:00';}else if($slot == 6){ $slot = '16:00:00';}else if($slot == 7){ $slot = '18:00:00';}else if($slot == 8){ $slot = '20:00:00';}

            $make_booking = "INSERT INTO book (trainer_id,member_id, date, time) VALUES('$trainer_id', '$member_id', '$date','$slot');";
            $result2 = mysqli_query($conn, $make_booking);
            
            if ($result2) {
                $_SESSION['notification'] = "Successfully Completed the booking !";
                header('Location: booking.php');          
            } else {
                $_SESSION['notification'] = "Unable to do the booking !";
                echo die(mysqli_error($conn));
            }
        }else{
            $_SESSION['notification'] = "Selected date already have a booking!";
            header('Location: booking.php');
        }
    }
}else{
    if ($result2 && $assignment_result) {
        $_SESSION['notification'] = "Sorry! Booking is out of assignment period!";
        header('Location: booking.php');          
    } else {
        $_SESSION['notification'] = "Unable to do the booking !";
        echo die(mysqli_error($conn));
    }
}





