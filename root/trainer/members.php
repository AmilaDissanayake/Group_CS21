<?php include "includes/check_login.php";
require "includes/db.php";

$trainer_id = $_SESSION['trainer_id'];

$sql = "SELECT * FROM member WHERE assign_trainer = $trainer_id";
$assign_query = mysqli_query($conn, $sql);
$assign_members = mysqli_num_rows($assign_query);
?>

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
                <h1 class="top-header">Assigned members : <?php echo $assign_members; ?></h1>
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
                    <?php
                    $sql2 = "SELECT * FROM member WHERE assign_trainer = '".$trainer_id."'";
                    $result2 = mysqli_query($conn,$sql2);
                    while($member_row=mysqli_fetch_assoc($result2)){
                        $f_name = $member_row['f_name'];
                        $l_name = $member_row['l_name'];
                        $image = $member_row['image'];
                        $contact = $member_row['phone_no'];
                        $gender = $member_row['gender'];
                        $injury = $member_row['injuries'];
                        $dob = $member_row['dob'];
                        $today = date("Y-m-d");
                        $diff = date_diff(date_create($dob), date_create($today));
                    ?>
                    <tr>
                        <td><div class="first-column"><span class="avatar"><img src="../media/members/<?php echo $image ?>"></span><?php echo " " . $f_name . " " . $l_name ?></div></td>
                        <td><?php echo $diff->format('%y'); ?></td>
                        <td><?php echo $gender; ?></td>
                        <td><?php echo $contact; ?></td>
                        <td><?php echo $injury; ?></td>
                        <td><div class="row-action">
                            <button class="about_btn1" onclick="location.href='members.php'">Meal Plan and Schedule</button> 
                            </div>
                        </td>
                        <td><div class="row-action">
                            <button class="about_btn1" onclick="location.href='members.php'">Progress</button> 
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
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