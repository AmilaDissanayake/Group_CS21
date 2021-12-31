<?php include "includes/check_login.php" ?>

<?php 
    require "includes/db.php";
    $username = $_SESSION['username'];
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/schedule.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>

        <div class="welcomenote"><h1></h1></div>
        <div class="HdividerL">
            <script>
                function nn() {
                    $('.alert').addClass("show");
                    $('.alert').removeClass("hide");
                    $('.alert').addClass("showAlert");
                        setTimeout(function bb() {
                        $('.alert').removeClass("show");
                        $('.alert').addClass("hide");
                        }, 4000);
                    };
            </script>
            <div class="alert hide">
                <?php
                    if (isset($_SESSION['notification'])) {
                        $notification = $_SESSION['notification'];
                        echo '<script type="text/javascript">nn();</script>';
                    }
                ?>
                <span class="msg"><?php echo $notification ?></span>
                <div class="close-btn">
                    <span class="fas fa-times"></span>
                </div>
            </div>
            <script>
                $('.close-btn').click(function ss() {
                    $('.alert').removeClass("show");
                    $('.alert').addClass("hide");
                });
            </script>
        </div>
        <div class="up">
            <div class="vboderdivider"></div>
            <div class="middle">
                <div class="note"><h1>Workout Schedule</h1></div>
                
                </div>
                <div class="member-list">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>DAY 01</th>
                                <th>DAY 02</th>
                                <th>DAY 03</th>
                                <th>DAY 04</th>
                                <th>DAY 05</th>
                                <th>DAY 06</th>
                                <th>DAY 07</th>
                            </tr>
                        </thead>

                        <tbody id="output">
                        <tr>
                                <td class="col_1"><b><span class ="bpart">Chest  ></span><br> flat barbell bench press</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_2"><b>Rest</b></td>
                                <td class="col_3"><b><span class ="bpart">Legs  ></span><br> barbell back squats</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_4"><b>Rest</b></td>
                                <td class="col_5"><b><span class ="bpart">Shoulders  ></span><br> overhead press</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_6"><b>Rest</b></td>
                                <td class="col_7"><b><span class ="bpart">Back/hamstrings  ></span><br> barbell deadlift</b><br> 4 sets of 6 reps</td>
                                </tr>

                                <tr>
                                <td class="col_1"><b><span class ="bpart">Chest  ></span><br> flat barbell bench press</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_2"><b>Rest</b></td>
                                <td class="col_3"><b><span class ="bpart">Legs  ></span><br> barbell back squats</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_4"><b>Rest</b></td>
                                <td class="col_5" ><b><span class ="bpart">Shoulders  ></span><br> overhead press</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_6"><b>Rest</b></td>
                                <td class="col_7"><b><span class ="bpart">Back/hamstrings  ></span><br> barbell deadlift</b><br> 4 sets of 6 reps</td>
                                </tr>

                                <tr>
                                <td class="col_1"><b><span class ="bpart">Chest  ></span><br> flat barbell bench press</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_2"><b>Rest</b></td>
                                <td class="col_3"><b><span class ="bpart">Legs  ></span><br> barbell back squats</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_4"><b>Rest</b></td>
                                <td class="col_5"><b><span class ="bpart">Shoulders  ></span><br> overhead press</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_6"><b>Rest</b></td>
                                <td class="col_7"><b><span class ="bpart">Back/hamstrings  ></span><br> barbell deadlift</b><br> 4 sets of 6 reps</td>
                                </tr>

                                <tr>
                                <td class="col_1"><b><span class ="bpart">Chest  ></span><br> flat barbell bench press</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_2"><b>Rest</b></td>
                                <td class="col_3"><b><span class ="bpart">Legs  ></span><br> barbell back squats</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_4"><b>Rest</b></td>
                                <td class="col_5"><b><span class ="bpart">Shoulders  ></span><br> overhead press</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_6"><b>Rest</b></td>
                                <td class="col_7"><b><span class ="bpart">Back/hamstrings  ></span><br> barbell deadlift</b><br> 4 sets of 6 reps</td>
                                </tr>

                                <tr>
                                <td class="col_1"><b><span class ="bpart">Chest  ></span><br> flat barbell bench press</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_2"><b>Rest</b></td>
                                <td class="col_3"><b><span class ="bpart">Legs  ></span><br> barbell back squats</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_4"><b>Rest</b></td>
                                <td class="col_5"><b><span class ="bpart">Shoulders  ></span><br> overhead press</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_6"><b>Rest</b></td>
                                <td class="col_7"><b><span class ="bpart">Back/hamstrings  ></span><br> barbell deadlift</b><br> 4 sets of 6 reps</td>
                                </tr>

                                <tr>
                                <td class="col_7"><b><span class ="bpart">Chest  ></span><br> flat barbell bench press</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_7"><b>Rest</b></td>
                                <td class="col_7"><b><span class ="bpart">Legs  ></span><br> barbell back squats</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_7"><b>Rest</b></td>
                                <td class="col_7"><b><span class ="bpart">Shoulders  ></span><br> overhead press</b><br> 4 sets of 6–8 reps</td>
                                <td class="col_7"><b>Rest</b></td>
                                <td class="col_7"><b><span class ="bpart">Back/hamstrings  ></span><br> barbell deadlift</b><br> 4 sets of 6 reps</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <div class="fixT">
                    <button class="check_btn" id="tbook" type="submit" name="time-submit" onclick="location.href='#popup1'">EDIT SCHEDULE</button>
                </div>
            </div>
            
            <div class="vboderdivider"></div>
        </div>

        <div class="HdividerL"></div>

           
    </section>
    <?php include "includes/footer.php" ?>

    <script>   
        $( document ).ready(function() {
            window.location.href = "#";
        });

        var i;
        function changemode(i) {

            var value = document.getElementById(i).checked;
            alert(value);

            // var x = document.getElementById("password1");
            // var y = document.getElementById("password2");
            // var z = document.getElementById("password");
            // if (x.type === "password") {
            //     x.type = "text";
            // } else {
            //     x.type = "password";
            // }
            // if (y.type === "password") {
            //     y.type = "text";
            // } else {
            //     y.type = "password";
            // }
            // if (z.type === "password") {
            //     z.type = "text";
            // } else {
            //     z.type = "password";
            // }
        }
    </script>

</body>

</html>

<?php
unset($_SESSION['notification']);
?>