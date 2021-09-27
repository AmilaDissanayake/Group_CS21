<?php
$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "test";

$conn = mysqli_connect($dBServername,$dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connection failed :". mysqli_connect_error());
}
?>