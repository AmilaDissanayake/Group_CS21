<?php
include 'includes/db.php';

$username = $_GET['username'];


$sql = "SELECT * FROM member WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$sql2 = "SELECT * FROM users WHERE username = '$username'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);

$f_name = $row['f_name'];
$l_name = $row['l_name'];
$phone_no = $row['phone_no'];
$address = $row['address'];
$dob = $row['dob'];
$gender = $row['gender'];
$inj = $row['injuries'];
$email = $row2['email'];
$member_id = $row['member_id'];
$assign_trainer = $row['assign_trainer'];

$sql3 = "SELECT * FROM membership WHERE member_id = '$member_id'";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($result3);

$membership_type = $row3['membership_type'];

$trainer;
$sql4;

if ($assign_trainer == 0) {
    $trainer = 0;
} else {
    $sql4 = "SELECT trainer_id FROM assignment WHERE member_id = '$member_id'";
}

$result4 = mysqli_query($conn, $sql4);
$row4 = mysqli_fetch_assoc($result4);



?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">


    <link rel="stylesheet" href="css/update-member.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/update-member.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>


        <div class="home-content">
            <div class="login">
                <div class="l-form">
                    <form hidden class="form" id="delete_form" action="delete-member.php" method="POST">
                        <input type="text" id="h-username" value="<?php echo $username ?>" name="username">
                    </form>
                    <form action="update-member-php.php" class="form" id="signup_form" method="POST">
                        <h1 class="form__title">Update MEMBER</h1>
                        <div class="pic">
                            <img src="../member/media/<?php echo $image ?>" alt="">
                        </div>

                        <div class="separator">
                            <hr class="hr-left1" />
                            <span class="hr-text">MEMBER DETAILS</span>
                            <hr class="hr-right1" />
                        </div><br>

                        <div class="name">
                            <div class="form__div">
                                <input type="text" class="name_input" id="fname" value="<?php echo $f_name ?> " name="f_name_cc">
                                <label for="" class="form__label">First Name</label>
                                <i class="fa fa-check"></i>
                                <i class="fas fa-exclamation-triangle"></i>
                                <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                                <small>Error message</small>
                            </div>
                            <div class="form__div">
                                <input type="text" class="name_input" id="lname" value="<?php echo $l_name ?>" name=" l_name_cc">
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
                                        <option value="" disabled> Gender </option>
                                        <option value="male" <?php if ($gender == 'male') {
                                                                    echo "selected";
                                                                } ?>>Male</option>
                                        <option value="female" <?php if ($gender == 'female') {
                                                                    echo "selected";
                                                                } ?>>Female</option>
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
                                <input type="text" class="name_input2" id="mnumber" placeholder=" " value="<?php echo $phone_no ?>" name="phone_no_cc">
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
                            <input type="date" class="form__input" value="<?php echo $dob ?>" id=" dateofbirth" placeholder=" " name="dob_cc" min="1920-10-01" max="2010-10-20">
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
                            <input type="text" class="form__input" id="address" placeholder=" " name="address_cc" value="<?php echo $address ?>">
                            <label for="" class="form__label">Address</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                        </div>
                        <div class="inj__div">
                            <textarea type="text" cols="40" rows="5" class="injury" id="inj" placeholder=" " name="injuries_cc" value="<?php echo $inj ?>"></textarea>
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
                            <input type="text" class="form__input" id="email" placeholder=" " name="email_cc" value="<?php echo $email ?>">
                            <label for="" class="form__label">Email</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                        </div>

                        <div class="form__div" id="uname">
                            <input type="text" class="form__input" id="username" placeholder=" " name="username" value="<?php echo $username ?>" disabled>
                            <label for="" class="form__label">Username</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <div id="uname_response"></div>
                            <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                            <small></small>
                        </div>
                        <!-- <div class="name">
                            <div class="form__div">
                                <input type="password" class="name_input" id="password1" placeholder=" " onkeyup="return passwordChanged();" name="password_cc">
                                <label for="" class="form__label">Password</label>
                                <i class="fa fa-check"></i>
                                <i class="fas fa-exclamation-triangle"></i>
                                <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>
                            </div>
                            <div class="form__div">
                                <input type="password" class="name_input" id="password2" placeholder=" " onkeyup="return passwordChanged2();">
                                <label for="" class="form__label">Confirm Password</label>
                                <i class="fa fa-check"></i>
                                <i class="fas fa-exclamation-triangle"></i>
                                <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>
                            </div>
                        </div>

                        <input type="checkbox" onclick="myunction()">Show Password

                        <label class="container">Show Password
                            <input type="checkbox" onclick="myunction()">
                            <span class="checkmark"></span>
                        </label> -->

                        <div class="select__div">


                            <label>
                                <select id="membership" class="form_input" required name="membership_cc" disabled>
                                    <option value="" disabled> Select Your Membership </option>
                                    <option value=2500 <?php if ($membership_type == 1) {
                                                            echo "selected";
                                                        } ?>> One Month 2500/=
                                    </option>
                                    <option value=7000 <?php if ($membership_type == 3) {
                                                            echo "selected";
                                                        } ?>> Three Months 7000/=
                                    </option>
                                    <option value=13500 <?php if ($membership_type == 6) {
                                                            echo "selected";
                                                        } ?>> Six Months 13500/=
                                    </option>
                                    <option value=20000 <?php if ($membership_type == 12) {
                                                            echo "selected";
                                                        } ?>> One Year 20000/=
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
                        <!-- <div class="tooltip"><i class="fas fa-exclamation-circle"></i>
                            <span class="tooltiptext">You can select a trainer here if you like. Please note that trainer will be assigned only for a month. After one month you can select the same trainer again or a seperate trainer. Trainer cannot be changeg after assignment.</span>
                        </div> -->

                        <br>


                        <div class="select__div">


                            <label>
                                <select id="trainer" class="form_input" required name="trainer_cc" disabled>
                                    <option value=""> Select Your Trainer </option>
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

                                        <option value=<?php echo $trainer_id ?> <?php if ($trainer_id == $row4['trainer_id']) {
                                                                                    echo "selected";
                                                                                } ?> data-trainer=<?php echo $rate ?>>
                                            <?php echo $f_name ?> <?php echo $l_name ?>&nbsp;⭐<?php echo $review_value / $review_count ?></option>


                                    <?php } ?>
                                    <option value=0 data-trainer=0 <?php if ($trainer_id == 0) {
                                                                        echo "selected";
                                                                    } ?>>No Trainer</option>
                                </select>
                            </label>
                            <!-- <span class="tr"><br>
                                <p> See trainer details<span class="tr_link"><a href="../trainers.php" target="_blank">&nbsphere</a></span> </p>
                            </span> -->

                        </div>

                        <!-- <div class="remember">
                            <label class="container"> Member accepts the <span>Terms of Use</span> & <span>Privacy
                                    Policy</span>.
                                <input type="checkbox" id="mycheck">
                                <span class="checkmark"></span>
                            </label>
                            <label></label>

                        </div> -->
                    </form>



                    <div class="buttondiv"><input type="button" class="form__button" value="UPDATE MEMBER" name="form_submit" id="form_submit" onclick="submitFunction()"></div>

                    <div class="buttondiv" id="delete_submit"><input type="button" class="form__button" value="DELETE MEMBER" onclick="go()"></div>

                    <!-- <button value="DELETE MEMBER" id="delete_submit"></button> -->


                    <!-- <div class="payhere">
                            <p>Payments are securely processed by&nbsp;</p> <img src="payherelogo.png" width="80px">
                        </div> -->

                    <!-- <script>
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
                        </script> -->


                    <!-- <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script> -->

                    <script>
                        function submitFunction() {
                            var result = checkInputs();

                            if (result == true) {
                                // e.preventDefault();
                                document.getElementById("signup_form").submit();

                                // document.getElementById("signup_form").submit();

                                // }
                            }
                        }

                        function deleteFunction() {


                        }


                        // $(document).ready(function() {
                        //     $("#search").keydown(function() {
                        //         $.ajax({
                        //             type: 'POST',
                        //             url: 'search.php',
                        //             data: {
                        //                 name: $("#search").val(),
                        //             },
                        //             success: function(data) {
                        //                 $("#output").html(data);
                        //             }
                        //         });
                        //     });
                        // });

                        $(document).ready(function() {
                            $('#delete_submit').click(function() {
                                {
                                    $.ajax({
                                        type: 'POST',
                                        url: 'delete-member.php',
                                        dataType: "html",
                                        data: '<?php echo $username ?>',

                                        // success: function(data) {
                                        //     $("#output").html(data);
                                        // }
                                    });
                                }
                            });
                        });


                        function go() {
                            document.getElementById("delete_form").submit();
                        }
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