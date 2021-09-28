<?php session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["reset-request-submit"])) {

    require 'db.php';

    $userEmail = $_POST["email"];

    $mail_query = " SELECT COUNT(*) AS cntUser FROM admin WHERE email = '" . $userEmail . "'";
    $mail_result = mysqli_query($conn, $mail_query);
    $mail_row = mysqli_fetch_array($mail_result);
    $mail_count = $mail_row['cntUser'];

    if ($mail_count <= 0) {
        $_SESSION["notification"] = "Email does not exist";
        header("Location: ../forget-pw.php");
        exit();
    }

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "localhost/Group_CS21/root/login/admin/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 1800;

    $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error";
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdreset(pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES(?,?,?,?);";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There this was an error";
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }


    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    $to = $userEmail;
    $subject = "Reset your password for POWER HOUSE";

    $message = '<p>We recieved a password reset request. The link to reset your password is below. If you did not make this 
request, you can ignore this e-mail</p>';
    $message .= '<p>Here is your password reset link: <br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';


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
    // } catch (Exception $e) {
    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // }
    $_SESSION["notification"] = "Please check your email inbox";
    header("Location: ../forget-pw.php?reset=success");
} else {
    $_SESSION["notification"] = "An error occured!";
    header("Location: ../forget-pw.php");
}
