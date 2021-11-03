<?php include "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>

        <div class="welcomenote"><h1></h1></div>
        <div class="dubar"></div>
        <div class="Hdivider"></div>
        <div class="member-stats">
            <div class="one">
                <p class="value">11Months 21Days</p>
                <p class="name">Membership</p>
            </div>

            <div class="two">
                <p class="value">21 Days</p>
                <p class="name">Trainer</p>
            </div>

            <div class="three">
                <p class="value">Thusitha⭐5</p>
                <p class="name">Assign With</p>
            </div>

            <div class="four">
                <p class="value">21/10/2021</p>
                <p class="name">Booking Fixed on</p>
            </div>
        </div>
        <div class="Hdivider"></div>
        <div class="analy">
                <div class="vboderdivider"></div>
                <div class="lpanel">
                        <div class="btag"><p>BMI STATISTICS</p></div>
                        
                        <div class="bmi">
                            <canvas id="canvas"></canvas>
                        </div>

                        <div class="bmistatus">
                            <p><i class='bx bxs-pin'></i> Weight status category <i class='bx bx-tag-alt' ></i><span id="ob"> OBESITY</span></p>
                            <div class="pgo">
                                <a href="./progress.php" class="readmore_btn" id="readMore">UPDATE BMI</a>
                            </div>
                        </div>
                </div>
                <div class="divider"></div>
                <div class="lpanel">
                    <div class="btag"><p>BODY FAT STATISTICS</p></div>
                    <div class="bmi">
                        <canvas id="canvas2"></canvas>
                    </div>
                    <div class="bmistatus">
                        <p><i class='bx bxs-pin'></i> Body Fat category <i class='bx bx-tag-alt' ></i><span > AVERAGE </span></p>
                        <div class="pgo">
                            <a href="./progress.php" class="readmore_btn" id="readMore">UPDATE BODY FAT</a> 
                        </div>
                    </div>
                </div>
                <div class="vboderdivider"></div>
        </div> 
        <div class="Hdivider"></div>
        <div class="analy2">
            <div class="vboderdivider"></div>
                <div class="rpanel">
                    <div class="progcon">
                        <div class="progcon">
                            <div class="pchart">
                            <div class="weekpro">
                                <h2>BMI value categorizer</h2>
                                    <div class="bc">
                                            <div class="cathead">
                                                <div class="cimg"></div><div class="tx"><div class="ty"><p>CATEGORY</p></div><div class="val">VALUE</div></div>
                                            </div>
                                            <div class="cat1">
                                                <div class="cimg"><img src="./media/1.jpg" alt="Under weight" ></div><div class="tx"><div class="ty"><p>UNDER</p></div><div class="val">< 18.5</div></div>
                                            </div>
                                            <div class="cat1">
                                                <div class="cimg"><img src="./media/2.jpg" alt="Healthy weight" ></div><div class="tx"><div class="ty"><p>HEALTHY</p></div><div class="val">18.5-24.9</div></div>
                                            </div>
                                            <div class="cat1">
                                                <div class="cimg"><img src="./media/3.jpg" alt="Over weight" ></div><div class="tx"><div class="ty"><p>OVER</p></div><div class="val">25-29.9</div></div>
                                            </div>
                                            <div class="cat1">
                                                <div class="cimg"><img src="./media/4.jpg" alt="Obese weight" ></div><div class="tx"><div class="ty"><p>OBESE</p></div><div class="val">> 30</div></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dividerin"></div>
                            <div class="comwork">
                            <h2>UPCOMING DAY</h2>
                            <div class="wlist">
                                <ul>
                                    <li>Bench Press</li>
                                    <li>Incline</li>
                                    <li>shoulders</li>
                                    <li>Latteral</li>
                                    <li>Bench Press</li>
                                    <li>Incline</li>
                                    <li>shoulders</li>
                                    <li>Latteral</li>
                                </ul>
                            </div>
                            <div class="bt"><a href="./schedule.php" class="readmore_btn" id="readMore">View More</a></div>
                        </div>
                        </div>
                        <div class="dividerin"></div>
                        <div class="pchart">
                            <div class="weekpro">
                                <h2>Weekly Progress</h2>
                                <div class="wp">
                                    <canvas id="dchart" height="80px" width="80px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rpanelbf">  
                    <div class="pchart">
                            <div class="weekpro">
                                <h2>Monthly Attendance</h2>
                                <div class="st">
                                    <p>GOOD</p>
                                </div>
                            </div>
                            <div class="bt"><a href="./progress.php" class="readmore_btn" id="readMore">View More</a></div>
                    </div>
                    <div class="dividerin"></div>
                    <div class="book">
                            <div class="weekpro">
                                <h2>Body Fat value categorizer</h2>
                            </div>
                            <div class="status">
                                <div class="bfc">
                                        <div class="bcathead">
                                            <div class="tx"><div class="ty"><i class='bx bx-male'></i></div><div class="val"><i class='bx bx-female' ></i></div></div><div class="ctag"></div>
                                        </div>
                                        <div class="bcat1">
                                            <div class="tx"><div class="val">10-13%</div><div class="val">2-5%</div></div><div class="ctag">ESSANTIAL FAT</div>
                                        </div>
                                        <div class="bcat1">
                                            <div class="tx"><div class="val">14-20%</div><div class="val">6-13%</div></div><div class="ctag">ATHLETES</div>
                                        </div>
                                        <div class="bcat1">
                                            <div class="tx"><div class="val">21-24%</div><div class="val">14-17%</div></div><div class="ctag">FITNESS</div>
                                        </div>
                                        <div class="bcat1">
                                            <div class="tx"><div class="val">25-31%</div><div class="val">18-24%</div></div><div class="ctag">AVERAGE</div>
                                        </div>
                                        <div class="bcat1">
                                            <div class="tx"><div class="val">>31%</div><div class="val">>25%</div></div><div class="ctag">OBESE</div>
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="vboderdivider"></div>
            </div>                
        <div class="HdividerL"></div>
    </section>
    <?php include "includes/footer.php" ?>

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
                    data: [40, 39, 38, 38, 35, 35, 34],
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