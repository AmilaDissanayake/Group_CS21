<?php include "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="css/dashboard.css"> -->
    <link rel="stylesheet" href="css/calendar.css">
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
            <div class="calendar-top">
                <div class="calendar-input">
                    <input type='Date' required>
                    <input type='Time' min="08:00" max="22:00" required>
                    <button type="submit" name="date-submit">ADD</button>
                </div>
                <div class="calendar-table">
                    <table class="table-members">
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>2021-10-17</td>
                            <td>8.00a.m.-10.00a.m.</td>
                            <td><div class="row-action">
                                <button class="about_btn" onclick="location.href='members.php'">Remove</button> 
                                </div>
                            </td>
                        </tr>
                </div>
            </div>
            <div id='calendar' class="calendar"></div>
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
</html>