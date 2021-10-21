

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/dashboard.css">
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

        <div class="welcomenote"><h1>WELCOME! PAMODHA</h1></div>
 
        <!-- <div class="dashcover"></div> -->
        <div class="dubar">
            <div class="duhead"><h2>12 MONTH MEMBERSHIP</h2></div>
            <!-- <div class="duline"><div class="remain"><h2>MONTHS</h2><div class="time"><h1>MM</h1></div></div><div class="remain"><h2>DAYS</h2><div class="time"><h1>DD</h1></div></div></div> -->
        </div>
        <!-- <div class="duhead"></div> -->
        <div class="Hdivider"></div>
        <div class="analy">
                <div class="divider"></div>
                <div class="lpanel">
                        <div class="btag"><b>BMI STATISTICS</b></div>
                        
                        <div class="bmi">
                            <canvas id="canvas"></canvas>
                        </div>

                        <div class="bmistatus">
                            <p><i class='bx bxs-pin'></i> Weight status category <i class='bx bx-tag-alt' ></i><span> OBESITY</span></p>
                            <div class="pgo">
                                <a href="./progress.php" class="readmore_btn" id="readMore">UPDATE BMI</a>
                            </div>
                        </div>
                </div>
                <div class="divider"></div>
                <div class="rpanel">
                    <div class="book">
                        <div class="Asignt">
                            <span id="bk">ASSIGN WITH</span>
                            <div class="pan1"><i class='bx bxs-user-check'></i> <p>THUSITHA KAKULAWALA ⭐5</p></div>
                            <div class="bt"><a href="./membership.php" class="readmore_btn" id="readMore">View More</a></div>
                        </div>
                        <div class="divider2"></div>
                        <div class="status">
                            <span id="bk">BOOKING STATUS</span>
                            <div class="pan2"><i class='bx bxs-message-square-check'></i><p>Booking Fixed on 21/10/2021</p></div>
                            <div class="bt"><a href="./booking.php" class="readmore_btn" id="readMore">View More</a></div>
                        </div>
                        <div class="divider2"></div>
                    </div>
                    <div class="divider2"></div>
                    <div class="progcon">
                        <div class="pchart">
                            <div class="weekpro">
                                <h2>BMI value categorizer</h2>
                                    <div class="wp">
                                   
                                    </div>
                            </div>
                        </div>
                        <div class="vdivider"></div>
                        <div class="pchart">
                            <div class="weekpro">
                                <h2>Weekly Progress</h2>
                                    <div class="wp">
                                        <canvas id="dchart" height="80px" width="80px"></canvas>
                                    </div>
                                <div class="bt"><a href="./progress.php" class="readmore_btn" id="readMore">View More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="divider2"></div>
                </div>
                <div class="divider"></div>
        </div> 
        <div class="Hdivider"></div>
        <div class="analy2">
                <div class="divider"></div>
                <div class="rpanel">
                <div class="progcon">
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
                        <div class="duration">   
                                    <div class="mdu">
                                        <h2>Membership</h2>
                                        <p class="tm"><span>11</span>Months <span>21</span>Days</p>
                                        <p class="sm">Remaining</p>
                                    </div>
                                    <div class="divider2"></div>
                                    <div class="tdu">
                                        <h2>Trainer</h2>
                                        <p class="tm"><span>21</span>Days</p>
                                        <p class="sm">Remaining</p>
                                    </div>
                        </div>
                    </div>

                    <div class="divider2"></div>
                    <div class="book">
                            <div class="weekpro">
                                <h2>Body Fat value categorizer</h2>
                            </div>
                            <div class="status">

                            </div>
                    </div>
                    <div class="divider2"></div>
                </div>
                <div class="divider"></div>
                <div class="lpanel">
                    <div class="btag"><b>BODY FAT STATISTICS</b></div>
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
                <div class="divider"></div>
            </div> 
                          
        <div class="Hdivider"></div>
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