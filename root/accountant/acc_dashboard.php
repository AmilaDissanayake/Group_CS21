

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




        <div class="home-content">
            <div class="member-stats">
                <div class="one">
                    <p class="value">Rs. 50 000</p>
                    <p class="name">Member Recievables</p>
                </div>

                <div class="two">
                    <p class="value">rs. 30 000</p>
                    <p class="name">Trainer Recievables</p>
                </div>

                <div class="three">
                    <p class="value">rs. 25 000</p>
                    <p class="name">Trainer Payables</p>
                </div>

                <div class="four">
                    <p class="value">rs.15 000</p>
                    <p class="name">Other Payables</p>
                </div>
                
                <div class="two">
                    <p class="value">rs. 80 000</p>
                    <p class="name">Monthly Income</p>
                </div>

                
            
            </div>

            <div class="member-list"></div>
        </div>

        <div class="bmi-main">
            <div class="bmi">
                <canvas id="canvas" height="200px" ></canvas>
            </div>

            <div class="bmi2">
                
                <div class="member-stats2">
                    <div class="one">
                        <p class="value">Profit</p>
                        <p class="name">Profit/Loss</p>
                    </div>
                    <div class="one1">
                        <p class="value">Rs. 40 000</p>
                        <p class="name">Amount</p>
                    </div>
                </div>
                <button class="hero_btn" >More Reports >></button>
            </div>
        </div>

        <div class="bmi-main">
            <div class="bmi3">
                <h2 class="recieve">RECIEVABLES</h2>
                <table class="recieve-table">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Date</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody id="output">
                        <tr>
                            <td>Kasun</td>
                            <td>2021-10-10</td>
                            <td>1500.00</td>
                        </tr>
                        <tr>
                            <td>Nadun</td>
                            <td>2021-09-10</td>
                            <td>3000.00</td>
                        </tr>
                        <tr>
                            <td>Udara</td>
                            <td>2021-08-10</td>
                            <td>1500.00</td>
                        </tr>
                        <tr>
                            <td>Hasaranga</td>
                            <td>2021-07-10</td>
                            <td>3000.00</td>
                        </tr>
                        <tr>
                            <td>Dinuka</td>
                            <td>2021-08-10</td>
                            <td>1500.00</td>
                        </tr>
                    </tbody>
                </table>
                <button class="see-more" >see more >></button>
            </div>

            <div class="bmi4">
                <h2 class="recieve">PAYABLES</h2>
                <table class="recieve-table">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Date</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody id="output">
                        <tr>
                            <td>Thathsara</td>
                            <td>2021-10-10</td>
                            <td>1500.00</td>
                        </tr>
                        <tr>
                            <td>Vimukthi</td>
                            <td>2021-09-10</td>
                            <td>3000.00</td>
                        </tr>
                        <tr>
                            <td>Shehan</td>
                            <td>2021-08-10</td>
                            <td>1500.00</td>
                        </tr>
                        <tr>
                            <td>Sampath</td>
                            <td>2021-07-10</td>
                            <td>3000.00</td>
                        </tr>
                        <tr>
                            <td>Kusal</td>
                            <td>2021-08-10</td>
                            <td>1500.00</td>
                        </tr>
                    </tbody>
                </table>
                <button class="see-more" >see more >></button>
            </div>
        </div>


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
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: [{
                    label: "Monthly Income",
                    backgroundColor: "rgba(134, 255, 113, 0.8)",
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