<?php include "includes/check_login.php" ?>

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
 
        <!-- <div class="dashcover"></div> -->
        <!-- <div class="duhead"></div> -->
        <div class="divider3"></div>
        
        <div class="analy">
            <div class="divider"></div>
            <div class="rpanel">           
                <div class="pan">
                    <?php include "./includes/bmi-calc.php" ?>
                </div>           
            </div>

            <div class="divider"></div>
            <div class="left">
                <div class="lpanel">
                    <div class="btag"><b>BMI STATISTICS</b></div>
                 
                    <div class="bmip">
                        <canvas id="canvas"></canvas>
                    </div>
                </div>
                <div class="divider3"></div>
                <div class="indc">
                    <div class="wdetails">
                    <h2>Weekly Progress</h2>
                    <ul>
                        <div class="itemcon">
                            <li class="plist">  
                                <input type="checkbox"><p> DAY 1</p> <div class="stag"><span class="stat1">COMPLETED</span></div>
                            </li>  
                        </div>
                        <div class="itemcon">
                            <li class="plist">
                                <input type="checkbox"><p> DAY 2</p> <div class="stag_not"><span class="stat2">NOT COMPLETED</span></div>
                            </li>
                        </div>
                        <div class="itemcon">
                            <li class="plist">
                                <input type="checkbox"><p> DAY 3</p> <div class="stag_not"><span class="stat2">NOT COMPLETED</span></div>
                            </li>
                        </div>
                        <div class="itemcon">
                            <li class="plist">
                                <input type="checkbox"><p> DAY 4</p> <div class="stag_not"><span class="stat2">NOT COMPLETED</span></div>
                            </li>
                        </div>
                    </ul>     
                    </div>
                    <div class="wp"> 
                        <canvas id="dchart"></canvas>
                    </div> 
                </div>
                <div class="divider3"></div>
            </div>
            <div class="divider"></div>
        </div>
        <div class="analy2">
            <div class="divider"></div>
            <div class="rpanel">           
                <div class="pan">
                    <?php include "./includes/bfc-calc.php" ?>
                </div>           
            </div>

            <div class="divider"></div>
            <div class="left">
                    <div class="indc">
                        <div class="wdetails">
                        <h2>Monthly Attendance</h2>
                            <ul>
                            <div class="itemcon"><li class="plist"><p class="month"> MONTH 1</p> <div class="stag_good"><span class="stat1">GOOD</span></div></li></div>
                            <div class="itemcon"><li class="plist"><p class="month"> MONTH 2</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                            <div class="itemcon"><li class="plist"><p class="month"> MONTH 3</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                            </ul>
                        </div>
                        <div class="wdetails">
                            <div class="up"></div>
                            <ul>
                            <div class="itemcon"><li class="plist"> <p class="month"> MONTH 4</p><div class="stag_not_good"><span class="stat1"></span></div></li>  </div>
                            <div class="itemcon"><li class="plist"><p class="month"> MONTH 5</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                            <div class="itemcon"><li class="plist"><p class="month"> MONTH 6</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                            </ul>
                        </div>
                        <div class="wdetails">
                            <div class="up"></div>
                            <ul>
                            <div class="itemcon"><li class="plist"> <p class="month"> MONTH 7</p><div class="stag_not_good"><span class="stat1"></span></div></li>  </div>
                            <div class="itemcon"><li class="plist"><p class="month"> MONTH 8</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                            <div class="itemcon"><li class="plist"><p class="month"> MONTH 9</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                            </ul>
                        </div>
                        <div class="wdetails">
                            <div class="up"></div>
                            <ul>
                            <div class="itemcon"><li class="plist"> <p class="month"> MONTH 10</p><div class="stag_not_good"><span class="stat1"></span></div></li>  </div>
                            <div class="itemcon"><li class="plist"><p class="month"> MONTH 11</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                            <div class="itemcon"><li class="plist"><p class="month"> MONTH 12</p> <div class="stag_not_good"><span class="stat2"></span></div></li></div>
                            </ul>
                        </div>

                    </div>
                <div class="divider3"></div>
                <div class="dlpanel">
                    <div class="btag"><b>BODY FAT STATISTICS</b></div>
                 
                    <div class="bfp">
                    <div class="bmip">
                        <canvas id="canvas2"></canvas>
                    </div>
                    </div>
                
                </div>
                <div class="divider3"></div>
            </div>
            <div class="divider"></div>
        </div>
    </section>

    <?php include "includes/footer.php" ?>

<script type="text/javascript" src="js/bmi-cal.js"></script>
<script type="text/javascript" src="js/bfc-cal.js"></script>

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
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                label: "BMI value",
                backgroundColor: "#86ff71",
                borderColor: "#86ff71",
                data: [40, 38, 33, 30, 29, 25, 22],
                fill: false,
                }, ]
            },
            options: {
            responsive: true,
            maintainAspectRatio: true,
            title: {
                text: 'BMI Analysis',
                fontSize: 19,
                fontStyle: '600',
                fontColor: 'rgba(240,250,237,1)',
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