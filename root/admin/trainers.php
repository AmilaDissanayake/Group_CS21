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
                    <p class="value">255</p>
                    <p class="name">Total Trainers</p>
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
            <div class="search-bar">
                <div class="search-box">
                    <input type="text" placeholder="Search by name..." id="search">
                    <i class='bx bx-search'></i>
                </div>
                <div class="filter1">
                    <select name="gender" id="" class="justselect">
                        <option selected="selected">Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>

                <div class="filter2">
                    <select name="rating" id="" class="justselect">
                        <option selected="selected">Rating</option>
                        <option>⭐5</option>
                        <option>⭐4</option>
                        <option>⭐3</option>
                        <option>⭐2</option>
                        <option>⭐1</option>

                    </select>
                </div>

                <div class="add_button"><button class="add_btn_filter" onclick="location.href='add-member.php'">Filter</button></div>



                <div class="add_button"><button class="add_btn" onclick="location.href='add-member.php'">Add Trainer</button></div>

            </div>

            <div class="member-list">
                <table class="table table-hover">

                    <thead>
                        <tr>

                            <th>Name</th>

                            <th>Username</th>
                            <th>Joined Date</th>
                            <th>Phone Number</th>
                            <!-- <th>Address</th> -->
                            <!-- <th>Qualifications</th> -->
                            <th>Rate</th>
                            <th>Rating</th>
                            <th>Assgined Members</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="output">
                        <?php

                        require "includes/db.php";
                        $sql = "SELECT * FROM trainer";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                                $date = strtotime($row['joined_date']);
                                $formattedValue = date("F Y", $date);


                                $query = "SELECT * FROM review WHERE trainer_id = $row[trainer_id]";
                                $result2 = mysqli_query($conn, $query);
                                $review_count = mysqli_num_rows($result2);


                                $review_value = 0;
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    $review_value += $row2['stars'];
                                }
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




                                <tr class=>
                                    <td>
                                        <div class="first-column"><span class="avatar"><img src="../media/trainers/<?php echo $row['image'] ?>"></span><?php echo " " . $row['f_name'] . " " . $row['l_name'] ?></div>
                                    </td>
                                    <td><?php echo $row['username'] ?> </td>
                                    <td><?php echo $formattedValue ?> </td>
                                    <td><?php echo $row['phone_no'] ?> </td>

                                    <td><?php echo  $row['rate'] ?> </td>
                                    <td> ⭐ <?php echo  $review_value / $review_count ?> </td>
                                    <td> <?php echo  $row['assigned_members'] ?> </td>
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