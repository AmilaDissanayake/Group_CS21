<?php include "includes/check_login.php";
require "includes/db.php";
date_default_timezone_set("Asia/Colombo");
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/earning.css">
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
    <?php include "includes/header.php";

    $username=$_SESSION['username'];

    $sql="SELECT * FROM trainer WHERE username='".$username."'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $trainer_id=$row['trainer_id'];
    
    $sql1="SELECT * FROM member WHERE assign_trainer='".$trainer_id."'";
    $result1 = mysqli_query($conn,$sql1);

    $count_row1= mysqli_num_rows($result1);

    $today=date("y-m-d");
    $year = date('y',strtotime($today));

    $sql2 = "SELECT * FROM assignment WHERE trainer_id='".$trainer_id."' AND start_date>='$year-01-01'";
    $result2 = mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_assoc($result2);

    $rate=$row['rate'];
    $month_earning=$rate*$count_row1;

    $count_row2 = mysqli_num_rows($result2);

    ?>

    <div class="home-content">
        <div class="trainer-stats">
            <div class="one">
                <p class="value"><?php echo $count_row1?></p>
                <a class="name" href="members.php">Current members</a>
            </div>

            <div class="two">
                <p class="value"><?php echo $count_row2?></p>
                <a href="earnings.php" class="name">Assigned members(This year)</a>
            </div>

            <div class="three">
                <p class="value"><?php echo $month_earning;?></p>
                <a href="bookings.php" class="name">Earnings(This month)</a>
            </div>

            <div class="four">
                <p class="value"><?php echo $count_row2*$rate?></p>
                <a href="calendar.php" class="name">Earnings(This year)</a>
            </div>
        </div>
    <div class="chart-div">
        <div class="earning-chart">
                     <canvas id="canvas"></canvas>
        </div>
        <div id="wrapper" class="table-div">

            <table id="table_detail" cellpadding=10 class="earning-table">

            <tr>
            <th>Month</th>
            <th style="width:200px;">Your Earning</th>
            </tr>

            <tr onclick="show_hide_row('hidden_row1');"><td>JANUARY</td><td>25,000</td></tr>
            <tr id="hidden_row1" class="hidden_row">
                <td>Amila</td>
                <td>2500</td>
            </tr>

            <tr onclick="show_hide_row('hidden_row2');"><td>FEBRUARY</td><td>29,000</td></tr>
            <tr id="hidden_row2" class="hidden_row">
                <td>Bimsara</td>
                <td>2500</td>
            </tr>

            <tr onclick="show_hide_row('hidden_row3');"><td>MARCH</td><td>32,000</td></tr>
            <tr id="hidden_row3" class="hidden_row">
                <td>Navod</td>
                <td>2500</td>
            </tr>

            <tr onclick="show_hide_row('hidden_row4');"><td>APRIL</td><td>22,000</td></tr>
            <tr id="hidden_row4" class="hidden_row">
                <td>Pamodha</td>
                <td>2500</td>
            </tr>

            <tr onclick="show_hide_row('hidden_row5');"><td>JUNE</td><td>40,000</td></tr>
            <tr id="hidden_row5" class="hidden_row">
                <td>Sandunika</td>
                <td>2500</td>
            </tr>

            </table>

        </div>
    </div>
    </div>
    </section>
    <?php include "includes/footer.php" ?>
    <script src="js/income_chart.js" type="text/javascript"></script>

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