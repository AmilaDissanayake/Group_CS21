<?php

require "db.php";

// $userEmail = "kulasekarsakmbs@gmail.com";

// $mail_query = "SELECT * FROM admin WHERE email = '" . $userEmail . "'";
// $mail_result = mysqli_query($conn, $mail_query);

// if (!$mail_result) {
//     $_SESSION["notification"] = "Email does not exist";
//     header("Location: ../index.php");
//     exit();
// } else {
//     print_r($mail_result);
// }


$sql = "INSERT INTO pwdreset(pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES('safsdfsdfsdf', 'sdfsdfdf', 'sfsfsdf' , 'sddfdgfdgdfg' );";

$l_result = mysqli_query($conn, $sql);

if ($l_result) {
    echo "query done";
} else {
    echo "not done";
}

die(mysqli_error($conn));
