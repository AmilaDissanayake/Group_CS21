
<?php require "includes/check_login.php"?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/footer.css">
    

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>
        <?php
        $mydate=date("y-m-d");
        $month=date('m',strtotime($mydate));
        $year=date('y',strtotime($mydate));
        ?>


        

        <div class="home-content">
        
        
            <div class="member-stats">
                <div class="one">
                    <?php $select_query = "SELECT payment_amount FROM payment where payment_date>='$year-$month-01'";
                    $select_result = mysqli_query($conn, $select_query);
                    $sum = 0;

                    if (mysqli_num_rows($select_result) > 0) {
                        while ($row = mysqli_fetch_assoc($select_result)) {
                        $sum = $sum + $row['payment_amount'];    
                        }
                    ?> 
                    <p class="value">Rs. <?php  echo $sum;
                    }
                    ?></p>
                    <?php
                        if (mysqli_num_rows($select_result) == 0) {
                        ?> 
                        <p class="value">Rs. <?php  echo $sum;
                        }
                    ?></p>
                    <p class="name">Member Recievables</p>
                </div>

                <div class="two">
                <?php $select_query = "SELECT tr_recievable_amount FROM trainer_receviables";
                    $select_result = mysqli_query($conn, $select_query);
                    $sum2 = 0;

                    if (mysqli_num_rows($select_result) > 0) {
                        while ($row = mysqli_fetch_assoc($select_result)) {
                        $sum2 = $sum2 + $row['tr_recievable_amount'];    
                        }
                    ?> 
                    <p class="value">Rs. <?php  print_r($sum2);
                    }
                    ?></p>
                    <?php
                        if (mysqli_num_rows($select_result) == 0) {
                        ?> 
                        <p class="value">Rs. <?php  echo $sum2;
                        }
                    ?></p>
                    <p class="name">Trainer Recievables</p>
                </div>

                <div class="three">
                <?php $select_query = "SELECT amount FROM trainer_payables where payment_date>='$year-$month-01'";
                    $select_result = mysqli_query($conn, $select_query);
                    $sum3 = 0;

                    if (mysqli_num_rows($select_result) > 0) {
                        while ($row = mysqli_fetch_assoc($select_result)) {
                        $sum3 = $sum3 + $row['amount'];    
                        }
                    ?> 
                    <p class="value">Rs. <?php  print_r($sum3);
                    }
                    ?></p>
                    <?php
                        if (mysqli_num_rows($select_result) == 0) {
                        ?> 
                        <p class="value">Rs. <?php  echo $sum3;
                        }
                    ?></p>
                    <p class="name">Trainer Payments</p>
                </div>


                <div class="one">
                    
                    <p class="value">Rs. <?php  echo $sum+$sum2;
                    
                    ?></p>
                    <p class="name">Monthly Income</p>
                </div>
                
                <!-- <div class="two">
                    <p class="value">rs. 45 000</p>
                    <p class="name">Monthly Income</p>
                </div> -->

                
            
            </div>

            <div class="member-list"></div>
        </div>

        <div class="bmi-main">
            <div class="bmi">
                <canvas id="canvas" height="200px" ></canvas>
            </div>

            <div class="bmi2">
                
                <div class="member-stats2">

                <?php  

                    if($sum+$sum2-$sum3<0){
                        $totalsum=-($sum+$sum2-$sum3);
                        $temp="Loss";

                        
                    }
                    elseif($sum+$sum2-$sum3==0){
                        $totalsum=($sum+$sum2-$sum3);
                        $temp= "No Profit";
                    }
                    else{
                        $totalsum=($sum+$sum2-$sum3);
                        $temp="Profit";
                    }
                    
                    ?>

                    <div class="one">
                        <p class="value"> <?php  echo "PROFIT" ?></p>
                        <!-- <p class="name">Profit</p> -->
                    </div>
                    <div class="one1">

                    

                        <p class="value">Rs. <?php  echo $totalsum;
                    
                    ?></p>


                        <p class="name">Amount</p>
                    </div>
                </div>
                <!-- <button class="hero_btn" >More Reports >></button> -->
            </div>
        </div>

        <div class="bmi-main">
            <div class="bmi3">
                <h2 class="recieve">RECIEVABLES</h2>
                <table class="recieve-table">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Date</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody id="output">

                    <?php


$sql1 = "SELECT * FROM payment ORDER BY payment_date DESC LIMIT 5";
$result1 = mysqli_query($conn, $sql1);




while ($trainer_row2 = mysqli_fetch_assoc($result1) ) {
    

    $member_id = $trainer_row2['member_id'];

   
    $sql = "SELECT * FROM member WHERE member_id = '" . $member_id . "'";
    $result = mysqli_query($conn, $sql);
    $trainer_row = mysqli_fetch_assoc($result);

    

    $payment_date = $trainer_row2['payment_date'];
    $username=$trainer_row['username'];                            
    $payment_amount = $trainer_row2['payment_amount'];


?>
    <tr>
        
        <td ><?php echo "$username" ?></td>
        <td ><?php echo "$payment_date" ?></td>
        <td ><?php echo "$payment_amount" ?></td>
    </tr>

    <?php } ?>

                    </tbody>
                </table>
                <button class="see-more" onclick="location.href='pay_history.php'" >see more >></button>
            </div>

            <div class="bmi4">
                <h2 class="recieve">PAYMENTS</h2>
                <table class="recieve-table">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Date</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody id="output">
                    <?php


$sql1 = "SELECT * FROM trainer_payables ORDER BY payment_date DESC LIMIT 5";
$result1 = mysqli_query($conn, $sql1);




while ($trainer_row2 = mysqli_fetch_assoc($result1) ) {
    

    $trainer_id = $trainer_row2['trainer_id'];

   
    $sql = "SELECT * FROM trainer WHERE trainer_id = '" . $trainer_id . "'";
    $result = mysqli_query($conn, $sql);
    $trainer_row = mysqli_fetch_assoc($result);

    

    $payment_date = $trainer_row2['payment_date'];
    $username=$trainer_row['username'];                            
    $payment_amount = $trainer_row2['amount'];


?>
    <tr>
        
        <td ><?php echo "$username" ?></td>
        <td ><?php echo "$payment_date" ?></td>
        <td ><?php echo "$payment_amount" ?></td>
    </tr>

    <?php } ?>

                       
                    </tbody>
                </table>
                <button  onclick="location.href='pay_history.php'" class="see-more" >  see more >></button>
            </div>
        </div>


    </section>
    <?php include "includes/footer.php" ?>

    <script src="js/income_chart.js" type="text/javascript"></script>





    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>


    <!-- <script src="js/justselect.min.js"></script> -->


</body>

</html>