<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Page</title>
    <!-- <link rel="shortcut icon" href="media/TabIcon.jpg">  -->

    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

</head>

<body>
    <section>
        <div class="img">
            <p>
            <h1 class="head">POWER HOUSE</h1>
            <h3 class="head3">FITNESS ACADEMY</h3>
            <!-- <h5 class="head4">Feel good breath</h5> -->
            <h5 class="head5">BUILD PERFECT BODY <br> SHAPE FOR <span>GOOD</span> AND <br><span>HEALTHY</span> LIFE.
            </h5>
            </p>
            <div class="homeIcon">
                <a href="index.html" class=" fas fa-chevron-left" </a>
                    <a href="../../index.php">&nbsp Back to home</a>
            </div>
        </div>
        <div class="login">
            <div class="l-form">
                <form action="login.php" class="form" id="form" method="POST">
                    <h1 class="form__title">MEMBER LOGIN<span id="Mem"></span></h1>
                    <!-- <span id="Mem">(MEMBER)</span><span id = "Tr">(TRAINER)</span> -->

                    <div class="select__div">
                        <label>
                            <!-- <select class="form_input" id="type" onChange="modechange()" required>
                                    <option value="" disabled selected> Select Login Type </option>
                                    <option value="1">Trainer</option>
                                    <option value="2">Member</option>
                                </select> -->
                        </label>
                    </div>



                    <div class="form__div">
                        <input type="text" class="form__input" id="username" placeholder=" " name="username">
                        <label for="" class="form__label">Username or Email</label>
                        <i class="fa fa-check"></i>
                        <i class="fas fa-exclamation-triangle"></i>
                        <small>Error message</small>
                    </div>

                    <div class="form__div">
                        <input type="password" class="form__input" id="password" placeholder=" " name="password">

                        <label for="" class="form__label">Password</label>
                        <i class="fa fa-check"></i>
                        <i class="fas fa-exclamation-triangle"></i>
                        <small>Error message</small>
                    </div>

                    <div class="buttondiv"><input type="submit" class="form__button" value="Login" name="submit"></div>

                    <!-- <button class="err">Show Alert</button> -->
                    <div class="alert hide">
                        <!-- <span class="fas fa-exclamation-circle"></span> -->
                        <span class="msg">Username or password is Incorrect!</span>
                        <div class="close-btn">
                            <span class="fas fa-times"></span>
                        </div>
                    </div>

                    <script>
                        function nn() {
                            $('.alert').addClass("show");
                            $('.alert').removeClass("hide");
                            $('.alert').addClass("showAlert");
                            setTimeout(function bb() {
                                $('.alert').removeClass("show");
                                $('.alert').addClass("hide");
                            }, 500000);
                        };
                        $('.close-btn').click(function ss() {
                            $('.alert').removeClass("show");
                            $('.alert').addClass("hide");
                        });
                    </script>


                    <?php
                    if (isset($_SESSION['error'])) {
                        $error = $_SESSION['error'];
                        echo '<script type="text/javascript">nn();</script>';
                    }
                    ?>

                    <div class="remember">
                        <label><input type="checkbox" name=""> Remember me</label>
                        <span class="checkmark"></span>

                        <a href="forget-pw.php" class="hover">Forget password</a>
                    </div>



                    <div class="signup">
                        <p>Don't have an account? <a href="#" class="hover"> Sign up</a></p>
                    </div>
                    <div class="icon">
                        <a href="#" class="fa fa-facebook"></a>
                        <!-- <a href="#" class="fa fa-google"></a> -->
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-whatsapp"></a>

                    </div>
                </form>
            </div>




        </div>
    </section>

    <script type="text/javascript" src="login.js"></script>
</body>

</html>

<?php
unset($_SESSION['error']);
?>