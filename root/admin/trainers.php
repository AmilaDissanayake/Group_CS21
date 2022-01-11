<?php session_start(); ?>


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

        <script>
            function nn() {
                $('.alert').addClass("show");
                $('.alert').removeClass("hide");
                $('.alert').addClass("showAlert");
                setTimeout(function bb() {
                    $('.alert').removeClass("show");
                    $('.alert').addClass("hide");
                }, 4000);
            };
        </script>

        <!-- <button class="err">Show Alert</button> -->
        <div class="alert hide">

            <?php
            if (isset($_SESSION['notification'])) {
                $notification = $_SESSION['notification'];
                echo '<script type="text/javascript">nn();</script>';
            }
            ?>

            <!-- <span class="fas fa-exclamation-circle"></span> -->
            <span class="msg"><?php echo $notification ?></span>
            <div class="close-btn">
                <span class="fas fa-times"></span>
            </div>
        </div>
        <script>
            $('.close-btn').click(function ss() {
                $('.alert').removeClass("show");
                $('.alert').addClass("hide");
            });
        </script>




        <div class="home-content">
            <div class="member-stats">
                <div class="one">
                    <p class="value">25</p>
                    <p class="name">Total Trainers</p>
                </div>

                <div class="two">
                    <p class="value">5+</p>
                    <p class="name">This Month</p>
                </div>

                <div class="three">
                    <p class="value">10</p>
                    <p class="name">Male</p>
                </div>

                <div class="four">
                    <p class="value">15</p>
                    <p class="name">Female</p>
                </div>

            </div>
            <div class="search-bar">
                <div class="search-box">
                    <input type="text" placeholder="Search by first name..." id="search">
                    <i class='bx bx-search'></i>
                </div>
                <div class="filter1">
                    <select name="gender" id="gender" class="justselect">
                        <option selected="selected" value="all">Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="filter2">
                    <select name="rating" class="justselect" id="rating">
                        <option selected="selected" value="all1">Rating</option>
                        <option value="5">⭐5</option>
                        <option value="4">⭐4</option>
                        <option value="3">⭐3</option>
                        <option value="2">⭐2</option>
                        <option value="1">⭐1</option>

                    </select>
                </div>
                <div class="add_button"><button class="add_btn_filter" id="btn">Filter</button></div>

                <!-- <div class="add_button"><button class="add_btn_filter" onclick="location.href='#'">Filter</button></div> -->



                <div class="add_button"><button class="add_btn" onclick="location.href='add-trainer.php'">Add Trainer</button></div>

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

                                if ($review_count == 0) {
                                    $final_rating = 'No Reviews Yet';
                                } else {
                                    $review_value = 0;
                                    while ($row2 = mysqli_fetch_assoc($result2)) {
                                        $review_value += $row2['stars'];
                                    }
                                    $final_rating = $review_value / $review_count;
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
                                    <td> ⭐ <?php echo  $final_rating ?> </td>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $("#search").keydown(function() {
                $.ajax({
                    type: 'POST',
                    url: 'trainer-search.php',
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
    <script type="text/javascript">
        $(document).ready(function()

            {


                $('#btn').click(function() {
                    // var gender = $('#gender :selected').val();
                    $.ajax({
                        type: 'POST',
                        url: 'trainer-filter.php',
                        data: {
                            gender: $('#gender :selected').val(),
                            rating: $('#rating :selected').val(),
                        },
                        success: function(data) {
                            $("#output").html(data);
                        }
                    });

                });

            });
    </script>


</body>

</html>

<?php
unset($_SESSION['notification']);
?>