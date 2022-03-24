<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();
require "db.php";

$time_id = $_GET['time_id'];
$sql = "SELECT * FROM availability WHERE time_id= '".$time_id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$trainer_id=$row['trainer_id'];
$date = $row['date'];

$sql2= "SELECT * FROM book where trainer_id='".$trainer_id."' AND date='".$date."'";
$result2=mysqli_query($conn,$sql2);

while($row2=mysqli_fetch_assoc($result2)){
    $member_id=$row2['member_id'];
    $sql3 = "SELECT username FROM member where member_id='".$member_id."'";
    $result3 = mysqli_query($conn, $sql3);
    $row3=mysqli_fetch_assoc($result3);
    $username=$row3['username'];

    $sql4 = "SELECT email FROM users where username='".$username."'";
    $result4 = mysqli_query($conn, $sql4);
    $row4=mysqli_fetch_assoc($result4);
    $userEmail = $row4['email'];

    $to = $userEmail;
    $subject = "Booking cancelled";

    $message = '<p>Please note that your booking for the POWER HOUSE has been cancelled by your trainer</p>';
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
    $mail->Password   = 'Power@1234';                               //SMTP password
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
    
    
}
$sql1 = "DELETE FROM availability WHERE time_id= '".$time_id."'";
mysqli_query($conn,$sql1);

$sql5= "DELETE FROM book where trainer_id='".$trainer_id."' AND date='".$date."'";
mysqli_query($conn,$sql5);

header("location: ../calendar.php");  
$_SESSION['notification'] = "Successfully removed";
?>