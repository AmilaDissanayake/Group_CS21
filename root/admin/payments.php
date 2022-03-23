<?php include "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/dashboard.css">
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
                    <p class="value">LKR 50,000</p>
                    <p class="name">Total Recived</p>
                </div>

                <div class="two">
                    <p class="value">LKR 30,000</p>
                    <p class="name">This Month</p>
                </div>

                <div class="three">
                    <p class="value">LKR 100,000</p>
                    <p class="name">Total Profit</p>
                </div>

                <div class="four">
                    <p class="value">LKR 30,000</p>
                    <p class="name">Thsi Month Profit</p>
                </div>

            </div>
            <div class="search-bar">
                <div class="search-box">
                    <input type="text" placeholder="Search by name..." id="search">
                    <i class='bx bx-search'></i>
                </div>
                <div class="filter1">
                    <select name="Membership" id="" class="justselect">
                        <option selected="selected">Membership</option>
                        <option>1 Month</option>
                        <option>3 Months</option>
                        <option>6 Months</option>
                        <option>12 Months</option>
                    </select>
                </div>

                <div class="filter2">
                    <select name="Membership" id="" class="justselect">
                        <option selected="selected">Type</option>
                        <option>Online</option>
                        <option>Offline</option>
                    </select>
                </div>



                <div class="add_button"><button class="add_btn_filter" onclick="location.href='#'">Filter</button></div>



                <!-- <div class="add_button"><button class="add_btn" onclick="location.href='add-member.php'">Add Trainer</button></div> -->

            </div>

            <div class="member-list">
                <table class="table table-hover">

                    <thead>
                        <tr>

                            <th>Id</th>

                            <th>Member</th>
                            <th>Trainer</th>
                            <!-- <th>Address</th> -->
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="output">
                        <?php

                        //require "includes/db.php";
                        $sql = "SELECT * FROM payment";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                                $member_query = "SELECT username, image FROM member WHERE member_id = $row[member_id];";
                                $member_result = mysqli_query($conn, $member_query);
                                $member_row = mysqli_fetch_assoc($member_result);

                                $trainer_query = "SELECT username, image FROM trainer WHERE trainer_id = $row[trainer_id];";
                                $trainer_result = mysqli_query($conn, $trainer_query);
                                $trainer_row = mysqli_fetch_assoc($trainer_result);

                                // $dateMembership = $row2['joined_date'];
                                // $membershipType = $row2['membership_type'];
                                // $dateMembership = date('Y-m-d', strtotime($dateMembership));
                                // $expireMembership = date('Y-m-d', strtotime($dateMembership . '+' . $membershipType . 'month'));
                                // $today = date("Y-m-d");
                                // $expired = "";
                                // if ($today > $expireMembership) {
                                //     $expired = "expired";
                                // }

                        ?>




                                <tr>

                                    <td><?php echo $row['payment_id'] ?> </td>
                                    <td>
                                        <div class="first-column"><span class="avatar"><img src="../media/members/<?php echo $member_row['image'] ?>"></span><?php echo " " . $member_row['username'] ?></div>
                                    </td>
                                    <td>
                                        <div class="first-column"><span class="avatar"><img src="../media/trainers/<?php echo $trainer_row['image'] ?>"></span><?php echo " " . $trainer_row['username'] ?></div>
                                    </td>
                                    <td><?php echo $row['payment_amount'] . " " .  "LKR" ?> </td>
                                    <td><?php echo  $row['payment_date'] ?> </td>
                                    <td><?php echo  $row['payment_type'] ?> </td>
                                    <td>
                                        <div class="row-action">
                                            <div class="about_button"><button class="about_btn" onclick="location.href='tel:<?php echo $phone_no ?>'">View/Update/Delete</button></div>
                                            <!-- <div class="about_button"><button class="about_btn" onclick="location.href='tel:<?php echo $phone_no ?>'">Delete</button></div> -->
                                        </div>
                                    </td>



                                </tr>



                        <?php }
                        } ?>
                    </tbody>
                </table>


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


    <script src="js/justselect.min.js"></script>


</body>

</html>