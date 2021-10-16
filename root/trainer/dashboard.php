<?php include "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>


        <div class="home-content">
        <div class="trainer-stats">
                <div class="one">
                    <p class="value">30</p>
                    <a class="name" href="members.php">Assigned members</a>
                </div>

                <div class="two">
                    <p class="value">25,000</p>
                    <a href="earnings.php" class="name">Earnings</a>
                </div>

                <div class="three">
                    <p class="value">8</p>
                    <a href="bookings.php" class="name">Bookings(Today)</a>
                </div>

                <div class="four">
                    <p class="value">10 Oct 2021</p>
                    <a href="calendar.php" class="name">Calendar</a>
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

</html>