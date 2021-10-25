<?php session_start(); ?>

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
                    <p class="value">60</p>
                    <p class="name">Total Equipments</p>
                </div>

                <div class="two">
                    <p class="value">20</p>
                    <p class="name">Total Dumbells</p>
                </div>

                <div class="three">
                    <p class="value">20</p>
                    <p class="name">Total Plates</p>
                </div>

                <div class="four">
                    <p class="value">15</p>
                    <p class="name">Total Barbells</p>
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
                                            <div class="about_button"><button class="about_btn" onclick="location.href='add-inventory.php?inventory_id=<?php echo $row['inventory_id'] ?>'">Add 1</button></div>

                                            <div class="about_button"><button class="about_btn" onclick="location.href='remove-inventory.php?inventory_id=<?php echo $row['inventory_id'] ?>'">Remove 1</button></div>

                                            <div class="about_button"><button class="about_btnn" onclick="location.href='remove-inventory-all.php?inventory_id=<?php echo $row['inventory_id'] ?>'">Remove Equipment</button></div>

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
<?php
unset($_SESSION['notification']);
?>