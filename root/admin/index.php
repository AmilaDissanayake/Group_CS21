<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login (Admin)</title>
    <!-- <link rel="shortcut icon" href="media/TabIcon.jpg">  -->

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

        </div>
        <div class="login">
            <div class="l-form">
                <form action="login.php" class="form" id="form" method="GET">
                    <h1 class="form__title">LOGIN (Admin)</h1>

                    <div class="form__div">
                        <input type="text" class="form__input" id="username" placeholder=" " name="username">
                        <label for="" class="form__label">Username or Email</label>
                        <i class="fa fa-check"></i>
                        <i class="fas fa-exclamation-triangle"></i>
                        <small>Error message</small>
                    </div>

                    <div class="form__div">
                        <input type="password" class="form__input" id="password" placeholder=" " id="password" name="password">

                        <label for="" class="form__label">Password</label>
                        <i class="fa fa-check"></i>
                        <i class="fas fa-exclamation-triangle"></i>
                        <small>Error message</small>
                    </div>

                    <div class="buttondiv"><input type="submit" class="form__button" value="Login" name="submit"></div>
                    <?php
                    if (isset($_SESSION['error'])) {
                        $error = $_SESSION['error'];
                        echo "<span class='error'>$error</span>";
                    }
                    ?>
                    <div class="remember">
                        <label><input type="checkbox" name=""> Remember me</label>
                        <span class="checkmark"></span>

                        <a href="#" class="hover">Forget password</a>
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

    <!-- <script type="text/javascript" src="js/login.js"></script> -->
</body>

</html>

<?php
unset($_SESSION['error']);
?>