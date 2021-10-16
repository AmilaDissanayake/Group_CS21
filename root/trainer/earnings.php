<?php include "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/earning.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>
    <div class="home-content">
        <div class="trainer-stats">
            <div class="one">
                <p class="value">15</p>
                <a class="name" href="members.php">Current members</a>
            </div>

            <div class="two">
                <p class="value">46</p>
                <a href="earnings.php" class="name">Assigned members(This year))</a>
            </div>

            <div class="three">
                <p class="value">25,000</p>
                <a href="bookings.php" class="name">Earnings(This month)</a>
            </div>

            <div class="four">
                <p class="value">100,000</p>
                <a href="calendar.php" class="name">Earnings(This year)</a>
            </div>
        </div>
        <div class="chart-div">
        <div class="earning-chart">
                     <canvas id="canvas"></canvas>
        </div>
        <div id="wrapper">

            <table id="table_detail" cellpadding=10>

            <tr>
            <th>Month</th>
            <th>Your Earning</th>
            </tr>

            <tr onclick="show_hide_row('hidden_row1');"><td>Ankit</td><td>25</td></tr>
            <tr id="hidden_row1" class="hidden_row">
            <td colspan=4>Ankit is 25 years old and he is a computer programmer he earns 60000 per month</td>
            </tr>

            <tr onclick="show_hide_row('hidden_row2');"><td>Aarti</td><td>29</td></tr>
            <tr id="hidden_row2" class="hidden_row">
            <td colspan=4>Aarti is 29 years old and she is a web designer he earns 40000 per month</td>
            </tr>

            <tr onclick="show_hide_row('hidden_row3');"><td>Mohit</td><td>32</td></tr>
            <tr id="hidden_row3" class="hidden_row">
            <td colspan=4>Mohit is 32 years old and he is a cyber security expert he earns 90000 per month</td>
            </tr>

            <tr onclick="show_hide_row('hidden_row4');"><td>John</td><td>22</td></tr>
            <tr id="hidden_row4" class="hidden_row">
            <td colspan=4>John is 22 years old and he is a content writer he earns 20000 per month</td>
            </tr>

            <tr onclick="show_hide_row('hidden_row5');"><td>Mukesh</td><td>40</td></tr>
            <tr id="hidden_row5" class="hidden_row">
            <td colspan=4>Mukesh is 40 years old and he is chief executive he earns 3,50000 per month</td>
            </tr>

            </table>

        </div>
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
</body>
<script type="text/javascript" src="js/earning.js"></script>
</html>