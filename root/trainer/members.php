<?php include "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/members.css">
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
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Contact No.</th>
                        <th>Injuries</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Amila dissanayake</td>
                        <td>25</td>
                        <td>Male</td>
                        <td>0112233445</td>
                        <td>Back pain, Shoulder pain</td>
                        <td><div class="row-action">
                            <button class="about_btn1" onclick="location.href='members.php'">Meal Plan and Schedule</button> 
                            </div>
                        </td>
                        <td><div class="row-action">
                            <button class="about_btn1" onclick="location.href='members.php'">Progress</button> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Navod shehan</td>
                        <td>25</td>
                        <td>Male</td>
                        <td>0112233445</td>
                        <td>Back pain, Shoulder pain</td>
                        <td><div class="row-action">
                            <button class="about_btn1" onclick="location.href='members.php'">Meal Plan and Schedule</button> 
                            </div>
                        </td>
                        <td><div class="row-action">
                            <button class="about_btn1" onclick="location.href='members.php'">Progress</button> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pamodha mahagamage</td>
                        <td>25</td>
                        <td>Male</td>
                        <td>0112233445</td>
                        <td>Back pain, Shoulder pain</td>
                        <td><div class="row-action">
                            <button class="about_btn1" onclick="location.href='members.php'">Meal Plan and Schedule</button> 
                            </div>
                        </td>
                        <td><div class="row-action">
                            <button class="about_btn1" onclick="location.href='members.php'">Progress</button> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Bimsara kulasekara</td>
                        <td>25</td>
                        <td>Male</td>
                        <td>0112233445</td>
                        <td>Back pain, Shoulder pain</td>
                        <td><div class="row-action">
                            <button class="about_btn1" onclick="location.href='members.php'">Meal Plan and Schedule</button> 
                            </div>
                        </td>
                        <td><div class="row-action">
                            <button class="about_btn1" onclick="location.href='members.php'">Progress</button> 
                            </div>
                        </td>
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