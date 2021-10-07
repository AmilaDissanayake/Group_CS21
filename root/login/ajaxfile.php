<?php

include './includes/config.php';



if(isset($_POST['username'])){
    $username = mysqli_real_escape_string($con,$_POST['username']);

    $query = "select count(*) as cntUser from users where username='".$username."'";
    
    $result = mysqli_query($con,$query);
    $response = "<span style='color: #e74c3c;'><b>Not Available</b></span>";


    if(mysqli_num_rows($result)){
        $row = mysqli_fetch_array($result);
    
        $count = $row['cntUser'];

        if($count > 0){
            $flag =1;
            $response = "<span style='color: #86ff71;'><b>Available</b></span>";
        }
       
    }
    
    echo $response;
    die;

}
