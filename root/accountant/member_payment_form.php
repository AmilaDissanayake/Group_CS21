<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/profedit.css">
    <link href="css/justselect.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    
    <section> 
                    <form action="signup.php" class="form" id="signup_form" method="POST">

                        <div class="separator">
                                <hr class="hr-left1" />
                                    <span class="hr-text">MEMBER PAYMENT </span>
                                <hr class="hr-right1" />
                        </div><br><br><br> <br><br>   
                    
                        <div class="main_class">
                            <div class="form__div" id="main_address1">
                                <input type="text" class="form__input" id="address1" placeholder=" " name="address_cc">
                                <label for="" class="form__label">User Name</label>
                                
                            </div>
                            <div class="form__div" id="main_address1">
                                <input type="text" class="form__input" id="address1" placeholder=" " name="address_cc">
                                <label for="" class="form__label">Email</label>
                            </div>

                            <div class="select__div" id="select_div">


                                <label>
                                    <select id="membership1" class="form_input" required name="membership_cc">
                                        <option value="" disabled selected> Assigned Trainer </option>
                                        <option> Thusitha
                                        </option>
                                        <option> Isuru
                                        </option>
                                        <option> Dinuka
                                        </option>
                                        <option> Hasitha
                                        </option>
                                    </select>
                                </label>

                            </div>

                            <div class="select__div" id="select_div">


                                <label>
                                    <select id="membership1" class="form_input" required name="membership_cc">
                                        <option value="" disabled selected> Membership Type </option>
                                        <option value=2500> One Month 2500/=
                                        </option>
                                        <option value=7000> Three Months 7000/=
                                        </option>
                                        <option value=13500> Six Months 13500/=
                                        </option>
                                        <option value=20000> One Year 20000/=
                                        </option>
                                    </select>
                                </label>

                            </div>

                            <div class="form__div" id="main_address1">
                                <input type="text" class="form__input" id="address1" placeholder=" " name="address_cc">
                                <label for="" class="form__label">Amount</label>
                            </div>
                            <div class="buttondiv">
                                <input type="button" class="form__button" value="PAY" name="form_submit" id="form_submit1">
                            </div>
                        </div>
                        

                        
    </section>
    <?php include "includes/footer.php" ?>

    <script type="text/javascript" src="./../signup/signup.js"></script>
    <script src="js/justselect.min.js"></script>
</body>

</html>