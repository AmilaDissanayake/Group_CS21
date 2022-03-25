<?php 
    require "includes/db.php";
    include "includes/check_login.php";
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/mealplan.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">
    <?php include "includes/header.php" ?>

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

        <!-- <button class="err">Show Alert</button> -->
        <div class="alert hide">

            <?php
            if (isset($_SESSION['notification'])) {
                $notification = $_SESSION['notification'];
                echo '<script type="text/javascript">nn();</script>';
            }
            ?>

            <!-- <span class="fas fa-exclamation-circle"></span> -->
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

        <div class="devider1"></div>
        
        <div class="uppart">
            <?php 
                $member_id = $_GET['member_id'];

                $sql1 = "SELECT f_name,l_name FROM member WHERE member_id= '".$member_id."'";
                        $result1 = mysqli_query($conn, $sql1);
                        $row1 = mysqli_fetch_assoc($result1);

                        $f_name = $row1['f_name'];
                        $l_name = $row1['l_name'];

                $query2 = "SELECT * FROM meal_plan WHERE member_id = '".$member_id."'";
                $result2 = mysqli_query($conn, $query2);
                $row2 = mysqli_fetch_assoc($result2);               
                $monday_bkft = $row2['monday_bkft'];$tuseday_bkft = $row2['tuseday_bkft'];$wednesday_bkft = $row2['wednesday_bkft'];$thursday_bkft = $row2['thursday_bkft'];$friday_bkft = $row2['friday_bkft'];$saturday_bkft = $row2['saturday_bkft'];$sunday_bkft = $row2['sunday_bkft'];
                $monday_msnk = $row2['monday_msnk'];$tuseday_msnk = $row2['tuseday_msnk'];$wednesday_msnk = $row2['wednesday_msnk'];$thursday_msnk = $row2['thursday_msnk'];$friday_msnk = $row2['friday_msnk'];$saturday_msnk = $row2['saturday_msnk'];$sunday_msnk = $row2['sunday_msnk'];
                $monday_lunch = $row2['monday_lunch'];$tuseday_lunch = $row2['tuseday_lunch'];$wednesday_lunch = $row2['wednesday_lunch'];$thursday_lunch = $row2['thursday_lunch'];$friday_lunch = $row2['friday_lunch'];$saturday_lunch = $row2['saturday_lunch'];$sunday_lunch = $row2['sunday_lunch'];
                $monday_esnk = $row2['monday_esnk'];$tuseday_esnk = $row2['tuseday_esnk'];$wednesday_esnk = $row2['wednesday_esnk'];$thursday_esnk = $row2['thursday_esnk'];$friday_esnk = $row2['friday_esnk'];$saturday_esnk = $row2['saturday_esnk'];$sunday_esnk = $row2['sunday_esnk']; 
                $monday_din = $row2['monday_din'];$tuseday_din = $row2['tuseday_din'];$wednesday_din = $row2['wednesday_din'];$thursday_din = $row2['thursday_din'];$friday_din = $row2['friday_din'];$saturday_din = $row2['saturday_din'];$sunday_din = $row2['sunday_din'];
            ?>
            <div class="vboderdivider"></div>
            <div class="middle">
                <div class="note">
                    <h1><?php echo "$f_name $l_name"?> - Meal Plan</h1>
                </div>
                <div id="popup1" class="overlay">
                    <div class="popup">
                        <a class="close" href="#">&times;</a>
                        <div class="content">
                            <table >
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>MONDAY</th>
                                        <th>TUSEDAY</th>
                                        <th>WEDNSEDAY</th>
                                        <th>THURSDAY</th>
                                        <th>FRIDAY</th>
                                        <th>SATURDAY</th>
                                        <th>SUNDAY</th>
                                    </tr>
                                </thead>  

                                <tbody id="output">

                                <form action="update_mealplan.php?member_id=<?php echo $member_id;?>"  id="meal_form " method="POST">
                                    <tr>
                                        <td class="rcat"><div class="ttag"><span class="bpart">Breakfast</span></div></td>
                                        <td class="col_1"><textarea class="item" rows="4" cols="50" id="mon_bf" name="mon_b"><?php echo $monday_bkft ?> </textarea></td>
                                        <td class="col_2"><textarea class="item" rows="4" cols="50" id="tus_bf" name="tus_b"><?php echo $tuseday_bkft ?> </textarea></td>
                                        <td class="col_3"><textarea class="item" rows="4" cols="50" id="wed_bf" name="wed_b"><?php echo $wednesday_bkft ?> </textarea></td>
                                        <td class="col_4"><textarea class="item" rows="4" cols="50" id="thu_bf" name="thu_b"><?php echo $thursday_bkft ?> </textarea></td>
                                        <td class="col_5"><textarea class="item" rows="4" cols="50" id="fri_bf" name="fri_b"><?php echo $friday_bkft ?> </textarea></td>
                                        <td class="col_6"><textarea class="item" rows="4" cols="50" id="sat_bf" name="sat_b"><?php echo $saturday_bkft ?> </textarea></td>
                                        <td class="col_7"><textarea class="item" rows="4" cols="50" id="sun_bf" name="sun_b"><?php echo $sunday_bkft ?> </textarea></td>
                                    </tr>

                                    <tr>
                                        <td class="rcat"><div class="ttag"><span class="bpart">Snack</span></div></td>
                                        <td class="col_1"><textarea class="item" rows="4" cols="50" id="mon_msk" name="mon_ms"><?php echo $monday_msnk ?></textarea></td>
                                        <td class="col_2"><textarea class="item" rows="4" cols="50" id="tus_msk" name="tus_ms"><?php echo $tuseday_msnk ?></textarea></td> 
                                        <td class="col_3"><textarea class="item" rows="4" cols="50" id="wed_msk" name="wed_ms"><?php echo $wednesday_msnk ?></textarea></td>
                                        <td class="col_4"><textarea class="item" rows="4" cols="50" id="thu_msk" name="thu_ms"><?php echo $thursday_msnk ?></textarea></td>
                                        <td class="col_5"><textarea class="item" rows="4" cols="50" id="fri_msk" name="fri_ms"><?php echo $friday_bkft ?></textarea></td>
                                        <td class="col_6"><textarea class="item" rows="4" cols="50" id="sat_msk" name="sat_ms"><?php echo $saturday_msnk ?></textarea></td>
                                        <td class="col_7"><textarea class="item" rows="4" cols="50" id="sun_msk" name="sun_ms"><?php echo $sunday_msnk ?></textarea></td>
                                    </tr>

                                    <tr>
                                        <td class="rcat"><div class="ttag"><span class="bpart">Lunch</span></div></td>
                                        <td class="col_1"><textarea class="item" rows="4" cols="50" id="mon_ln" name="mon_l"><?php echo $monday_lunch ?></textarea></td>
                                        <td class="col_2"><textarea class="item" rows="4" cols="50" id="tus_ln" name="tus_l"><?php echo $tuseday_lunch ?></textarea></td>
                                        <td class="col_3"><textarea class="item" rows="4" cols="50" id="wed_ln" name="wed_l"><?php echo $wednesday_lunch ?></textarea></td>
                                        <td class="col_4"><textarea class="item" rows="4" cols="50" id="thu_ln" name="thu_l"><?php echo $thursday_lunch ?></textarea></td>
                                        <td class="col_5"><textarea class="item" rows="4" cols="50" id="fri_ln" name="fri_l"><?php echo $friday_lunch ?></textarea></td>
                                        <td class="col_6"><textarea class="item" rows="4" cols="50" id="sat_ln" name="sat_l"><?php echo $saturday_lunch ?></textarea></td>
                                        <td class="col_7"><textarea class="item" rows="4" cols="50" id="sun_ln" name="sun_l"><?php echo $sunday_lunch ?></textarea></div>   </td>
                                    </tr>

                                    <tr>
                                        <td class="rcat"><div class="ttag"><span class="bpart">Snack</span></div></td>
                                        <td class="col_1"><textarea class="item" rows="4" cols="50" id="mon_esnk" name="mon_esn"><?php echo $monday_esnk ?></textarea></td>
                                        <td class="col_2"><textarea class="item" rows="4" cols="50" id="tus_esnk" name="tus_esn"><?php echo $tuseday_esnk ?></textarea></td>
                                        <td class="col_3"><textarea class="item" rows="4" cols="50" id="wed_esnk" name="wed_esn"><?php echo $wednesday_esnk ?></textarea></td>
                                        <td class="col_4"><textarea class="item" rows="4" cols="50" id="thu_esnk" name="thu_esn"><?php echo $thursday_esnk ?></textarea></td>
                                        <td class="col_5"><textarea class="item" rows="4" cols="50" id="fri_esnk" name="fri_esn"><?php echo $friday_esnk ?></textarea></td>
                                        <td class="col_6"><textarea class="item" rows="4" cols="50" id="sat_esnk" name="sat_esn"><?php echo $saturday_esnk ?></textarea></td>                        
                                        <td class="col_7"><textarea class="item" rows="4" cols="50" id="sun_esnk" name="sun_esn"><?php echo $sunday_esnk ?></textarea></td>
                                    </tr>

                                    <tr>
                                        <td class="rcat"><div class="ttag"><span class="bpart">Dinner</span></div></td>
                                        <td class="col_1"><textarea class="item" rows="4" cols="50" id="mon_din" name="mon_di"><?php echo $monday_din ?></textarea></td>    
                                        <td class="col_2"><textarea class="item" rows="4" cols="50" id="tus_din" name="tus_di"><?php echo $tuseday_din ?></textarea></td>
                                        <td class="col_3"><textarea class="item" rows="4" cols="50" id="wed_din" name="wed_di"><?php echo $wednesday_din ?></textarea></td>
                                        <td class="col_4"><textarea class="item" rows="4" cols="50" id="thu_din" name="thu_di"><?php echo $thursday_din ?></textarea></td>
                                        <td class="col_5"><textarea class="item" rows="4" cols="50" id="fri_din" name="fri_di"><?php echo $friday_din ?></textarea></td>
                                        <td class="col_6"><textarea class="item" rows="4" cols="50" id="sat_din" name="sat_di"><?php echo $saturday_din ?></textarea></td>
                                        <td class="col_7"><textarea class="item" rows="4" cols="50" id="sun_din" name="sun_di"><?php echo $sunday_din ?></textarea></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="fixT">
                                <button class="check_btn" id="tbook" type="submit" name="time-submit" onclick="">SAVE MEAL PLAN</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="member-list">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>MONDAY</th>
                                <th>TUSEDAY</th>
                                <th>WEDNSEDAY</th>
                                <th>THURSDAY</th>
                                <th>FRIDAY</th>
                                <th>SATURDAY</th>
                                <th>SUNDAY</th>
                            </tr>
                        </thead>

                        <tbody id="output">
                            <tr>
                                <td class="rcat">
                                    <div class="visul"><img src="./media/breakfast.png" alt=""></div>
                                    <div class="ttag"><span class="bpart">Breakfast</span></div>
                                </td>
                                <td class="col_1"><div class="item"><?php echo $monday_bkft ?></div></td>
                                <td class="col_2"><div class="item"><?php echo $tuseday_bkft ?></div></td>
                                <td class="col_3"><div class="item"><?php echo $wednesday_bkft ?></div></td>
                                <td class="col_4"><div class="item"><?php echo $thursday_bkft ?></div></td>
                                <td class="col_5"><div class="item"><?php echo $friday_bkft ?> </div></td>
                                <td class="col_6"><div class="item"><?php echo $saturday_bkft ?> </div></td>
                                <td class="col_7"><div class="item"><?php echo $sunday_bkft ?></div></td>
                            </tr>

                            <tr>
                                <td class="rcat">
                                    <div class="visul"><img src="./media/snack1.png" alt=""></div>
                                    <div class="ttag"><span class="bpart">Snack</span></div>
                                </td>
                                <td class="col_1"><div class="item"><?php echo $monday_msnk ?></div></td>
                                <td class="col_2"><div class="item"><?php echo $tuseday_msnk ?></div></td>
                                <td class="col_3"><div class="item"><?php echo $wednesday_msnk ?></div></td>
                                <td class="col_4"><div class="item"><?php echo $thursday_msnk ?></div></td>
                                <td class="col_5"><div class="item"><?php echo $friday_msnk ?> </div></td>
                                <td class="col_6"><div class="item"><?php echo $saturday_msnk ?> </div></td>
                                <td class="col_7"><div class="item"><?php echo $sunday_msnk ?></div></td>
                            </tr>

                            <tr>
                                <td class="rcat">
                                    <div class="visul"><img src="./media/lunch.png" alt=""></div>
                                    <div class="ttag"><span class="bpart">Lunch</span></div>
                                </td>
                                <td class="col_1"><div class="item"><?php echo $monday_lunch ?></div></td>
                                <td class="col_2"><div class="item"><?php echo $tuseday_lunch ?></div></td>
                                <td class="col_3"><div class="item"><?php echo $wednesday_lunch ?></div></td>
                                <td class="col_4"><div class="item"><?php echo $thursday_lunch ?></div></td>
                                <td class="col_5"><div class="item"><?php echo $friday_lunch ?> </div></td>
                                <td class="col_6"><div class="item"><?php echo $saturday_lunch ?> </div></td>
                                <td class="col_7"><div class="item"><?php echo $sunday_lunch ?></div></td>
                            </tr>

                            <tr>
                                <td class="rcat">
                                    <div class="visul"><img src="./media/snack2.png" alt=""></div>
                                    <div class="ttag"><span class="bpart">Snack</span></div>
                                </td>
                                <td class="col_1"><div class="item"><?php echo $monday_esnk ?></div></td>
                                <td class="col_2"><div class="item"><?php echo $tuseday_esnk ?></div></td>
                                <td class="col_3"><div class="item"><?php echo $wednesday_esnk ?></div></td>
                                <td class="col_4"><div class="item"><?php echo $thursday_esnk ?></div></td>
                                <td class="col_5"><div class="item"><?php echo $friday_esnk ?> </div></td>
                                <td class="col_6"><div class="item"><?php echo $saturday_esnk ?> </div></td>
                                <td class="col_7"><div class="item"><?php echo $sunday_esnk ?></div></td>
                            </tr>

                            <tr>
                                <td class="rcat">
                                    <div class="visul"><img src="./media/dinner.png" alt=""></div>
                                    <div class="ttag"><span class="bpart">Dinner</span></div>
                                </td>
                                <td class="col_1"><div class="item"><?php echo $monday_din ?></div></td>
                                <td class="col_2"><div class="item"><?php echo $tuseday_din ?></div></td>
                                <td class="col_3"><div class="item"><?php echo $wednesday_din ?></div></td>
                                <td class="col_4"><div class="item"><?php echo $thursday_din ?></div></td>
                                <td class="col_5"><div class="item"><?php echo $friday_din ?> </div></td>
                                <td class="col_6"><div class="item"><?php echo $saturday_din ?> </div></td>
                                <td class="col_7"><div class="item"><?php echo $sunday_din ?></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="fixT">
                    <button class="check_btn" id="tbook" type="submit" name="time-submit" onclick="location.href='#popup1'">EDIT MEAL PLAN</button>
                </div>
            </div>
            <div class="vboderdivider"></div>
        </div>
        <div class="HdividerL"></div>

    </section>

    <script>   
        $( document ).ready(function() {
            window.location.href = "#";
        });
    </script>
    <?php include "includes/footer.php" ?>
</body>

</html>

<?php
unset($_SESSION['notification']);
?>