<?php
$conn = mysqli_connect("localhost", "root", "", "power_house");
if($conn){
    echo "connected";
}
else{
    echo "not connected";
}
?>