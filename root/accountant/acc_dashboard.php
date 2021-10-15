<?php include "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/dashboard.css">
    <!-- <link href="css/justselect.css" rel="stylesheet" /> -->

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




        <div class="home-content">
            <div class="member-stats">
                <div class="one">
                    <p class="value">Rs. 100 000</p>
                    <p class="name">Member Payments</p>
                </div>

                <div class="two">
                    <p class="value">rs. 40 000</p>
                    <p class="name">Trainer Payments</p>
                </div>

                <div class="three">
                    <p class="value">rs. 60 000</p>
                    <p class="name">Monthly Income</p>
                </div>

                <div class="four">
                    <p class="value">rs. 750 000</p>
                    <p class="name">Annual Income</p>
                </div>

            </div>

            <div class="member-list"></div>
        </div>

        <div class="bmi-main">
            <div class="bmi">
                <canvas id="canvas" height="200px" ></canvas>
            </div>

            <div class="bmi2">
                    <button class="hero_btn" >Report 1</button>
                    <button class="hero_btn" >Report 2</button>
                    <button class="hero_btn" >Report 3</button>
            </div>
        </div>


    </section>

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
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: [{
                    label: "Monthly Income",
                    backgroundColor: "#86ff71",
                    borderColor: "#86ff71",
                    data: [40000, 38000, 33000, 50000, 39000, 45000, 35000, 40000, 37000, 60000, 0,0],
                    fill: false,
                }, ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                title: {
                    text: 'Monthly Income Analysis',
                    fontSize: 19,
                    fontStyle: '600',
                    fontColor: 'rgba(240,250,237,1)',
                    padding: 10,
                    display: true
                },

                layout: {
                    padding:20
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
                            display: false,
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
                            display: false,
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




    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>


    <!-- <script src="js/justselect.min.js"></script> -->


</body>

</html>