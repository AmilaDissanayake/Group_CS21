<?php include "includes/check_login.php" ?>

<?php 
    require "includes/db.php";
    $username = $_SESSION['username'];
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/progress.css">
    <link rel="stylesheet" href="css/bmi-calc.css">
    <link rel="stylesheet" href="css/bfc-calc.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">
    <?php 

            date_default_timezone_set('Asia/Colombo');

            $query1 = "SELECT * FROM member WHERE username = '".$username."'";
            $result1 = mysqli_query($conn, $query1);
            $row1 = mysqli_fetch_assoc($result1);

            $member_id = $row1['member_id'];
            $trainer_assignment = $row1['assign_trainer'];

            $query2 = "SELECT * FROM membership  WHERE member_id = '".$member_id."'";
            $result2 = mysqli_query($conn, $query2);
            $row2 = mysqli_fetch_assoc($result2);

            $membership_type = $row2['membership_type']; 
            $joined_date = $row2['joined_date'];

            if($membership_type==12){ 
                $exp_date = date('Y-m-d',strtotime("+12 month", strtotime("$joined_date")));}
            else if($membership_type==6){ 
                $exp_date = date('Y-m-d',strtotime("+6 month", strtotime("$joined_date")));}
            else if($membership_type==3){ 
                $exp_date = date('Y-m-d',strtotime("+3 month", strtotime("$joined_date")));}
            else if($membership_type==1){ 
                $exp_date = date('Y-m-d',strtotime("+1 month", strtotime("$joined_date")));}

            $point_date = date('Y-m-d',strtotime("$joined_date"));
            $joinpoint_date = new DateTime("$point_date");

            $date = date('Y-m-d');
            $today = new DateTime($date);

            $mem_interval = $today->diff($joinpoint_date);

            switch ($mem_interval->m) {
                case 0:$next_mon = 1;break;
                case 1:$next_mon = 2;break;
                case 2:$next_mon = 3;break;
                case 3:$next_mon = 4;break;
                case 4:$next_mon = 5;break;
                case 5:$next_mon = 6;break;
                case 6:$next_mon = 7;break;
                case 7:$next_mon = 8;break;
                case 8:$next_mon = 9;break;
                case 9:$next_mon = 10;break;
                case 10:$next_mon = 11;break;
                case 11:$next_mon = 12;break;  
            }
            
            $par1 = "+".$mem_interval->m." months";
            $par2 = "+".$next_mon." months";
            $current_month_start = date('Y-m-d',strtotime($par1, strtotime("$joined_date")));
            $current_month_end = date('Y-m-d',strtotime($par2, strtotime("$joined_date")));

                // echo $current_month_start, $current_month_end;

                //$membership_type = 6;
        ?>

        <?php include "includes/header.php" ?>

        <div class="welcomenote"><h1><span id="mem_type"><?php echo $membership_type;?></span> MONTH MEMBERSHIP (<?php echo"$joined_date <-> $exp_date";?>)</h1>CURRENT ACTIVE MONTH -> <?php echo $mem_interval->m;?><br>PERIOD -> <?php  echo "[$current_month_start - $current_month_end]";?></div>

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

        <div id="popup5" class="overlay">
            <div class="popup">
                <h2>Sorry! <?php echo $username ?> </h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <div class="aper">
                        <div class="stat">
                            <div class="rate">
                                <div class="msg">You can <b>only</b> use this option <b>after 15 Days</b> from <span class="highlight"><?php echo $current_month_start?></span> for this month duration.</div><div class="later">Try again later.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup3" class="overlay">
            <div class="popup">
                <h2>Hi <?php echo $username ?> </h2>
                <a class="close" href="#">&times;</a>
                <div class="content"> 
                        <div class="aper">
                            <div class="stat">
                                <div class="rate">
                                    <p>You can add <span id="bmi_val_holder" class="highlight"></span> as the <span class="highlight">BMI VALUE</span> for <span class="highlight">THIS MONTH.</span></p>
                                </div>
                            </div>
                            <div class="avatar">
                                <img src="media/stat.png" >
                            </div>
                            <div class="msg">So, Do you really want to proceed?</div><div class="later"><button class="about_btn" id="bmi_in">YES</button><button class="about_btn"onclick="location.href='#'" >NO</button></div>
                        </div>
                        <form action="./includes/updatebmi.php" id="bmi_form" method="GET">
                            <input type="hidden"  id="bmi_pass" name="bmi_value" value="">
                            <input type="hidden"  name="cur_month" value="<?php echo $mem_interval->m ?>">
                            <input type="hidden"  id="day_hold" name="cur_day" value="<?php echo $mem_interval->d?>">
                        </form>
                </div>
            </div>
        </div>
        <div id="popup1" class="overlay_2">
                    <div class="popup_2">
                        <h2>Hi <?php echo $username ?>! You may edit your BMI values now. </h2>
                        <a class="close" href="#">&times;</a>

                        <h3><i class="fas fa-exclamation-circle"></i><?php if($membership_type== 1){echo"You can update values of whole MONTH";}else{echo "You can only update values till MONTH";  echo $mem_interval->m;echo".</h3>";}?>
                        <div class="content">
                        <table class="table table-hover">
                            <thead>
                                <tr><?php 
                                              
                                    if($membership_type ==12){
                                      echo "<th >MONTH 01</th>
                                            <th >MONTH 02</th>
                                            <th >MONTH 03</th> 
                                            <th >MONTH 04</th>
                                            <th >MONTH 05</th>
                                            <th >MONTH 06</th>
                                            <th >MONTH 07</th>
                                            <th >MONTH 08</th>
                                            <th >MONTH 09</th>
                                            <th >MONTH 10</th>
                                            <th >MONTH 11</th>
                                            <th >MONTH 12</th>"; 
                                    }else if($membership_type == 6){  
                                        echo "<th >MONTH 01</th>
                                            <th >MONTH 02</th>
                                            <th >MONTH 03</th> 
                                            <th >MONTH 04</th>
                                            <th >MONTH 05</th>
                                            <th 2'>MONTH 06</th>";
                                    }else if($membership_type == 3){
                                        echo "<th>MONTH 01<br>1st 2-WEEKS</th>
                                            <th >MONTH 01<br>2nd 2-WEEKS</th>
                                            <th >MONTH 02<br>1st 2-WEEKS</th> 
                                            <th >MONTH 02<br>2nd 2-WEEKS</th>
                                            <th >MONTH 03<br>1st 2-WEEKS</th>
                                            <th >MONTH 03<br>2nd 2-WEEKS</th>";
                                    }
                                    else {
                                        echo "<th >1st WEEK</th>
                                            <th clas>2nd WEEK</th>
                                            <th >3rd WEEK</th> 
                                            <th >4th WEEK</th>";
                                    }

                                    ?>
                                </tr>
                            </thead>

                            <tbody id="output">
                                <form action="./includes/updatebmi.php"  id="bmi_ful_form " method="GET">

                                <?php 

                                        $package_table = $membership_type.'m_package_progress';
                        
                                        $package_query = "SELECT * FROM $package_table WHERE member_id= '".$member_id."'";
                                        $package_result = mysqli_query($conn, $package_query);
                                        $pk_row = mysqli_fetch_assoc($package_result);

                                        $bmi_value_list = $pk_row['bmi_values'];
                                        $value_holder = json_decode($bmi_value_list);

                                        if($mem_interval->d >= 15){
                                            switch ($mem_interval->m) {
                                                case 0:$limit = 0;break;
                                                case 1:$limit = 0;break;
                                                case 2:$limit = 1;break;
                                                case 3:$limit = 2;break;
                                                case 4:$limit = 3;break;
                                                case 5:$limit = 4;break;
                                                case 6:$limit = 5;break;
                                                case 7:$limit = 6;break;
                                                case 8:$limit = 7;break;
                                                case 9:$limit = 8;break;
                                                case 10:$limit = 9;break;
                                                case 11:$limit = 10;break; 
                                                case 12:$limit = 11;break; 
                                              }
                                        }else{
                                            $limit = $mem_interval->m;
                                        }

                                        if($membership_type == 12){
                                            $months = [false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false];
                                        }else if($membership_type == 6){
                                            $months = [false,false,false,false,false,false];
                                        }else if($membership_type == 3){
                                            $months = [false,false,false,false,false,false];
                                        }else if($membership_type == 1){
                                            $months = [false,false,false,false];
                                        }
                                        
                                        if($membership_type == 12 || $membership_type == 6){
                                            for($i=0;$i<$limit;$i++){
                                                $months[$i]=true;
                                            }
                                        }else if($membership_type == 3){
                                            for($i=0;$i<($limit*2);$i++){
                                                $months[$i]=true;
                                            }
                                        }else if($membership_type == 1){
                                            if($limit == 1){
                                                $months = [true,true,true,true];
                                            }else if ($limit == 0){
                                                $months = [false,false,false,false];
                                            }   
                                        }   

                                    if($membership_type == 12){
                                        $out = $value_holder;
                                        
                                        echo "<tr>";
                                        for($i=1; $i<=12 ; $i++){
                                            echo "<td class='col_1' id='d1ex".$i."'>";if($months[$i-1]){
                                                echo "<b><span class ='bpart'><input type='number' step=0.01 class='muscle_input' id='1_".$i."1' placeholder='BMI value>' name='M1_".$i."1' value='";echo $out[$i-1];echo"' required min=10";echo"></input></span>";
                                                }else{echo"<b>N/A</b><input type='text' class='rest_input' id='1_".$i."1' name='M1_".$i."1' value='NULL'></input>";}             
                                                echo "</td>";     
                                        }
                                        echo "</tr>";
                                    }else if($membership_type ==6){
                                        $out =$value_holder;
                                    
                                        echo "<tr>";
                                        for($i=1; $i<=6 ; $i++){ 
                                        
                                            echo "<td class='col_1' id='d1ex".$i."'>";if($months[$i-1]){
                                                echo "<b><span class ='bpart'><input type='number' step=0.01 class='muscle_input' id='1_".$i."1' placeholder='BMI value>' name='M1_".$i."1' value='";echo $out[$i-1];echo"' required min=10";echo"></input></span>";
                                                }else{echo"<b>N/A</b><input type='text' class='rest_input' id='1_".$i."1' name='M1_".$i."1' value='NULL'> </input>";}             
                                                echo "</td>";     
                                        }
                                        echo "</tr>";
                                    }else if($membership_type == 3){
                                        $out = $value_holder;
                                    
                                        echo "<tr>";
                                        for($i=1; $i<=6 ; $i++){ 
                                        
                                            echo "<td class='col_1' id='d1ex".$i."'>";if($months[$i-1]){
                                                echo "<b><span class ='bpart'><input type='number' step=0.01 class='muscle_input' id='1_".$i."1' placeholder='BMI value>' name='M1_".$i."1' value='";echo $out[$i-1];echo"' required min=10";echo"></input></span>";
                                                }else{echo"<b>N/A</b><input type='text' class='rest_input' id='1_".$i."1' name='M1_".$i."1' value='NULL'> </input>";}             
                                                echo "</td>";     
                                        }
                                        echo "</tr>";

                                    }elseif($membership_type == 1){
                                        $out =$value_holder;
                                    
                                        echo "<tr>";
                                        for($i=1; $i<=4 ; $i++){ 
                                        
                                            echo "<td class='col_1' id='d1ex".$i."'>";if($months[$i-1]){
                                                echo "<b><span class ='bpart'><input type='number' step=0.01 class='muscle_input' id='1_".$i."1' placeholder='BMI value>' name='M1_".$i."1' value='";echo $out[$i-1];echo"' required min=10";echo"></input></span>";
                                                }else{echo"<b>N/A</b><input type='text' class='rest_input' id='1_".$i."1' name='M1_".$i."1' value='NULL'> </input>";}             
                                                echo "</td>";     
                                        }
                                        echo "</tr>";
                                    }
                                    if($months[0]== false){ 
                                        $label_val = "N/A";
                                    }else{
                                        if($membership_type == 12 || $membership_type == 6){
                                            $label_val = $out[$limit - 1];
                                        }else if($membership_type == 3){
                                            $label_val = $out[($limit*2) - 1];
                                        }else if($membership_type == 1){ 
                                            $label_val = $out[3];
                                        }
                                    }
                                ?>
                                <tr>
                            </tbody>
                        </table>
                            <div class="fixT">
                                <button class="check_btn" id="tbook" type="submit" name="time-submit" onclick="">SAVE VALUES</button>
                            </div>
                            <div class="msg" id="pop2tr_name"><p></p></div><div class="later">NOTE:If you are assign with a trainer ,that specific trainer can view these values.</div>
                        </form>
                        </div>
                    </div>
                </div>
        <div class="analy">
             <div class="vboderdivider"></div>
            <div class="rpanel">           
                <div class="pan" id="updatebmi">
                    <?php include "./includes/bmi-calc.php" ?>
                </div>           
            </div>

            <div class="divider"></div>
            <div class="left">
                <div class="lpanel">
                    <div class="btag"><p>BMI STATISTICS</p></div>
                    <div class="manage_btn"><button  id="bmi_btn" class="about_btn2">BMI value Editor</button></div>
                    <div class="bmip" id="weekprgs">
                        <canvas id="canvas"></canvas>
                    </div>
                    <p class="category"><i class='bx bxs-pin'></i> Weight status category <i class='bx bx-tag-alt' ></i><span id=" bmi_c" <?php if($label_val >= 30 ){echo "class='ob'";}else if($label_val < 30 && $label_val>=25 ){echo "class='ov'";}else if($label_val < 25 && $label_val >=18.5 ){echo "class='hl'";}else if($label_val < 18.5 ){echo "class='un'";}?> ><?php if($label_val >= 30 ){echo " OBESITY";}else if($label_val < 30 && $label_val>=25 ){echo "OVER WEIGHT";}else if($label_val < 25 && $label_val >=18.5 ){echo "HEALTHY";}else if($label_val < 18.5 ){echo "UNDER WEIGHT";}?></span> BMI value - <?php echo $label_val?><span class="l_tag">(Present)</span></p>
                </div>
                <div class="divider3" ></div>
                <div class="indc1" >
                    <h2>Weekly Progress</h2>
                    <?php 
                        date_default_timezone_set('Asia/Colombo');
                        $query1 = "SELECT * FROM member WHERE username = '".$username."'";
                        $result1 = mysqli_query($conn, $query1);
                        $row1 = mysqli_fetch_assoc($result1);
                        
                        $member_id = $row1['member_id']; 

                        
                        for($m=0;$m<=6;$m++){ 
                            $week=array("day1_ex1","day2_ex1","day3_ex1","day4_ex1","day5_ex1","day6_ex1","day7_ex1");

                            $column = $week[$m];
                            $find = "SELECT $column FROM schedule WHERE member_id='$member_id';";
                            $result2 = mysqli_query($conn, $find);

                            $row = mysqli_fetch_assoc($result2);
                            $en_rs = $row["$week[$m]"];
        
                            $ex1 = unserialize(base64_decode($en_rs));
                            $out[$m]=$ex1;
                        }

                        if($out[0]==''){$day1_flag=0;}else if($out[0][0]!='0'){$day1_flag=1;}else if($out[0][0]== '0'){$day1_flag=0;}
                        if($out[1]==''){$day2_flag=0;}else if($out[1][0]!='0'){$day2_flag=1;}else if($out[1][0]== '0'){$day2_flag=0;}
                        if($out[2]==''){$day3_flag=0;}else if($out[2][0]!='0'){$day3_flag=1;}else if($out[2][0]== '0'){$day3_flag=0;}
                        if($out[3]==''){$day4_flag=0;}else if($out[3][0]!='0'){$day4_flag=1;}else if($out[3][0]== '0'){$day4_flag=0;}
                        if($out[4]==''){$day5_flag=0;}else if($out[4][0]!='0'){$day5_flag=1;}else if($out[4][0]== '0'){$day5_flag=0;}
                        if($out[5]==''){$day6_flag=0;}else if($out[5][0]!='0'){$day6_flag=1;}else if($out[5][0]== '0'){$day6_flag=0;}
                        if($out[6]==''){$day7_flag=0;}else if($out[6][0]!='0'){$day7_flag=1;}else if($out[6][0]== '0'){$day7_flag=0;}

                        $total_workout_days = $day1_flag + $day2_flag + $day3_flag + $day4_flag + $day5_flag + $day6_flag + $day7_flag;

                    ?>
                    <div class="protick" >

                    <?php 
                        $query2 = "SELECT * FROM membership WHERE member_id = '".$member_id."'";
                        $result2 = mysqli_query($conn, $query2);
                        $row2 = mysqli_fetch_assoc($result2);
                        
    
                        $package_type = $row2['membership_type'];

                        $cur_date = date('Y-m-d');
                        $today_at = new DateTime("$cur_date");
                        $point_date = date('0000-00-00');
                        $today_from = new DateTime("$point_date");
                        $day_interval = $today_from->diff($today_at);

                        if($day_interval->d <= 7){
                            $active_week = 1;
                        }else if($day_interval->d <= 14){
                            $active_week = 2;
                        }else if($day_interval->d <= 21){
                            $active_week = 3;
                        }else if($day_interval->d <= 28){
                            $active_week = 4;
                        }

                        $active_month=$day_interval->m;
                        //to store the attendance for each package there will be different databases and the relavent member details will be store in the attendance column in a 2D array
                        //Attendance 2D array will be declare and initialized when a new member is inserted to the member tables
                        //2D array consist of n+1 number of tuples where 1st one is for the current week progress and others are to indicates the monthe and that relavent tuple will include with the 5 elements where opening 4 are use to store the weelky progress and last one is for the monthly progress status

                        $find_attendance = "SELECT * FROM {$package_type}m_package_progress WHERE member_id='$member_id';";
                        $attendance_result = mysqli_query($conn, $find_attendance);

                        $result_row = mysqli_fetch_assoc($attendance_result);
                        $attendace = $result_row['attendance'];
                        $bmi_values = $result_row['bmi_values'];
                        $bf_values = $result_row['bf_values'];
    
                        
                        $full_attendance = json_decode($attendace);
                        $full_bmi = json_decode($bmi_values);
                        $full_bf = json_decode($bf_values);
                        // if($full_bf[0] == ''){$msg="HI";}else{$msg="So";}
                        // echo $msg;
                        // print_r($full_attendance);
                        // $attendance_set[$m]=$full_attendance;
                    ?>
                    <div <?php if($total_workout_days< 5) {echo('class="wdetails"');}else{echo('class="wdetails2"');}?>>
                            
                            <?php 

                                if($total_workout_days== 2){
                                    echo(
                                        '<ul>
                                        <div class="itemcon">
                                            <li class="plist">  
                                                <input type="checkbox" id="ck_d1" onclick="tick_check(1);"><p> DAY 1</p> <div class="stag_not" id="tg_d1"><span>NOT COMPLETED</span></div>
                                            </li>  
                                        </div>
                                        <div class="itemcon">
                                        <li class="plist">
                                                <input type="checkbox" id="ck_d2" onclick="tick_check(2);"><p> DAY 2</p> <div class="stag_not" id="tg_d2"><span>NOT COMPLETED</span></div>
                                            </li>
                                        </div>
                                        </ul>');
                                }else if($total_workout_days== 3){
                                    echo(
                                        '<ul>
                                        <div class="itemcon">
                                            <li class="plist">  
                                                <input type="checkbox" id="ck_d1" onclick="tick_check(1);"><p> DAY 1</p> <div class="stag_not" id="tg_d1"><span>NOT COMPLETED</span></div>
                                            </li>  
                                        </div>
                                        <div class="itemcon">
                                        <li class="plist">
                                                <input type="checkbox" id="ck_d2" onclick="tick_check(2);"><p> DAY 2</p> <div class="stag_not" id="tg_d2"><span>NOT COMPLETED</span></div>
                                            </li>
                                        </div>
                                        <div class="itemcon">
                                            <li class="plist">
                                                <input type="checkbox"id="ck_d3" onclick="tick_check(3);"><p> DAY 3</p> <div class="stag_not" id="tg_d3"><span>NOT COMPLETED</span></div>
                                            </li>
                                        </div>
                                        </ul>');
                                }else if($total_workout_days== 4){
                                    echo(
                                        '
                                        <ul>
                                        <div class="itemcon">
                                            <li class="plist">  
                                                <input type="checkbox" id="ck_d1" onclick="tick_check(1);"><p> DAY 1</p> <div class="stag_not" id="tg_d1"><span>NOT COMPLETED</span></div>
                                            </li>  
                                        </div>
                                        <div class="itemcon">
                                        <li class="plist">
                                                <input type="checkbox" id="ck_d2" onclick="tick_check(2);"><p> DAY 2</p> <div class="stag_not" id="tg_d2"><span>NOT COMPLETED</span></div>
                                            </li>
                                        </div>
                                        <div class="itemcon">
                                            <li class="plist">
                                                <input type="checkbox"id="ck_d3" onclick="tick_check(3);"><p> DAY 3</p> <div class="stag_not" id="tg_d3"><span>NOT COMPLETED</span></div>
                                            </li>
                                        </div>
                                        <div class="itemcon">
                                            <li class="plist">
                                                <input type="checkbox" id="ck_d4" onclick="tick_check(4);"><p> DAY 4</p> <div class="stag_not" id="tg_d4"><span>NOT COMPLETED</span></div>
                                            </li>
                                        </div>
                                        </ul>');
                                }else if($total_workout_days== 5){
                                    echo(
                                        '<ul>
                                            <div class="itemcon">
                                                <li class="plist">  
                                                    <input type="checkbox" id="ck_d1" onclick="tick_check(1);"><p> DAY 1</p> <div class="stag_not" id="tg_d1"><span>NOT COMPLETED</span></div>
                                                </li>  
                                            </div>
                                            <div class="itemcon">
                                            <li class="plist">
                                                    <input type="checkbox" id="ck_d2" onclick="tick_check(2);"><p> DAY 2</p> <div class="stag_not" id="tg_d2"><span>NOT COMPLETED</span></div>
                                                </li>
                                            </div>
                                            <div class="itemcon">
                                                <li class="plist">
                                                    <input type="checkbox"id="ck_d3" onclick="tick_check(3);"><p> DAY 3</p> <div class="stag_not" id="tg_d3"><span>NOT COMPLETED</span></div>
                                                </li>
                                            </div>
                                            <div class="itemcon">
                                                <li class="plist">
                                                    <input type="checkbox" id="ck_d4" onclick="tick_check(4);"><p> DAY 4</p> <div class="stag_not" id="tg_d4"><span>NOT COMPLETED</span></div>
                                                </li>
                                            </div>
                                            <div class="itemcon">
                                                <li class="plist">
                                                    <input type="checkbox" id="ck_d5" onclick="tick_check(5);"><p> DAY 5</p> <div class="stag_not" id="tg_d5"><span>NOT COMPLETED</span></div>
                                                </li>
                                            </div>
                                        </ul>');
                                }else if($total_workout_days== 6){
                                    echo(
                                        '<div class="itmain">
                                        <ul>
                                        <div class="itemcon2">
                                            <li class="plist">  
                                                <input type="checkbox" id="ck_d1" onclick="tick_check(1);"><p> DAY 1</p> <div class="stag_not" id="tg_d1"><span>NOT COMPLETED</span></div>
                                            </li>  
                                        </div>
                                        <div class="itemcon2">
                                        <li class="plist">
                                                <input type="checkbox" id="ck_d2" onclick="tick_check(2);"><p> DAY 2</p> <div class="stag_not" id="tg_d2"><span>NOT COMPLETED</span></div>
                                            </li>
                                        </div>
                                        <div class="itemcon2">
                                            <li class="plist">
                                                <input type="checkbox"id="ck_d3" onclick="tick_check(3);"><p> DAY 3</p> <div class="stag_not" id="tg_d3"><span>NOT COMPLETED</span></div>
                                            </li>
                                        </div>
                                        </ul></div>
                                        <div class="itmain">
                                        <ul>
                                        <div class="itemcon2">
                                            <li class="plist">
                                                <input type="checkbox" id="ck_d4" onclick="tick_check(4);"><p> DAY 4</p> <div class="stag_not" id="tg_d4"><span>NOT COMPLETED</span></div>
                                            </li>
                                        </div>
                                        <div class="itemcon2">
                                        <li class="plist">
                                            <input type="checkbox" id="ck_d5" onclick="tick_check(5);"><p> DAY 5</p> <div class="stag_not" id="tg_d5"><span>NOT COMPLETED</span></div>
                                        </li>
                                        </div>
                                        <div class="itemcon2">
                                        <li class="plist">
                                            <input type="checkbox" id="ck_d6" onclick="tick_check(6);"><p> DAY 6</p> <div class="stag_not" id="tg_d6"><span>NOT COMPLETED</span></div>
                                        </li>
                                        </div>
                                        </ul></div>');
                                }
                            ?>
                            
                        </div>
                        <div class="wp"> 
                            <canvas id="dchart"></canvas>
                        </div> 
                    </div>
                </div>
                <div class="divider3"></div>
            </div>
            <div class="vboderdivider"></div>
        </div>
        <div class="analy2">
            <div class="vboderdivider"></div>
            <div class="rpanel">           
                <div class="pan" id="updatebf">
                    <?php include "./includes/bfc-calc.php" ?>
                </div>           
            </div>

            <div class="divider"></div>
            <div class="left">
                    <div class="indc1">
                        <h2>Monthly Attendance</h2>
                        <div class="monthviewlst">
                            <?php 
                            if($package_type == 12){
                                echo(
                            '<div class="wdetails">
                                <ul>
                                    <div class="itemcon"><li class="plist"><p class="month"> MONTH 1</p> <div class="stag_good"><span class="stat1">GOOD</span></div></li></div>
                                    <div class="itemcon"><li class="plist"><p class="month"> MONTH 2</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                    <div class="itemcon"><li class="plist"><p class="month"> MONTH 3</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                </ul>
                            </div>
                            <div class="wdetails">
                                <ul>
                                    <div class="itemcon"><li class="plist"> <p class="month"> MONTH 4</p><div class="stag_not_good"><span class="stat1"></span></div></li>  </div>
                                    <div class="itemcon"><li class="plist"><p class="month"> MONTH 5</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                    <div class="itemcon"><li class="plist"><p class="month"> MONTH 6</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                </ul>
                            </div>
                            <div class="wdetails">
                                <ul>
                                    <div class="itemcon"><li class="plist"> <p class="month"> MONTH 7</p><div class="stag_not_good"><span class="stat1"></span></div></li>  </div>
                                    <div class="itemcon"><li class="plist"><p class="month"> MONTH 8</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                    <div class="itemcon"><li class="plist"><p class="month"> MONTH 9</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                </ul>
                            </div>
                            <div class="wdetails">
                                <ul>
                                    <div class="itemcon"><li class="plist"> <p class="month"> MONTH 10</p><div class="stag_not_good"><span class="stat1"></span></div></li>  </div>
                                    <div class="itemcon"><li class="plist"><p class="month"> MONTH 11</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                    <div class="itemcon"><li class="plist"><p class="month"> MONTH 12</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                </ul>
                            </div>');
                            }else if($package_type == 6){
                            echo'<div class="wdetails">
                                <ul>
                                    <div class="itemcon"><li class="plist"><p class="month"> MONTH 1</p> <div class="stag_good"><span class="stat1">GOOD</span></div></li></div>
                                    <div class="itemcon"><li class="plist"><p class="month"> MONTH 2</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                    <div class="itemcon"><li class="plist"><p class="month"> MONTH 3</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                </ul>
                            </div>
                            <div class="wdetails">
                                <ul>
                                    <div class="itemcon"><li class="plist"> <p class="month"> MONTH 4</p><div class="stag_not_good"><span class="stat1"></span></div></li>  </div>
                                    <div class="itemcon"><li class="plist"><p class="month"> MONTH 5</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                    <div class="itemcon"><li class="plist"><p class="month"> MONTH 6</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                </ul>
                            </div>
                           ';
                            }else if($package_type == 3){
                                echo'<div class="wdetails_s">
                                <ul>
                                    <div class="itemcon"><li class="plist"><p class="month">  MONTH 1 |</p></li></div>
                                    <div class="itemcon"><li class="plist"><p class="month">  MONTH 2 |</p></li></div>
                                    <div class="itemcon"><li class="plist"><p class="month">  MONTH 3 |</p></li></div>
                                </ul>
                            </div>
                            <div class="wdetails_l">
                                <ul>
                                    <div class="itemcon"><li class="plist"><p class="month_l"> 1st 2-WEEKS</p> <div class="stag_good"><span class="stat1">GOOD</span></div></li></div>
                                    <div class="itemcon"><li class="plist"><p class="month_l"> 1st 2-WEEKS</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                    <div class="itemcon"><li class="plist"><p class="month_l"> 1st 2-WEEKS</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                </ul>
                            </div>
                            <div class="wdetails_l">
                                <ul>
                                    <div class="itemcon"><li class="plist"><p class="month_l"> 2nd 2-WEEKS</p> <div class="stag_good"><span class="stat1">GOOD</span></div></li></div>
                                    <div class="itemcon"><li class="plist"><p class="month_l"> 2nd 2-WEEKS</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                    <div class="itemcon"><li class="plist"><p class="month_l"> 2nd 2-WEEKS</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                </ul>
                            </div>
                           ';
                            }else if($package_type == 1){
                                echo'<div class="wdetails">
                                <ul>
                                    <div class="itemcon"><li class="plist"><p class="month"> WEEK 01</p> <div class="stag_good"><span class="stat1">GOOD</span></div></li></div>
                                    <div class="itemcon"><li class="plist"><p class="month"> WEEK 02</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                </ul>
                                </div>
                                <div class="wdetails">   
                                <ul>
                                    <div class="itemcon"><li class="plist"><p class="month"> WEEK 03</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                    <div class="itemcon"><li class="plist"><p class="month"> WEEK 04</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                                </ul>
                            </div>
                           ';}
                            ?>

                        </div>  
                        
                    </div>
                <div class="divider3"></div>
                <div class="dlpanel">
                    <div class="btag"><p>BODY FAT STATISTICS</p></div>
                    <div class="manage_btn"><button class="about_btn2">BF value Editor</button></div>
                    <div class="bfp">
                        <div class="bmip">
                            <canvas id="canvas2"></canvas>
                        </div> 
                    </div>
                    <p class="category"><i class='bx bxs-pin'></i> Body Fat category <i class='bx bx-tag-alt' ></i><span id=" bf_c" class="avg"> AVERAGE </span>BF value - 25<span class="l_tag">(Present)</span></p>
                </div>
                <div class="divider3"></div>
            </div>
            <div class="vboderdivider"></div>
        </div>
        <div class="HdividerL"></div>
    </section>

    <?php include "includes/footer.php" ?>

<script type="text/javascript" src="js/bmi-cal.js"></script>
<script type="text/javascript" src="js/bfc-cal.js"></script>

<script> 

    
        function tick_check(i){

            var checkbox = document.getElementById("ck_d"+i);
            var tag = document.getElementById("tg_d"+i);

            if(checkbox.checked == true){
                tag.className = 'stag';
                tag.innerText = 'COMPLETED';

                go_for_progress(i,true);
            }else{
                tag.className = 'stag_not';
                tag.innerText = 'NOT COMPLETED';
                go_for_progress(i,false);
            }  
        } 
        
        function go_for_progress(i,j){
            var day = i;
            var state = j;
                                             
            if (day != '' && state != '') {
                // alert(day);
                // alert(state);
                $.ajax({
                    url: './includes/update_attendance.php',
                    type: 'post',
                    data: {
                        day:day,
                        state:state
                    },
                    dataType:'json',
                    success: function(respo) {
                        console.log("success");
                        // $('#day').text("in "+date);
                        // $('#input_date').val(date)
                        // if( respo.set == 'None'){  
                        // }else if( respo.set == 'Done'){
                        //        
                        //     if (respo.Main_Slot== "All day") {
                        //     } else if ( respo.Main_Slot == "Morning"){
                        //     }else if ( respo.Main_Slot == "Evening"){
                        //     }
                        // }
                    },
                    error: function(){
                        console.log("error");
                    }
                });
            }
        }


        var form = document.getElementById("bmi_form");

        document.getElementById("bmi_in").addEventListener("click", function () {
        form.submit();
        });

        var a = document.getElementById('bmi_btn');

        a.addEventListener("click", function () {
            window.location.href = "#popup1";
        });
        
</script>

<script>
             AOS.init();
            // Chart.defaults.global.defaultFontFamily = "Rubic";

            var val_set;

            $(document).ready(function (){
                    $.ajax({                                      
                    url: './includes/get_bmivalues.php',              
                    type: "post",          
                    dataType: 'json',                
                    success: function(respo) {
                        console.log("success");
                        val_set = JSON.parse(respo);
                        val_set[55.5, 65.5, 30.5]
                        chartload();
                        console.log(respo);
                    },
                    error: function(){
                        console.log("error");
                    }
                });
            });

          //  console.log(typeof(val_set));
            function chartload(){


             Chart.defaults.fontSize = 16;
             var chartColors = {
                red: 'rgb(255, 99, 132)',
                orange: 'rgb(255, 159, 64)',
                yellow: 'rgb(255, 205, 86)',
                green: 'rgb(75, 192, 192)',
                blue: 'rgb(54, 162, 235)',
                purple: 'rgb(153, 102, 255)',
                grey: 'rgb(231,233,237)'
             };

            var randomScalingFactor = function() {
                return (Math.random() > 0.5 ? 2.0 : 1.0) * Math.round(Math.random() * 100);
            }

            // var val_set = ["25", "30.5", "60.5", null];
          // alert(periods);
            var config = {
                type: 'line',
                data: {
                labels: ["Month 01", "Month 02", "Month 03", "Month 04", "Month 05", "Month 06", "Month 07","Month 08","Month 09","Month 10","Month 11","Month 12"],
                datasets: [{
                label: "BMI value",
                backgroundColor: "#86ff71",
                borderColor: "#86ff71",
                data: val_set,
                fill: false,
                }, ]
            },
            options: {
            responsive: true,
            maintainAspectRatio: true,
            title: {
                text: 'BMI Analysis',
                fontSize: 20,
                fontStyle: '600',
                fontColor: 'rgba(239,249,236,1)',
                padding: 10,
                display: true
            },


            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: false,
                    },
                    gridLines: {
                        display: true,
                        zeroLineColor: 'green',
                        color: "#e6e6e644",
                        lineWidth: 1
                     }
                }],
                xAxes: [{
                    ticks: {
                        beginAtZero: false
                    },
                    gridLines: {
                        display: true,
                        color: "#e6e6e644",
                        lineWidth: 1
                     }
                }]
             }
        }
    };


            var ctx = document.getElementById("canvas").getContext("2d");
       

           var membership = $("mem_type").text;
        //    console.log(membership);
            // membership = 1;
            // console.log(membership);
            if(membership == 12){
                config.data.labels= ["Month 01", "Month 02", "Month 03", "Month 04", "Month 05", "Month 06", "Month 07","Month 08","Month 09","Month 10","Month 11","Month 12"];
            }else if(membership == 6){
                config.data.labels= ["Month 01", "Month 02", "Month 03", "Month 04", "Month 05", "Month 06"];
            }else if(membership == 3){
                config.data.labels= ["Month01 1st 2-Weeks", "Month01 2nd 2-Weeks", "Month02 1st 2-Weeks", "Month02 2nd 2-Weeks", "Month03 1st 2-Weeks", "Month03 2nd 2-Weeks"];
            }else if(membership == 1){
                config.data.labels= ["Week 01", "Week 02", "Week 03", "Week 04"];
            }


            // config.data.datasets.data = bmi_val

 

            
            // var newArray = val_set.map(s => eval('null,'+s));
            // console.log(newArray);

            // val_set=[50, null, null, null, null, null, null, null, null, null, null, null]
            // var json = val_set;
            // var obj = JSON.parse(json)
            // // console.log(JSON.parse(val_set));
            
            // config.data.datasets.data = JSON.parse(val_set);

            
            // config.update();
            window.myLine = new Chart(ctx, config);

        }
            </script>     
    </section>

    <script src="js/bfchart.js" type="text/javascript"></script>
    <script >
        var bftx = document.getElementById("canvas2").getContext("2d");
        window.myLine = new Chart(bftx, config3);
    </script>

    <script src="js/progchart.js" type="text/javascript"></script>
    <script >
        var dtx = document.getElementById("dchart").getContext("2d");
        window.myLine = new Chart(dtx, config2);
    </script>

    <script>    
        $( document ).ready(function() {
            window.location.href = "#";
        });
    </script>
</body>

</html>

<?php
unset($_SESSION['notification']);
?>