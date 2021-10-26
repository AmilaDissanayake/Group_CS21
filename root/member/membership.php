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
        <div class="board">
            <div class="vboderdivider"></div>
            <div class="dubar">
                <div class="duhead"><h2>Membership</h2></div>   
                <div class="mainbar">
                    <div class="duline1">
                        <div class="typ1"><i class='bx bxs-hourglass-top'></i><h1>12 Month Membership</h1></div>
                        <div class="remain"><h2>MONTHS</h2><div class="time"><h1>11</h1></div></div><div class="remain"><h2>DAYS</h2><div class="time"><h1>21</h1></div></div>
                    </div>   
                    <div class="duline2">
                        <!-- <i class='bx bxs-user-x' ></i> -->
                        <div class="typ1"><i class='bx bxs-user-check'></i><h1>Trainer Assignment</h1></div>
                        <div class="remain"><h2>DAYS</h2><div class="time"><h1>21</h1></div></div>
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
                        
                        <tr>
                            <th>INVOICE NO.</th>
                            <th>DATE</th>
                            <th>PAYMENT METHOD</th>
                            <!-- <th>DESCRIPTION</th> -->
                            <!-- <th>DONE BY</th> -->
                            <th>AMOUNT(LKR)</th>
                        </tr>
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
                    <div class="adetails">
                        <div class="astatus">
                            <p><i class='bx bxs-flag'></i>Assign to the trainer <b>since</b> <i>21/06/2021</i> <b>till</b> <i>21/07/2021</i></p> 
                        </div>
                        <div class="aper">
                            <div class="avatar">
                                <img src="./media/thusitha.jpg">
                            </div>
                            <div class="joined-date">
                                <p>Assign with</p>
                            </div>
                            <div class="name">

                                <p>THUSITHA KAKULAWALA ⭐5 </p>
                            </div>
                            <div class="button-inner">

                            <div class="about_button"><button class="about_btn" onclick="location.href='tel:<?php echo $phone_no ?>'">CALL</button></div>
                            </div>
                        <div class="stat">
                            <div class="exp">
                                <p>3 YRS<br>Expirience</p>
                             </div>
                            <div class="rate">
                                <p>6,000/=<br>Per Month</p>
                            </div>
                            <div class="review-count">
                                <p>50<br>Reviews</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="note2"><h1>Trainer List</h1></div>
                    <div class="trainer-div">
                        <table class="table-trainers">
                        <tr>
                            <th>NAME</th>
                            <th>EXPERIENCE</th>
                            <th>RATING</th>
                            <th>MONTHLY RATE(LKR)</th>
                            <th></th>
                        </tr>

                        <div class="dlist">
                            <tr>
                                <td>Thusitha</td>
                                <td> 2 Years</td>
                                <td> 5 (⭐)</td>
                                <td>2,500</td>
                                <td>
                                    <div class="row-action">
                                        <button class="about_btn" onclick="location.href='members.php'">Profile</button>
                                        <button class="about_btn" onclick="location.href='members.php'">Select</button> 
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Thusitha</td>
                                <td> 2 Years</td>
                                <td> 5 (⭐)</td>
                                <td>2,500</td>
                                <td>
                                    <div class="row-action">
                                        <button class="about_btn" onclick="location.href='members.php'">Profile</button>
                                        <button class="about_btn" onclick="location.href='members.php'">Select</button> 
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Thusitha</td>
                                <td> 2 Years</td>
                                <td> 5 (⭐)</td>
                                <td>2,500</td>
                                <td>
                                    <div class="row-action">
                                        <button class="about_btn" onclick="location.href='members.php'">Profile</button>
                                        <button class="about_btn" onclick="location.href='members.php'">Select</button> 
                                    </div>
                                </td>
                            </tr>
                        </div>
                    </table>
                    </div>
                </div>
            </div>
            <div class="vboderdivider"></div>
        </div>
        <div class="udetails">
            <input type="text"><div class="paralist" id="fname" ><?php echo "$f_name"; ?></p></div>
            <input type="text"><div class="paralist" id="lname" ><?php echo "$l_name"; ?></div>
            <input type="text"><div class="paralist" id="mnumber" ><?php echo "$p_no"; ?></div>
            <input type="text"><div class="paralist" id="address" ><?php echo "$address"; ?></div>
            <div class="paralist" id="email" ><?php echo "$email"; ?></div>
            <div class="paralist" id="membership" ></div>
            <form id="amount_form" action="add-payment.php" method="POST">
                <input type="text" id="passamount" name = "amount" value="">
            </form>
            <div class="paralist" id="mamount" ></div>
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
                $("#mamount").text(cost);
                $("#passamount").val(cost);
                $("#membership").text(pack);
        });
        $("#mon3").click(function(){ 
                cost = 7000; 
                pack = "3 Month Membership";          
                $("#mval").text(cost);
                $("#mamount").text(cost);
                $("#passamount").val(cost);
                $("#membership").text(pack);
        });
        $("#mon6").click(function(){
                cost = 10000;
                pack = "6 Month Membership";           
                $("#mval").text(cost);
                $("#mamount").text(cost);
                $("#passamount").val(cost);
                $("#membership").text(pack);
        });
        $("#mon12").click(function(){
                cost = 20000;     
                pack = "12 Month Membership";      
                $("#mval").text(cost);
                $("#mamount").text(cost);
                $("#passamount").val(cost);
                $("#membership").text(pack);
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
        var amount1 = document.getElementById('mamount').innerText;

        function calctotal() {

            var fname1 = document.getElementById('fname').innerText;
            var lname1 = document.getElementById('lname').innerText;
            var mnumber1 = document.getElementById('mnumber').innerText;
            var address1 = document.getElementById('address').innerText;
            var email1 = document.getElementById('email').innerText;
            var membership1 = document.getElementById('membership').innerText;
            var amount1 = document.getElementById('mamount').innerText;

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