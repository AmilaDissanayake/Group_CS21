

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/profedit.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>

        <div class="seperator"></div>
        <div class="dwnpart">
            <div class="left">
                <div class="avatar">
                    <img src="../media/trainers/thusitha.jpg">
                </div>
                <div class="joined-date">
                    <p>Joined September 2018 </p>
                </div>
                <div class="name-trainer">
                    <p>THUSITHA KEKULAWALA ⭐ 5 </p>
                </div>
                <div class="stat">
                    <div class="exp">
                        <p>3 YRS<br>Expirience</p>
                    </div>
                    <div class="rate">
                        <p>5000/=<br>Per Month</p>
                    </div>
                    <div class="review-count">
                        <p>3<br>Reviews</p>
                    </div>
                </div>
                <div class="about">
                    <h4>ABOUT</h4>
                    <p>10+ years of experience as a Personal Trainer. 
                        I am enthusiastic about instructing groups and individuals on exercise 
                        activities and the fundamentals of sports by demonstrating proper techniques and 
                        methods of participation. I enjoy teaching group fitness classes to people of all 
                        ages and encouraging safe use of exercise equipment to promote individual fitness goals.</p>
                </div>

                <div class="divider">
                <span class="fade-effect2"> </span>
                </div>

                <div class="qualifications">
                    <h4>Qualifications</h4>
                    <ul>
                        <li>NCSF-Accredited personal trainer</li>
                        <li>Additional expertise in youth athletic conditioning</li>
                        <li>with focuses on strength training</li>
                        <li>Strong interpersonal communication skills</li>
                        <li>Excellent leadership skills</li>
                    </ul>
                </div>
            </div>
            <div class="rsd">
                    <form action="signup.php" class="form" id="signup_form" method="POST">
                                <span class="hr-text">PERSONAL INFO </span>
                                <div class="divider">
                                <span class="fade-effect2"> </span>
                                </div>

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
                        <input type="date" class="form__input" value="2000-10-20" id="dateofbirth" placeholder=" " name="dob_cc" min="1920-10-01" max="2010-10-20">
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
                        <textarea type="text" cols="40" rows="5" class="injury" id="inj" placeholder=" " name="injuries_cc"></textarea>
                        <label for="" class="form__label">About you...</label>
                        <i class="fa fa-check"></i>
                        <i class="fas fa-exclamation-triangle"></i>
                        <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                        <small>Error message</small>
                    </div>
                    <br>

                    <div class="buttondiv"><input type="button" class="form__button" value="UPDATE PROFILE" name="form_submit" id="form_submit" onclick="submitFunction()"></div>


                        <span class="hr-text">ACCOUNT INFO</span>
                        <div class="divider">
                            <span class="fade-effect2"> </span>
                        </div>

                    <div class="topic"><h2><i class='bx bx-pen'></i>Change E-mail</h2></div>
                    <div class="form__div">
                        <input type="text" class="form__input" id="email" placeholder=" " name="email_cc">
                        <label for="" class="form__label">Email</label>
                        <i class="fa fa-check"></i>
                        <i class="fas fa-exclamation-triangle"></i>
                        <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                        <small>Error message</small>
                    </div>

                    <div class="buttondiv"><input type="button" class="form__button" value="UPDATE EMAIL" name="form_submit" id="form_submit" onclick="submitFunction()"></div>

                    <div class="topic"><h2><i class='bx bx-pen'></i>Change Rate</h2></div>
                    <div class="form__div" id="Rate_div">
                        <input type="text" class="form__input" id="Rate" placeholder=" ">
                        <label for="" class="form__label">Rate</label>
                        <i class="fa fa-check"></i>
                        <i class="fas fa-exclamation-triangle"></i>
                        <div id="uname_response" ></div>
                        <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                        <small></small>
                    </div>

                    <div class="buttondiv"><input type="button" class="form__button" value="UPDATE RATE" name="form_submit" id="form_submit" onclick="submitFunction()"></div>

                    <div class="topic"><h2><i class='bx bx-pen'></i>Change Password</h2></div>
                    <div class="form__div">
                            <input type="password" class="name_input" id="password1" placeholder=" " onkeyup="return passwordChanged();" name="password_cc">
                            <label for="" class="form__label">Current Password</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <small>Error message</small>
                    </div>

                    <div class="name">
                        <div class="form__div">
                            <input type="password" class="name_input" id="password1" placeholder=" " onkeyup="return passwordChanged();" name="password_cc">
                            <label for="" class="form__label">New Password</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form__div">
                            <input type="password" class="name_input" id="password2" placeholder=" " onkeyup="return passwordChanged2();">
                            <label for="" class="form__label">Confirm New Password</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <small>Error message</small>
                        </div>
                    </div>

                    <label class="container">Show Password
                        <input type="checkbox" onclick="myunction()">
                        <span class="checkmark"></span>
                    </label> 

                    <div class="buttondiv"><input type="button" class="form__button" value="UPDATE PASSWORD" name="form_submit" id="form_submit" onclick="submitFunction()"></div>
                </div>
        </div>
           
    </section>
    <!-- <?php include "includes/footer.php" ?> -->

    <script type="text/javascript" src="./../signup/signup.js"></script>
</body>

</html>