<?php include "includes/check_login.php";
require "includes/db.php"; ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="css/dashboard.css"> -->
    <link rel="stylesheet" href="css/calendar.css">
    <link href="css/justselect.css" rel="stylesheet" >
    <link rel="stylesheet" href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>

        <div class="home-content">
        <form action="includes/availability.php" method="POST">
            <div class="calendar-input">              
                <input type='Date' name="date"required>
                <select name="time" id="" class="justselect">
                    <option selected="selected">All day</option>
                    <option>Morning</option>
                    <option>Evening</option>
                </select>
                <button type="submit" name="date-submit">SET</button>
            </div>
        </form>
            <div class="bottom-div">
                <div id='calendar' class="calendar"></div>
                <div class="calendar-table">
                    <div class="availability-header"><h1>AVAILABILITY</h1></div>
                    <div class="divider">
                    <span class="fade-effect2"> </span>
                    </div>
                    <table class="table-members">
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th></th>
                        </tr>
                        <?php
                        $trainer_id = $_SESSION['trainer_id'];
                        $sql_query = "SELECT * FROM availability Where trainer_id = '".$trainer_id."'";
                        $result = mysqli_query($conn,$sql_query);
                        while($availability_row = mysqli_fetch_assoc($result)){
                            $date = $availability_row['date'];
                            $time_slot = $availability_row['time_slot'];
                        ?>
                        <tr>
                            <td><?php echo "$date"; ?></td>
                            <td><?php echo "$time_slot"; ?></td>
                            <td><div class="row-action">
                                <button class="about_btn" onclick="location.href='members.php'">Remove</button> 
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                </div>
            </div>
        </div>
    </section>
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
<script type="text/javascript" src="js/calendar.js"> </script>
<script src="js/justselect.min.js"></script>
</html>