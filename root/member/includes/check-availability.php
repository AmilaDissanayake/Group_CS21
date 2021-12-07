<?php

session_start();

require "db.php";

$response = array('Main_Slot'=>'None', 'slot1'=>false, 'slot2'=>false, 'slot3'=>false, 'slot4'=>false, 'slot5'=>false, 'slot6'=>false, 'slot7'=>false, 'slot8'=>false, 'set'=>'None');

$trainer_id = 1;

if (isset($_POST['date'])) {

    $date =  $_POST['date'];
   
    $query1 = "SELECT time_slot FROM availability WHERE date = '".$date."' AND trainer_id = $trainer_id ";
    $result1 = mysqli_query($conn, $query1);

    if (mysqli_num_rows($result1)) {
        $response['set'] ='Done';

        $row = mysqli_fetch_array($result1);
        $slot = $row['time_slot'];

        if ($slot  == "All day") {
            $response['Main_Slot']="All day";

            $query2 = "SELECT count(*) AS bkcount6 FROM book WHERE date = '".$date."' AND time = '0".($i*2+4).":00:00' AND trainer_id = $trainer_id  ";
            $result2 = mysqli_query($conn, $query2);
            $row = mysqli_fetch_array($result2);

            $slot1count = $row['bkcount6'];
            echo $slot1count;
            if($slot1count < 5 )
            {
                $response["slot$i"]= true;
            }else if($slot1count >= 5 )
            { 
                $response["slot$i"]= false;
            }
            
        }else if ($slot  == "Morning") {
            $response['Main_Slot']="Morning";

            for ($i= 1; $i<=4;$i++ ){
                $query2 = "SELECT count(*) AS bkcount6 FROM book WHERE date = '".$date."' AND time = '0".($i*2+4).":00:00' AND trainer_id = $trainer_id  ";
                $result2 = mysqli_query($conn, $query2);
                $row = mysqli_fetch_array($result2);

                $slot1count = $row['bkcount6'];
                if($slot1count < 5 )
                {
                    $response["slot$i"]= true;
                }else if($slot1count >= 5 )
                { 
                    $response["slot$i"]= false;
                }
            }
        
        }else if($slot  == "Evening") {
            $response['Main_Slot']="Evening";

            for ($i= 5; $i<=8;$i++ ){
                $query2 = "SELECT count(*) AS bkcount6 FROM book WHERE date = '".$date."' AND time = '0".($i*2+4).":00:00' AND trainer_id = $trainer_id ";
                $result2 = mysqli_query($conn, $query2);
                $row = mysqli_fetch_array($result2);

                $slot1count = $row['bkcount6'];
                echo $slot1count;
                if($slot1count < 5 )
                {
                    $response["slot$i"]= true;
                }else if($slot1count >= 5 )
                { 
                    $response["slot$i"]= false;
                }
            }
        }
    }

    header('Content-Type: application/json');
    $respo = json_encode($response);
    echo $respo ;

    die;
}