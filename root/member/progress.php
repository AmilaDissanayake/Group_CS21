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

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>

        <div class="welcomenote"><h1></h1></div>

        <div class="HdividerL"></div>
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
                 
                    <div class="bmip" id="weekprgs">
                        <canvas id="canvas"></canvas>
                    </div>
                    <p class="category"><i class='bx bxs-pin'></i> Weight status category <i class='bx bx-tag-alt' ></i><span id=" bmi_c" class="ob"> OBESITY</span> BMI value - 22<span class="l_tag">(Present)</span></p>
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
                alert(day);
                alert(state);
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
        
</script>

<script>
             AOS.init();
            // Chart.defaults.global.defaultFontFamily = "Rubic";
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


            var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            var config = {
                type: 'line',
                data: {
                labels: ["Month 01", "Month 02", "Month 03", "Month 04", "Month 05", "Month 06", "Month 07","Month 08","Month 09","Month 10","Month 11","Month 12"],
                datasets: [{
                label: "BMI value",
                backgroundColor: "#86ff71",
                borderColor: "#86ff71",
                data: [40, 38, 33, 30, 29, 25, 22, null, null, null, null],
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
            window.myLine = new Chart(ctx, config);
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

</body>

</html>

<?php
unset($_SESSION['notification']);
?>