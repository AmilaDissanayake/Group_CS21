<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();
require "db.php";
date_default_timezone_set("Asia/Colombo");

$book_id = $_GET['book_id'];

$sql1= "SELECT * from book WHERE book_id='" .$book_id. "'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$member_id = $row1['member_id'];

$sql2= "SELECT username from member WHERE member_id='" .$member_id. "'";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($result2);
$username = $row2['username'];

$sql3= "SELECT email from users WHERE username='" .$username. "'";
$result3 = mysqli_query($conn,$sql3);
$row3 = mysqli_fetch_assoc($result3);
$userEmail = $row3['email'];

$to = $userEmail;
    $subject = "Booking cancelled";

    $message = '<p>Please note that your booking for the POWER HOUSE has been cancel by your trainer</p>';
    $message .= '<p>We are sorry about the inconvenience.';
    $message .= '<p>Thank you,<br>STAY WITH POWERHOUSE</p>';


    require '../vendor/autoload.php';

    $mail = new PHPMailer(true);

    // try {
    $mail->SMTPDebug = 1;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'powerhouse.fitness.academy@gmail.com';                     //SMTP username
    $mail->Password   = 'Power@123';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('powerhouse.fitness.academy@gmail.com');
    $mail->addAddress($to);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->send();
    echo 'Message has been sent';

$sql = "DELETE FROM book WHERE book_id= '".$book_id."'";
mysqli_query($conn,$sql);

header("location: ../bookings.php");  
$_SESSION['notification'] = "Successfully cancelled";
?>