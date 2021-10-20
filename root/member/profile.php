

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/profedit.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>

        <div class="welcomenote"><h1>HI! PAMODHA</h1></div>
 
        <!-- <div class="dashcover"></div> -->
        
        <div class="duhead"></div>
        <div class="divider"></div>

        <div class="dwnpart">
            <div class="divider3"></div>
            <div class="lsd">
                <div class="note2"><h1>Profile</h1></div>
                <div class="con1">
                    <div class="profcov">
                        <div class="aper">
                            <div class="avatar">
                                <img src="./media/thusitha.jpg">
                                <i class='bx bxs-edit-alt'></i>
                            </div>
                            <div class="joined-date">
                                <p>Joined since september 2019</p>
                            </div>
                            <div class="fulname">
                                <p>Amila Dissanayake</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pdetail">
 
                    </div>
                </div>
                <div class="con1">
                    <div class="profcov2">
                        <div class="aper">
                            <div class="covuname">
                                <p>amila99</p>
                            </div>
                            <div class="pdetails">
                            <i class='bx bx-dumbbell'></i>  NAME <p> <i class='bx bxs-right-arrow'></i> Amila Dissanayaka</p>
                            <i class='bx bx-dumbbell'></i> GENDER  <p><i class='bx bxs-right-arrow'></i>  MALE</p>
                            <i class='bx bx-dumbbell'></i> AGE  <p> <i class='bx bxs-right-arrow'></i> 22</p>
                            <i class='bx bx-dumbbell'></i> LIVES IN <p> <i class='bx bxs-right-arrow'></i>Mirigama</p>
                            <i class='bx bx-dumbbell'></i> CONTACT NO. <p> <i class='bx bxs-right-arrow'></i> 0750000001</p>
                            <i class='bx bx-dumbbell'></i> E-MAIL <p><i class='bx bxs-right-arrow'></i>abc@gmail.conm</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pdetail">
 
                    </div>
                </div>

            </div>  
            <div class="divider3"></div>
            <div class="rsd">
                <div class="con1">
                    <form action="signup.php" class="form" id="signup_form" method="POST">
                        <!-- <h1 class="form__title">SIGN UP</h1> -->

                        <div class="separator">
                            <hr class="hr-left1" />
                                <span class="hr-text">PERSONAL INFO </span>
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
                        <textarea type="text" cols="40" rows="5" class="injury" id="inj" placeholder=" " name="injuries_cc"></textarea>
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
                        <span class="hr-text">ACCOUNT INFO</span>
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
                        <div id="uname_response" ></div>
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
                            <small>Error message</small>
                        </div>
                        <div class="form__div">
                            <input type="password" class="name_input" id="password2" placeholder=" " onkeyup="return passwordChanged2();">
                            <label for="" class="form__label">Confirm Password</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <small>Error message</small>
                        </div>
                    </div>

                    <label class="container">Show Password
                        <input type="checkbox" onclick="myunction()">
                        <span class="checkmark"></span>
                    </label> 

                    <div class="buttondiv"><input type="button" class="form__button" value="SAVE PROFILE" name="form_submit" id="form_submit" onclick="submitFunction()"></div>
                </div>
            </div>
            <div class="divider3"></div>
        </div>
 
        <div class="divider"></div>
           
    </section>
    <?php include "includes/footer.php" ?>

    <script type="text/javascript" src="./../signup/signup.js"></script>
</body>

</html>