<?php include "includes/check_login.php" ?>

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
        <div class="HdividerL"></div>
        <div class="board">
            <div class="vboderdivider"></div>
            <div class="dubar">
                <div class="duhead"><h2>Membership</h2></div>   
                <div class="mainbar">
                    <div class="duline1">
                        <div class="typ1"><i class='bx bxs-hourglass-top'></i><h1>Membership Type</h1></div>
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
                        <div class="bt"><a href="#" class="readmore_btn" id="readMore">01 MONTH</a></div> 
                        <div class="bt"><a href="#" class="readmore_btn" id="readMore">03 MONTH</a></div>
                        <div class="bt"><a href="#" class="readmore_btn" id="readMore">06 MONTH</a></div>
                        <div class="bt"><a href="#" class="readmore_btn" id="readMore">12 MONTH</a></div>
                    </div>

                    <div class="pay">
                        <button class="hero_btn" >GO FOR PAYMENT</button>
                    </div>
                    <div class="note2"><h1>Payment History</h1></div>
                    <div class="payment-div">
                        <table class="table-payments">
                        <tr>
                            <th>INVOICE NO.</th>
                            <th>DATE</th>
                            <th>PAYMENT METHOD</th>
                            <th>DESCRIPTION</th>
                            <th>DONE BY</th>
                            <th>AMOUNT(LKR)</th>
                        </tr>

                        <tr>
                            <td>0001A</td>
                            <td>25/06/2020</td>
                            <td>Online</td>
                            <td>Renewmembership</td>
                            <td>Pamodha98</td>
                            <td>7,000</td>
                            <!-- <td>
                                <div class="row-action">
                                    <button class="about_btn" onclick="location.href='members.php'">Meal Plan and Schedule</button> 
                                </div>
                            </td> -->
                        </tr>

                        <tr>
                            <td>0002A</td>
                            <td>26/07/2021</td>
                            <td>Online</td>
                            <td>Assign to a Trainer</td>
                            <td>Pamodha98</td>
                            <td>4,500</td>
                            <!-- <td>
                                <div class="row-action">
                                    <button class="about_btn" onclick="location.href='members.php'">Meal Plan and Schedule</button> 
                                </div>
                            </td> -->
                        </tr>

                        <tr>
                            <td>0003A</td>
                            <td>26/09/2021</td>
                            <td>Cash</td>
                            <td>Renewmembership & Assign to a trainer</td>
                            <td>Accountant</td>
                            <td>18,000</td>
                            <!-- <td>
                                <div class="row-action">
                                    <button class="about_btn" onclick="location.href='members.php'">Meal Plan and Schedule</button> 
                                </div>
                            </td> -->
                        </tr>

                        <!-- <tr>
                            <td>0003A</td>
                            <td>30/7/2021</td>
                            <td>Cash</td>
                            <td>Renewmembership </td>
                            <td>Accountant</td>
                            <td>6,500</td> -->
                            <!-- <td>
                                <div class="row-action">
                                    <button class="about_btn" onclick="location.href='members.php'">Meal Plan and Schedule</button> 
                                </div>
                            </td> -->
                        <!-- </tr> -->
 
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
        <div class="HdividerL"></div>   
    </section>
    <?php include "includes/footer.php" ?>


</body>

</html>