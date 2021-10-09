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
            <div class="header-div">
                <h1 class="top-header">Assigned members : 30 Members</h1>
            </div>
            <div class="search-bar">
                <div class="search-box">
                    <input type="text" placeholder="Search by name..." id="search">
                    <i class='bx bx-search'></i>
                </div>
            </div>

            <div class="members-div">
                <table class="table-members">
                    <tr>
                        <th style="width:20%">Name</th>
                        <th style="width:20%">Address</th>
                        <th style="width:15%">Contact No.</th>
                        <th style="width:20%">Injuries</th>
                        <th style="width:12.5%"></th>
                        <th style="width:12.5%"></th>
                    </tr>
                    <tr>
                        <td>Amila dissanayake</td>
                        <td>23/4,Nalla, Mirigama</td>
                        <td>0112233445</td>
                        <td>Back pain, Shoulder disjoint</td>
                        <td><a href="#">Meal paln and shedule</a></td>
                        <td><a href="#">Progress</button></a>
                    </tr>
                </table>
            </div>

        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#search").keypress(function() {
                    $.ajax({
                        type: 'POST',
                        url: 'includes/member-page.php',
                        data: {
                            name: $("#search").val(),
                        },
                        success: function(data) {
                            $("#output").html(data);
                        }
                    });
                });
            });
        </script>




    </section>


</body>

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