<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SignUp</title>
    <!-- <link rel="shortcut icon" href="media/TabIcon.jpg">  -->

    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>

</head>

<body>
    <section>
        <div class="img">
            <p>
            <h1 class="head">POWER HOUSE</h1>
            <h3 class="head3">FITNESS ACADEMY</h3>
            <!-- <h5 class="head4">Feel good breath</h5> -->
            <h5 class="head5">THE CLOCK IS TICKING. <br> ARE YOU<span>BECOMING</span> THE <span>PERSON </span>YOU
                WANT TO BE?
            </h5>
            </p>
            <div class="homeIcon">
                <a href="index.html" class=" fas fa-chevron-left"> </a>
                <a href="../index.php">&nbsp Back to home</a>
            </div>
        </div>
        <div class="login">
            <div class="l-form">
                <form action="signup.php" class="form" id="form" method="POST">
                    <h1 class="form__title">SIGN UP</h1>

                    <div class="separator">
                        <hr class="hr-left1" />
                        <span class="hr-text">YOUR DETAILS</span>
                        <hr class="hr-right1" />
                    </div><br>

                    <div class="name">
                        <div class="form__div">
                            <input type="text" class="name_input" id="fname" placeholder=" " name="f_name">
                            <label for="" class="form__label">First Name</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                        </div>
                        <div class="form__div">
                            <input type="text" class="name_input" id="lname" placeholder=" " name="l_name">
                            <label for="" class="form__label">Last Name</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="name">
                        <div class="select__div">
                            <label>
                                <select class="form_input" id="gender" required name="gender">
                                    <option value="" disabled selected> Gender </option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                        </div>
                        <div class="form__div">
                            <input type="text" class="name_input2" id="mnumber" placeholder=" " name="phone_no">
                            <label for="" class="form__label">Mobile Number</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                        </div>
                    </div>

                    <div class="form__div">
                        <input type="date" class="form__input" value="2000-10-20" id=" dateofbirth" placeholder=" " name="dob">
                        <label for="" class="form__label">Date Of Birth</label>
                        <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                        <small>Error message</small>
                    </div>

                    <div class="form__div">
                        <input type="text" class="form__input" id="address" placeholder=" " name="address">
                        <label for="" class="form__label">Address</label>
                        <i class="fa fa-check"></i>
                        <i class="fas fa-exclamation-triangle"></i>
                        <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                        <small>Error message</small>
                    </div>
                    <div class="inj__div">
                        <textarea type="text" cols="40" rows="5" class="injury" id="inj" placeholder=" " name="injuries"></textarea>
                        <label for="" class="form__label">If you have any injury mention here...</label>
                        <i class="fa fa-check"></i>
                        <i class="fas fa-exclamation-triangle"></i>
                        <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                        <small>Error message</small>
                    </div>
                    <br>

                    <div class="separator">
                        <hr class="hr-left2" />
                        <span class="hr-text">ACCOUNT DETAILS</span>
                        <hr class="hr-right2" />
                    </div>
                    <br>




                    <div class="form__div">
                        <input type="text" class="form__input" id="email" placeholder=" " name="email">
                        <label for="" class="form__label">Email</label>
                        <i class="fa fa-check"></i>
                        <i class="fas fa-exclamation-triangle"></i>
                        <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                        <small>Error message</small>
                    </div>

                    <div class="form__div">
                        <input type="text" class="form__input" id="username" placeholder=" " name="username">
                        <label for="" class="form__label">Username</label>
                        <i class="fa fa-check"></i>
                        <i class="fas fa-exclamation-triangle"></i>
                        <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                        <small>Error message</small>
                    </div>
                    <div class="name">
                        <div class="form__div">
                            <input type="password" class="name_input" id="password1" placeholder=" " onkeyup="return passwordChanged();" name="password">
                            <label for="" class="form__label">Password</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                        </div>
                        <div class="form__div">
                            <input type="password" class="name_input" id="password2" placeholder=" ">
                            <label for="" class="form__label">Confirm Password</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="select__div">


                        <label>
                            <select id="membership" class="form_input" required name="membership">
                                <option value="" disabled selected> Select Your Membership </option>
                                <option value=2500> One Month
                                </option>
                                <option value=7000> Three Months
                                </option>
                                <option value=13500> Six Months
                                </option>
                                <option value=20000> One Year
                                </option>




                            </select>
                        </label>

                    </div>
                    <br>

                    <div class="separator">
                        <hr class="hr-left2" />
                        <span class="hr-text">TRAINER DETAILS</span>


                        <hr class="hr-right2" />
                    </div>
                    <div class="tooltip"><i class="fas fa-exclamation-circle"></i>
                        <span class="tooltiptext">You can select a trainer here if you like. Please note that trainer will be assigned only for a month. After one month you can select the same trainer again or a seperate trainer. Trainer cannot be changeg after assignment.</span>
                    </div>

                    <br>


                    <div class="select__div">


                        <label>
                            <select id="trainer" class="form_input" required name="trainer">
                                <option value="" disabled selected> Select Your Trainer </option>
                                <?php

                                require "includes/db.php";

                                $query = "SELECT * FROM trainer";

                                $select_query = mysqli_query($conn, $query);

                                while ($row = mysqli_fetch_assoc($select_query)) {
                                    $f_name = $row['f_name'];
                                    $l_name = $row['l_name'];

                                    $trainer_id = $row['trainer_id'];

                                    $rate = $row['rate'];
                                    // $rate = (int)$rate;


                                    $query2 = "SELECT * FROM review WHERE trainer_id = $trainer_id";
                                    $review_query = mysqli_query($conn, $query2);
                                    $review_count = mysqli_num_rows($review_query);
                                    $review_value = 0;

                                    while ($review_row = mysqli_fetch_assoc($review_query)) {
                                        $review_value += $review_row['stars'];
                                    }


                                    // $select_query = mysqli_query($connection, $query);

                                ?>

                                    <option value=<?php echo $trainer_id ?> data-trainer=<?php echo $rate ?>>
                                        <?php echo $f_name ?> <?php echo $l_name ?>&nbsp;(⭐<?php echo $review_value / $review_count ?>)</option>


                                <?php } ?>
                                <option value=0 data-trainer=0>I don't need a trainer</option>
                            </select>
                        </label>
                        <span class="tr"><br>
                            <p> See trainer details<span class="tr_link"><a href="../trainers.php" target="_blank">&nbsphere</a></span> </p>
                        </span>
                    </div>

                    <div class="remember">
                        <label><input type="checkbox" name=""> I accept the <span>Terms of Use</span> & <span>Privacy
                                Policy</span>.</label>
                        <span class="checkmark"></span>
                    </div>

                    <div class="buttondiv"><input type="submit" class="form__button" value="SIGN UP" name="submit" id="submit"></div>
                    <div class="payhere">
                        <p>Payments are securely processed by&nbsp;</p> <img src="payherelogo.png" width="80px">
                    </div>

                    <script>
                        // form.addEventListener("submit", function(e) {
                        //     e.preventDefault();
                        //     checkInputs();
                        //     if (isValid == false) {
                        //         e.preventDefault();
                        //     } else if (isValid == true) {
                        //         payhere.startPayment(payment);
                        //     }

                        // });
                        var selectedTrainer;
                        var selectedMembership;
                        var cost = 0;
                        var temp1 = 0;
                        var temp2 = 0;
                        var button = $(".form__button");
                        $(document).ready(function() {
                            $("select#trainer").change(function() {

                                selectedTrainer = $(this).find('option:selected').data('trainer');
                                // alert($(this).find(':selected').data('trainerRate'));
                                selectedTrainer = parseInt(selectedTrainer, 10);
                                if (temp1 > 0) {
                                    cost = cost - temp1;
                                    cost = cost + selectedTrainer;
                                } else {
                                    cost = cost + selectedTrainer;
                                }

                                // alert("You have selected the country - " + selectedCountry);

                                // button.val("SIGN UP & PAY" + " " + selectedTrainer + "/=");
                                temp1 = selectedTrainer;

                                button.val("SIGN UP & PAY" + " " + cost + "/=");

                            });


                        });

                        $(document).ready(function() {
                            $("select#membership").change(function() {
                                selectedMembership = $(this).children("option:selected").val();
                                selectedMembership = parseInt(selectedMembership, 10);

                                if (temp2 > 0) {
                                    cost = cost - temp2;
                                    cost = cost + selectedMembership;
                                } else {
                                    cost = cost + selectedMembership;
                                }
                                temp2 = selectedMembership;
                                button.val("SIGN UP & PAY" + " " + cost + "/=");
                                // cost = cost - selectedMembership;
                                // alert("You have selected the country - " + selectedCountry);

                                // button.val("SIGN UP & PAY" + " " + selectedTrainer + "/=");
                            });


                        });
                    </script>




                    <div class="signup">
                        <p>Have an account? <a href="#" class="hover"> Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="signup.js"></script>

</body>

</html>