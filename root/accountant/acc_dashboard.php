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
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>




        <div class="home-content">
            <div class="member-stats">
                <div class="one">
                    <p class="value">255</p>
                    <p class="name">Total Members</p>
                </div>

                <div class="two">
                    <p class="value">5+</p>
                    <p class="name">This Month</p>
                </div>

                <div class="three">
                    <p class="value">10</p>
                    <p class="name">Expired Memberships</p>
                </div>

                <div class="four">
                    <p class="value">255</p>
                    <p class="name">Total Members</p>
                </div>

            </div>

            <div class="member-list"></div>
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


    <!-- <script src="js/justselect.min.js"></script> -->


</body>

</html>