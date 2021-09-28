<?php

require "db.php";

$userEmail = "kulasekarsakmbs@gmail.com";

$mail_query = "SELECT * FROM admin WHERE email = '" . $userEmail . "'";
$mail_result = mysqli_query($conn, $mail_query);

if (!$mail_result) {
    $_SESSION["notification"] = "Email does not exist";
    header("Location: ../index.php");
    exit();
} else {
    print_r($mail_result);
}
