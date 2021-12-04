<?php include "includes/check_login.php" ?>

<?php 
    require "includes/db.php";
    $username = $_SESSION['username'];
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/membership.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>

        <div class="welcomenote"><h1></h1></div>
        <div class="HdividerL">
            <script>
                function nn() {
                    $('.alert').addClass("show");
                    $('.alert').removeClass("hide");
                    $('.alert').addClass("showAlert");
                        setTimeout(function bb() {
                        $('.alert').removeClass("show");
                        $('.alert').addClass("hide");
                        }, 4000);
                    };
            </script>
            <div class="alert hide">
                <?php
                    if (isset($_SESSION['notification'])) {
                        $notification = $_SESSION['notification'];
                        echo '<script type="text/javascript">nn();</script>';
                    }
                ?>
                <span class="msg"><?php echo $notification ?></span>
                <div class="close-btn">
                    <span class="fas fa-times"></span>
                </div>
            </div>
            <script>
                $('.close-btn').click(function ss() {
                    $('.alert').removeClass("show");
                    $('.alert').addClass("hide");
                });
            </script>
        </div>
        <?php
            $mem_date = new DateTime("2021-03-24");
            $membexp_date = new DateTime("2022-03-24");
            $mem_interval = $mem_date->diff($membexp_date);

            if($mem_date->format("Y-m-d")  == "2021-03-24" && $membexp_date->format("Y-m-d") == "2022-03-24"){
                $mem_interval->y = 00;
                $mem_interval->m = 12;
                $mem_interval->d = 00;
            }
            $mem_type = 12; 

            $t_assign_date = new DateTime("2021-03-24");
            $t_exp_date = new DateTime("2021-04-24");
            $tr_interval = $t_assign_date->diff($t_exp_date);
            
            // echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 
            
            // shows the total amount of days (not divided into years, months and days like above)
            // echo "difference " . $interval->days . " days ";
        ?>
        <div class="board">
            <div class="vboderdivider"></div>
            <div class="dubar">
                <div class="duhead"><h2>Membership</h2></div>   
                <div class="mainbar">
                    <div class="duline1">
                        <div class="typ1"><i class='bx bxs-hourglass-top'></i><h1><?php echo $mem_type ?> Month Membership</h1></div>
                        <div class="remain"><h2>MONTHS</h2><div class="time"><h1><?php echo $mem_interval->m ?></h1></div></div><div class="remain"><h2>DAYS</h2><div class="time"><h1><?php echo $mem_interval->d?></h1></div></div>
                    </div>   
                    <div class="duline2">
                        <?php 
                            $flag = 1;

                            if($flag == 1){
                                $icon = "'bx bxs-user-check'";
                                $t_assign_status = "Trainer Assignment";
                            }else{
                                $icon = "'bx bxs-user-x'";
                                $t_assign_status = "No Trainer Assignment" ;
                            }
                        ?>
                        <div class="typ1"><i class=<?php echo $icon ?>></i><h1><?php echo $t_assign_status ?></h1></div>
                        <div class="remain"><h2>DAYS</h2><div class="time"><h1><?php echo $tr_interval->days ?></h1></div></div>
                    </div>    
                </div>
                <div class="duhead"></div>
            </div>
            <div class="vboderdivider"></div>
        </div>
        
        <div class="divid"></div>
        <div class="btmsec">
            <div class="vboderdivider"></div>
            <div class="meship">
                <div class="ren">
                    <div class="note2"><h1>Renew Membership</h1></div>
    
                    <div class="selpack">
                        <div class="bt"><button class="readmore_btn" id="mon1" data-value=2500>01 MONTH</button></div> 
                        <div class="bt"><button class="readmore_btn" id="mon3"data-value=7000>03 MONTH</button></div>
                        <div class="bt"><button class="readmore_btn" id="mon6" data-value=10000>06 MONTH</button></div>
                        <div class="bt"><button class="readmore_btn" id="mon12"data-value=20000>12 MONTH</button></div>
                    </div>
                    <div class="amount" >
                        <p><span id="mval">0</span>.00 LKR</p>
                    </div>
                    <div class="pay">
                        <button class="hero_btn"  onclick="submitFunction()">GO FOR PAYMENT</button>
                    </div>
                    <div class="note2"><h1>Payment History</h1></div>
                    <div class="payment-div">
                        <table class="table-payments">
                            <thead>
                                <tr>
                                    <th>INVOICE NO.</th>
                                    <th>DATE</th>
                                    <th>PAYMENT METHOD</th>
                                    <!-- <th>DESCRIPTION</th> -->
                                    <!-- <th>DONE BY</th> -->
                                    <th>AMOUNT(LKR)</th>
                                </tr>
                            </thead>
                        
                            <?php 
                                $query1 = "SELECT * FROM member WHERE username = '".$username."'";
                                $result1 = mysqli_query($conn, $query1);
                                $row1 = mysqli_fetch_assoc($result1);

                                $member_id = $row1['member_id'];
                                $f_name = $row1['f_name'];
                                $l_name = $row1['l_name'];
                                $p_no = $row1['phone_no'];
                                $address = $row1['address'];

                                $query3 = "SELECT email FROM users WHERE username = '".$username."'";
                                $result3 = mysqli_query($conn, $query3);
                                $row3 = mysqli_fetch_assoc($result3);

                                $email = $row3['email'];    
                        
                                $query2 = "SELECT * FROM payment WHERE member_id = '".$member_id."'";
                                $result2 = mysqli_query($conn, $query2);
                                
                            while($row2 = mysqli_fetch_assoc($result2)){

                                $payment_id = $row2['payment_id'];
                                $date = $row2['payment_date'];
                                $method = $row2['payment_type'];
                                $amount = $row2['payment_amount'];
                            ?>
                                <tr>
                                    <td> <?php echo "$payment_id" ?></td>
                                    <td><?php echo "$date" ?></td>
                                    <td><?php echo "$method" ?></td>
                                    <!-- <td>Renewmembership</td> -->
                                    <!-- <td>Pamodha98</td> -->
                                    <td><?php echo "$amount" ?></td>
                                    <!-- <td>
                                        <div class="row-action">
                                            <button class="about_btn" onclick="location.href='members.php'">Meal Plan and Schedule</button> 
                                        </div>
                                    </td> -->
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="hordivid"></div>
            <div class="tassign">
                <div class="seltr">
                    <div class="note2"><h1>Your Trainer</h1></div>
                    <?php 
                        $trainer_id = 1;

                        $assign_trainer_query = "SELECT * FROM trainer WHERE trainer_id = $trainer_id";
                        $trainer_result = mysqli_query($conn, $assign_trainer_query);
                        $trainer_row = mysqli_fetch_assoc($trainer_result);

                        $trainer_f_name = $trainer_row['f_name'];
                        $trainer_l_name = $trainer_row['l_name'];
                        $trainer_image = $trainer_row['image'];
                        $trainer_rate = $trainer_row['rate'];
                        $trainer_phone_no = $trainer_row['phone_no'];
                        $date_joined = $trainer_row['joined_date'];
                       
                                                
                        $today = date("Y-m-d");
                        $diff = date_diff(date_create($date_joined), date_create($today));
                        
                        $rate_tr_query = "SELECT * FROM review WHERE trainer_id = $trainer_id";
                        $review_query = mysqli_query($conn, $rate_tr_query);
                        
                        $review_count = mysqli_num_rows($review_query);
                        if ($review_count == 0) {
                            $final_rating = 'No Reviews Yet';
                        } else {
                            $review_value = 0;
                            while ($row6 = mysqli_fetch_assoc($review_query)) {
                                $review_value += $row6['stars'];
                            }
                            $final_rating = $review_value / $review_count;
                        } 
                    ?>
                    
                    <div class="adetails">
                        <div class="astatus">
                            <p><i class='bx bxs-flag'></i>Assign to the trainer <b>since</b> <i>21/06/2021</i> <b>till</b> <i>21/07/2021</i></p> 
                        </div>
                        <div class="aper">
                            <div class="avatar">
                                <img src="../media/trainers/<?php echo $trainer_image?>">
                            </div>
                            <div class="joined-date">
                                <p>Assign with </p>
                            </div>
                            <div class="name">
                                <p><?php echo $trainer_f_name." ".$trainer_l_name ?> ⭐<?php echo $final_rating?></p>
                            </div>
                            <div class="button-inner">
                                <div class="about_button"><button class="about_btn" onclick="location.href='../trainer-profile/trainer-profile.php?trainer_id=<?php echo $trainer_id ?>'">PROFILE</button></div>
                                <div class="about_button"><button class="about_btn" onclick="location.href='tel:<?php echo $phone_no ?>'">CALL</button></div> 
                            </div>
                        <div class="stat">
                            <div class="exp">
                                <p><?php echo $diff->format('%y') . 'yrs'; ?><br>Expirience</p>
                             </div>
                            <div class="rate">
                                <p><?php echo $trainer_rate ?>/=<br>Per Month</p>
                            </div>
                            <div class="review-count">
                                <p><?php echo $review_count ?><br>Reviews</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="note2"><h1>Trainer List</h1></div>
                    <div class="trainer-div">
                        <table class="table-trainers">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>EXPERIENCE</th>
                                    <th>RATING</th>
                                    <th>MONTHLY RATE(LKR)</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <?php 
                        
                                $query4 = "SELECT * FROM trainer";
                                $result4 = mysqli_query($conn, $query4);
                                
                            while($row3 = mysqli_fetch_assoc($result4)){

                                $trainer_id = $row3['trainer_id'];
                                $t_fname= $row3['f_name'];
                                $image = $row3['image'];
                                $about = $row3['about'];
                                $rate = $row3['rate'];
                                $phone_no = $row3['phone_no'];
                                $date_joined = $row3['joined_date'];
                        
                                $today = date("Y-m-d");
                                $diff = date_diff(date_create($date_joined), date_create($today));

                                $query5 = "SELECT * FROM review WHERE trainer_id = '".$trainer_id."'";
                                $review_query = mysqli_query($conn, $query5);
                                $review_count = mysqli_num_rows($review_query);
                        
                                if ($review_count == 0) {
                                    $final_rating = 'No Reviews Yet';
                                } else {
                                    $review_value = 0;
                                    while ($row4 = mysqli_fetch_assoc($review_query)) {
                                        $review_value += $row4['stars'];
                                    }
                                    $final_rating = $review_value / $review_count;
                                }
                            ?>
                                <tr>
                                    <td> <?php echo "$t_fname" ?></td>
                                    <td><?php 
                                    echo $diff->format('%y') . 'years'; 
                                    ?></td>
                                    <td><?php echo "$final_rating"?>(⭐)</td>
                                    <td><?php echo "$rate" ?></td>
                                    <td>
                                        <div class="row-action">
                                            <button class="about_btn" onclick="location.href='../trainer-profile/trainer-profile.php?trainer_id=<?php echo $trainer_id ?>'">Profile</button>
                                            <button class="about_btn" onclick="location.href='members.php'">Select</button> 
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                    </table>
                    </div>
                </div>
            </div>
            <div class="vboderdivider"></div>
        </div>
        <div class="udetails">
            <div class="paralist" id="email" ></div>
            <form id="amount_form" action="add-payment.php" method="POST">
                <input type="text" id="passamount" name = "amount" value="">
            </form>
        </div>
        <div class="HdividerL"></div>   
    </section>

    <?php include "includes/footer.php" ?>


    
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>

    <script>   
        var cost = 0; 
        var pack; 
        $("#mon1").click(function(){
                cost = 2500;   
                pack = "1 Month Membership";      
                $("#mval").text(cost);
                $("#passamount").val(cost);
        });
        $("#mon3").click(function(){ 
                cost = 7000; 
                pack = "3 Month Membership";          
                $("#mval").text(cost);
                $("#passamount").val(cost);
        });
        $("#mon6").click(function(){
                cost = 10000;
                pack = "6 Month Membership";           
                $("#mval").text(cost);
                $("#passamount").val(cost);
        });
        $("#mon12").click(function(){
                cost = 20000;     
                pack = "12 Month Membership";      
                $("#mval").text(cost);
                $("#passamount").val(cost);
        });

       
        function checkpackin(){
            var amountval = document.getElementById("mval").innerText;

            if( amountval === '0'){
                return false;
            }else{
                return true;
            }
        }            


        payhere.onCompleted = function onCompleted(orderId) {
            document.getElementById("amount_form").submit();
            console.log("Payment completed");
            //Note: validate the payment and show success or failure page to the customer
        };

        // Called when user closes the payment without completing
        payhere.onDismissed = function onDismissed() {
            //Note: Prompt user to pay again or show an error page
            console.log("Payment dismissed");
        };

        // Called when error happens when initializing payment such as invalid parameters
        payhere.onError = function onError(error) {
            // Note: show an error page
            console.log("Error:" + error);
        };

        var payment;

        function calctotal() {

            var fname1 = "<?php echo "$f_name"; ?>";
            var lname1 = "<?php echo "$l_name"; ?>";
            var mnumber1 = "<?php echo "$p_no"; ?>";
            var address1 = "<?php echo "$address"; ?>";
            var email1 = "<?php echo "$email"; ?>";
           
            var amount1 = document.getElementById('mval').innerText;
            var membership1 ;

            if (amount1 == '2500'){
                membership1 = "1 Month Membership";
            }else if (amount1 == '7000'){
                membership1 = "3 Month Membership";
            }else if (amount1 == '10000'){
                membership1 = "6 Month Membership";
            }else if (amount1 == '20000'){
                membership1 = "12 Month Membership";
            }

            payment = {
                "sandbox": true,
                "merchant_id": "1218759", // Replace your Merchant ID
                "return_url": undefined, // Important
                "cancel_url": undefined, // Important
                "notify_url": "http://sample.com/notify",
                "order_id": "ItemNo12345",
                "items": membership1 ,
                "amount": amount1,
                "currency": "LKR",
                "first_name": fname1,
                "last_name": lname1,
                "email": email,
                "phone": mnumber1,
                "address": address1,
                "city": "Mirigama",
                "country": "Sri Lanka",
                };

            }

        function submitFunction() {
            var result = checkpackin();

            if (result == true) {     
                calctotal();

                payhere.startPayment(payment);
            }
        }

    </script>

</body>

</html>


<?php
unset($_SESSION['notification']);
?>