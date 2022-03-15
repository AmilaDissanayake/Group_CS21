<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

session_start();

require "includes/db.php";
// require_once 'phpqrcode/qrlib.php';


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
$amount = $_COOKIE['amount'];



if ($trainer_bb > 0) {
    $assign_trainer_bb = 1;
} else {
    $assign_trainer_bb = 0;
}

$membership_type;

switch ($membership_bb) {
    case 2500:
        $membership_type = 1;
        break;

    case 7000:
        $membership_type = 3;
        break;

    case 13500:
        $membership_type = 6;
        break;

    case 20000:
        $membership_type = 12;
        break;
}

// echo 'trainer check done';

$user_insert = "INSERT INTO users (email, username, password, user_type ) VALUES ('$email_bb', '$username_bb', '$password_bb', 'member');";

$result0 = mysqli_query($conn, $user_insert);

$member_insert = "INSERT INTO member (f_name, l_name, gender, phone_no, dob, address, injuries,  username, assign_trainer ) VALUES ('$f_name_bb', '$l_name_bb', '$gender_bb', '$phone_no_bb', '$dob_bb', '$address_bb', '$injuries_bb', '$username_bb', '$assign_trainer_bb');";
// echo 'query check done';

$result1 = mysqli_query($conn, $member_insert);

$member_select = "SELECT member_id FROM member WHERE username = '$username_bb'";

$result2 = mysqli_query($conn, $member_select);
$row2 = mysqli_fetch_array($result2);
$member_id = $row2['member_id'];

$payment_insert = "INSERT INTO payment (member_id, payment_amount, trainer_id, payment_type) VALUES('$member_id', '$amount', '$trainer_bb', 'online');";

$result3 = mysqli_query($conn, $payment_insert);

$membership_insert = "INSERT INTO membership (member_id, membership_type) VALUES('$member_id', '$membership_type');";
$result4 = mysqli_query($conn, $membership_insert);

// echo $result;

if ($result0 && $result1 && $result3 && $result4) {
    $_SESSION['notification'] = "Account successfully created";
    $_SESSION['username'] = $username_bb;

    //$sql1 = "SELECT member_id from member where username = '".$username_bb."'";
    // $result1 = mysqli_query($conn,$sql1);
    // $row1 = mysqli_fetch_assoc($result1);

    // $member_id = $row1['member_id'];

    // $path = 'QRimages/';
    // $file = $path."$member_id"."468.png";

    // $text = "www.google.com";

    // QRcode::png($text, $file, 'L', 10, 2);

    // "<cenetr><img src='".$file."'><center>";

    // $to = $email_bb;
    // $url= "https//:powerhouse.fitness.com";
    // $subject = "WELCOME TO THE POWER HOUSE";

    // $message = '<p>Hi '.$username_bb.', <br>Thanks for joining POWER HOUSE FITNESS ACADEMY – we’re excited to have you on board! 
    // You’ve taken the first step towards achieving your fitness goals</p>';
    // $message .= '<p>You’ll find our opening times, class timetable, and a list of what to bring on our '.$url.'. 
    // If you have any questions, then please don’t hesitate to get in touch. 
    // Simply call us on +9477 823 4904 or reply to this email and we’ll respond asap.<br></p>';
    // $message.= '<p>Here is your QRcode</p>';

    // require 'vendor/autoload.php';

    // $mail = new PHPMailer(true);

    // // try {
    // $mail->SMTPDebug = 1;                      //Enable verbose debug output
    // $mail->isSMTP();                                            //Send using SMTP
    // $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    // $mail->Username   = 'powerhouse.fitness.academy@gmail.com';                     //SMTP username
    // $mail->Password   = 'Power@123';                               //SMTP password
    // $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    // $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    // //Recipients
    // $mail->setFrom('powerhouse.fitness.academy@gmail.com');
    // $mail->addAddress($to);     //Add a recipient

    // //Content
    // $mail->isHTML(true);                                  //Set email format to HTML
    // $mail->Subject = $subject;
    // $mail->Body    = $message;
    // $mail->addAttachment('images/'.$member_id.'468.png');
    // $mail->send();
    // echo 'Message has been sent';

    header('Location: ../member/dashboard.php');
    // echo "done";
} else {
    // header("Location: index.php");
    echo die(mysqli_error($conn));
}
