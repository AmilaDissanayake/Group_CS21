<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reset password</title>
    <!-- <link rel="shortcut icon" href="media/TabIcon.jpg">  -->

    <link rel="stylesheet" href="login.css">
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
                <div class="homeIcon">
                    <a href="../home/index.html" class="fas fa-backward"></a>
                    <a href="../home/index.html">Back to home</a>
                </div>
        </div>
        <div class="login">
            <div class="l-form">
                <form action="include/reset-request.inc.php" method="POST" class="form" id="form">
                    <h1 class="form__title">RESET YOUR PASSWORD</h1>
                   
                    <div class="form__div">
                        <input type="text" class="form__input" id="email" placeholder=" "name="email">

                        <label for="" class="form__label">ENTER YOUR E-MAIL ADDRESS</label>
                        <i class="fa fa-check"></i>
                        <!-- <i class="fas fa-check-circle"></i> -->
                        <i class="fas fa-exclamation-triangle"></i>
                        <!-- <i class="fas fa-exclamation"></i> -->
                        <!-- <i class="fas fa-exclamation-circle"></i> -->
                        <small>Error message</small>
                    </div>
                    <div class="buttondiv"><input type="submit" name="reset-request-submit" class="form__button" value="SEND AN E-MAIL"></div>
                </form>

                <?php
                    if(isset($_GET["reset"])){
                        if($_GET["reset"]=="success"){
                            echo "<p> Check your Email! </p>";
                        }
                    }

                ?>
            </div>

        </div>
    </section>
</body>

</html>