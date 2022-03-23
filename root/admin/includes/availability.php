<?php
include "check_login.php";
date_default_timezone_set("Asia/Colombo");

// if ($_SESSION['notification']) {
//     unset($_SESSION['notification']);
// }

if (isset($_POST['date-submit'])) {
    // $trainer_id = $_SESSION['trainer_id'];
    $date = $_POST['date'];
    $date = date("Y-m-d", strtotime($date));
    $slot = $_POST['time'];
    $currentTime = time();
    $check = 0;

    $date_check = "SELECT * FROM close_times";
    $date_check_result = mysqli_query($conn, $date_check);

    while ($date_check_row = mysqli_fetch_assoc($date_check_result)) {
        $seted_date = $date_check_row['date'];
        $seted_date_id = $date_check_row['close_time_id'];
        //$time_slot = $availability_row['time_slot'];

        if ($seted_date == $date) {
            $update_query = "UPDATE close_times SET time_slot = '$slot' WHERE close_time_id = '$seted_date_id'";
            $sql_result0 = mysqli_query($conn, $update_query);

            // if ($sql_result0) {
            //     echo "Done";
            // } else {
            //     echo "awl";
            // }
            $check = 1;
        }
    }


    //if ($date !== date("Y-m-d")) {

    if ($check == 0) {

        $sql_query = "INSERT INTO close_times( date, time_slot) VALUES('$date','$slot')";
        $sql_result = mysqli_query($conn, $sql_query);
    }


    //if ($sql_result0 || $sql_result) {

    header("location: ../close-times.php");
    $_SESSION['notification'] = "Successfully set close time";
    //}

    // } elseif (((int) date('H', $currentTime)) <= 06 && ($slot == "All day" || $slot == "Morning" || $slot == "Evening")) {
    //     $sql_query = "INSERT INTO availability(trainer_id, date, time_slot) VALUES('$trainer_id','$date','$slot')";
    //     mysqli_query($conn, $sql_query);
    //     header("location: ../calendar.php");
    //     $_SESSION['notification'] = "Successfully set availability";
    // } elseif (((int) date('H', $currentTime)) <= 14 && $slot == "Evening") {
    //     $sql_query = "INSERT INTO availability(trainer_id, date, time_slot) VALUES('$trainer_id','$date','$slot')";
    //     mysqli_query($conn, $sql_query);
    //     header("location: ../calendar.php");
    //     $_SESSION['notification'] = "Successfully set availability";
    // } else {
    //     header("location: ../calendar.php");
    //     $_SESSION['notification'] = "Please select a valid time-slot";
    // }
}
