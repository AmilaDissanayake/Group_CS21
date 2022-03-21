<?php

    require "includes/db.php";
?>
<?php require "includes/check_login.php"?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>




        <div class="home-content">
            <div class="search-bar">
                <div class="search-box" id="search-bar">
                    <input type="text" placeholder="Search by name..." id="search">
                    <i class='bx bx-search'></i>
                </div>
                <div class="search-box">
                    <button class="see-more2"><a href="member_payment_form.php">+ ADD PAYMENT</a></button>
                </div>
            </div>

            <div class="member-list">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Trainer ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Phone Number</th>
                            <th>Assigned Members</th>
                            <th>Payment Date</th>
                            <th>Payment Amount</th>
                        </tr>
                    </thead>
                    <tbody id="output">
                        <?php
                            $sql = "SELECT * FROM trainer";
                            $result = mysqli_query($conn, $sql);
                            while ($trainer_row = mysqli_fetch_assoc($result)) {
                                $trainer_id = $trainer_row['trainer_id'];
                                $f_name = $trainer_row['f_name'];
                                $l_name = $trainer_row['l_name'];
                                $phone_no = $trainer_row['phone_no'];
                                $assigned_members = $trainer_row['assigned_members'];
                                
                                $sql2 = "SELECT * FROM trainer_payments WHERE trainer_id = '".$trainer_id."'";
                                $result2 = mysqli_query($conn, $sql2);
                                $trainer_row2 = mysqli_fetch_assoc($result2);
                                $payment_amount = $trainer_row2['payment_amount'];
                                $payment_date = $trainer_row2['payment_date'];


                        ?>

                        <tr>
                            <td><?php echo "$trainer_id"?></td>
                            <td><?php echo "$f_name"?></td>
                            <td><?php echo "$l_name"?></td>
                            <td><?php echo "$phone_no"?></td>
                            <td><?php echo "$assigned_members"?></td>
                            <td><?php echo "$payment_date"?></td>
                            <td><?php echo "$payment_amount"?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
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
    <?php include "includes/footer.php" ?>


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