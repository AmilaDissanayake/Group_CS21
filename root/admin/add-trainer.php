<?php include "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">


    <link rel="stylesheet" href="css/add-trainer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/add-trainer.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>


        <div class="home-content">
            <div class="login">
                <div class="l-form">
                    <form action="add-member-php.php" class="form" id="signup_form" method="POST">
                        <h1 class="form__title">ADD TRAINER</h1>

                        <div class="separator">
                            <hr class="hr-left1" />
                            <span class="hr-text">TRAINER DETAILS</span>
                            <hr class="hr-right1" />
                        </div><br>

                        <div class="name">
                            <div class="form__div">
                                <input type="text" class="name_input" id="fname" placeholder=" " name="f_name_cc">
                                <label for="" class="form__label">First Name</label>
                                <i class="fa fa-check"></i>
                                <i class="fas fa-exclamation-triangle"></i>
                                <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                                <small>Error message</small>
                            </div>
                            <div class="form__div">
                                <input type="text" class="name_input" id="lname" placeholder=" " name="l_name_cc">
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
                                    <select class="form_input" id="gender" required name="gender_cc">
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
                                <input type="text" class="name_input2" id="mnumber" placeholder=" " name="phone_no_cc">
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
                            <input type="date" class="form__input" value="2000-10-20" id=" dateofbirth" placeholder=" " name="dob_cc" min="1920-10-01" max="2010-10-20">
                            <label for="" class="form__label">Date Of Birth</label>
                            <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                            <script>
                                $("input[type='date']").keydown(function(event) {
                                    event.preventDefault();
                                });
                            </script>
                        </div>



                        <div class="form__div">
                            <input type="text" class="form__input" id="address" placeholder=" " name="address_cc">
                            <label for="" class="form__label">Address</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                        </div>
                        <div class="inj__div">
                            <textarea type="text" cols="40" rows="4" class="injury" id="inj" placeholder=" " name="about_cc"></textarea>
                            <label for="" class="form__label">About</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                        </div>

                        <div class="inj__div">
                            <textarea type="text" cols="40" rows="5" class="injury" id="inj" placeholder=" " name="qualifications_cc"></textarea>
                            <label for="" class="form__label">Qualifications</label>
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
                            <input type="text" class="form__input" id="email" placeholder=" " name="email_cc">
                            <label for="" class="form__label">Email</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                        </div>

                        <div class="form__div" id="uname">
                            <input type="text" class="form__input" id="username" placeholder=" " name="username_cc">
                            <label for="" class="form__label">Username</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <div id="uname_response"></div>
                            <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                            <small></small>
                        </div>
                        <div class="name">
                            <div class="form__div">
                                <input type="password" class="name_input" id="password1" placeholder=" " onkeyup="return passwordChanged();" name="password_cc">
                                <label for="" class="form__label">Password</label>
                                <i class="fa fa-check"></i>
                                <i class="fas fa-exclamation-triangle"></i>
                                <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                                <small>Error message</small>
                            </div>
                            <div class="form__div">
                                <input type="password" class="name_input" id="password2" placeholder=" " onkeyup="return passwordChanged2();">
                                <label for="" class="form__label">Confirm Password</label>
                                <i class="fa fa-check"></i>
                                <i class="fas fa-exclamation-triangle"></i>
                                <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                                <small>Error message</small>
                            </div>
                        </div>

                        <!-- <input type="checkbox" onclick="myunction()">Show Password -->

                        <label class="container">Show Password
                            <input type="checkbox" onclick="myunction()">
                            <span class="checkmark"></span>
                        </label>



                        <div class="remember">
                            <label class="container"> Member accepts the <span>Terms of Use</span> & <span>Privacy
                                    Policy</span>.
                                <input type="checkbox" id="mycheck">
                                <span class="checkmark"></span>
                            </label>
                            <label></label>

                        </div>

                        <div class="buttondiv"><input type="button" class="form__button" value="ADD TRAINER" name="form_submit" id="form_submit" onclick="submitFunction()"></div>


                        <!-- <div class="payhere">
                            <p>Payments are securely processed by&nbsp;</p> <img src="payherelogo.png" width="80px">
                        </div> -->

                        <script>
                            $(document).ready(function() {
                                $("#username").keyup(function() {
                                    var username = $(this).val().trim();
                                    if (username != '') {
                                        $.ajax({
                                            url: 'includes/ajaxfile.php',
                                            type: 'post',
                                            data: {
                                                username: username
                                            },
                                            success: function(response) {

                                                if (response == "<span style='color: #86ff71;'><b>Available</b></span>") {
                                                    $('#uname').removeClass("form_div error").addClass("form__div success")
                                                } else {
                                                    $('#uname').removeClass("form_div success")
                                                    $('#uname').addClass("form__div error")
                                                }

                                                $('#uname_response').html(response);
                                            }
                                        });
                                    } else {
                                        $("#uname_response").html("");
                                    }
                                });
                            });
                        </script>


                        <!-- <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script> -->

                        <script>
                            function myunction() {
                                var x = document.getElementById("password1");
                                var y = document.getElementById("password2");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                                if (y.type === "password") {
                                    y.type = "text";
                                } else {
                                    y.type = "password";
                                }
                            }
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

                                    button.val("ADD MEMBER & PAY" + " " + cost + "/=");





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
                                    button.val("ADD MEMBER & PAY" + " " + cost + "/=");
                                    // selectedTrainer2 = $("#trainer").find('option:selected').data('trainer');
                                    // selectedMembership2 = $("#membership option:selected").val();
                                    // alert(selectedTrainer2);
                                    // alert(selectedMembership2);
                                    // cost = cost - selectedMembership;
                                    // alert("You have selected the country - " + selectedCountry);

                                    // button.val("SIGN UP & PAY" + " " + selectedTrainer + "/=");
                                });


                            });







                            // cost = Number(cost);
                            // var bb = cost;

                            // fcost = cost.toString();
                            // fcost = cost.toString();
                            // alert(typeof(fcost));



                            // alert(selectedMembership2 + selectedTrainer2);



                            function calctotal() {

                                var fname1 = document.getElementById('fname').value;
                                var lname1 = document.getElementById('lname').value;
                                // const gender = document.getElementById('gender').value;
                                var mnumber1 = document.getElementById('mnumber').value;
                                // const dob = document.getElementById('dob');
                                var address1 = document.getElementById('address').value;
                                // const inj = document.getElementById('inj');
                                var email1 = document.getElementById('email').value;
                                var membership1 = document.getElementById('membership').value;
                                var trainer1 = document.getElementById('trainer').value;

                                var finalcost = selectedMembership + selectedTrainer;
                                finalcost2 = finalcost.toString();

                                function setCookie(cName, cValue) {
                                    // let date = new Date();
                                    // date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
                                    // const expires = "expires=" + date.toUTCString();
                                    document.cookie = cName + "=" + cValue;
                                }

                                // Apply setCookie
                                setCookie('amount', finalcost2);
                                document.getElementById("signup_form").submit();


                                // alert(finalcost2);
                                // alert(typeof(finalcost2)

                            }


                            //Put the payment variables here

                            // alert(finalcost2);
                            // alert(typeof(finalcost2));


                            // var cc = "gtgtgtgt";

                            // payment["amount"] = cc;
                            // payment["items"] = fname1;


                            function submitFunction() {
                                var result = checkInputs();

                                if (result == true) {
                                    // e.preventDefault();
                                    calctotal();

                                    // document.getElementById("signup_form").submit();




                                    // }
                                }
                            }

                            // form.addEventListener("submit", function(e) {

                            //     checkInputs();
                            //     if (isValid == false) {
                            //         e.preventDefault();
                            //     } else if (isValid == true) {
                            //         e.preventDefault();
                            //         payhere.startPayment(payment);

                            //     }

                            // });
                        </script>



                        <!-- 
                        <div class="signup">
                            <p>Have an account? <a href="../login/index.php" class="hover"> Login</a></p>
                        </div> -->

                </div>
            </div>

        </div>
    </section>

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

</body>

</html>