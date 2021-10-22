<?php include "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/inventory.css">
    <link href="css/justselect.css" rel="stylesheet" />

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
                    <p class="name">Total Recived</p>
                </div>

                <div class="two">
                    <p class="value">5+</p>
                    <p class="name">This Month</p>
                </div>

                <div class="three">
                    <p class="value">10</p>
                    <p class="name">Profit</p>
                </div>

                <div class="four">
                    <p class="value">255</p>
                    <p class="name">Total Members</p>
                </div>

            </div>
            <div class="search-bar">
                <div class="search-box">
                    <input type="text" placeholder="Search by name..." id="search">
                    <i class='bx bx-search'></i>
                </div>
                <!-- <div class="filter1">
                    <select name="Membership" id="" class="justselect">
                        <option selected="selected">Membership</option>
                        <option>Membership Valid</option>
                        <option>Membership Expired</option>
                    </select>
                </div>

                <div class="filter2">
                    <select name="Membership" id="" class="justselect">
                        <option selected="selected">Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div> -->



                <div class="add_button"><button class="add_btn" onclick="location.href='add-member.php'">Add Equipment</button></div>

            </div>
            <div class="member-list">
                <table class="table table-hover">

                    <thead>
                        <tr>

                            <th>Equipment</th>

                            <th>Details</th>
                            <th>Count</th>
                            <!-- <th>Address</th> -->

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="output">
                        <?php

                        require "includes/db.php";
                        $sql = "SELECT * FROM inventory";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>




                                <tr>

                                    <td><img src="media/inventory/<?php echo $row['image'] ?>"> </td>
                                    <td>
                                        <?php echo " " . $row['name'] ?>
                                    </td>
                                    <td>

                                        <?php echo " " . $row['quantity'] ?>

                                    </td>


                                    <td>
                                        <div class="row-action">
                                            <div class="about_button"><button class="about_btn" onclick="location.href='tel:<?php echo $phone_no ?>'">Add 1</button></div>

                                            <div class="about_button"><button class="about_btn" onclick="location.href='tel:<?php echo $phone_no ?>'">Remove 1</button></div>
                                            <!-- <div class="about_button"><button class="about_btn" onclick="location.href='tel:<?php echo $phone_no ?>'">Delete</button></div> -->
                                        </div>
                                    </td>



                                </tr>



                        <?php }
                        } ?>
                    </tbody>
                </table>


            </div>

            <!-- <div class="equip">
                <div class="one">
                    <img src="media/inventory/dumbbell.png" alt="">
                </div>
            </div> -->


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


    <script src="js/justselect.min.js"></script>


</body>

</html>