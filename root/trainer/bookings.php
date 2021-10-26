<?php include "includes/check_login.php";
        require "includes/db.php";
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/booking.css">
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
            <?php
                    $trainer_id = $_SESSION['trainer_id'];
                    $date = date("y-m-d");

                    $sql1 = "SELECT * FROM book WHERE trainer_id = '".$trainer_id."' AND date = '".$date."'";
                    $result1 = mysqli_query($conn,$sql1);
                    $count = mysqli_num_rows($result1);
            ?>
                <h1 class="top-header">Today Bookings : <?php echo $count ?></h1>
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
                        <th>Date</th>
                        <th>Time</th>
                        <th>Contact No.</th>
                        <th></th>
                    </tr>
                    <?php
                    $sql2 = "SELECT * FROM book WHERE trainer_id = '".$trainer_id."'";
                    $result2 = mysqli_query($conn,$sql2);
                    while($book_row2=mysqli_fetch_assoc($result2)){
                        $book_id = $book_row2['book_id'];
                        $member_id = $book_row2['member_id'];
                        $date = $book_row2['date'];
                        $time = $book_row2['time'];

                        $sql3 = "SELECT f_name,l_name,phone_no,image FROM member WHERE member_id= '".$member_id."'";
                        $result3 = mysqli_query($conn, $sql3);
                        $book_row3 = mysqli_fetch_assoc($result3);

                        $f_name = $book_row3['f_name'];
                        $l_name = $book_row3['l_name'];
                        $phone_no = $book_row3['phone_no'];
                        $image = $book_row3['image'];
                    ?>
                    <tr>
                        <td>
                        <div class="first-column"><span class="avatar"><img src="../media/members/<?php echo $image ?>"></span><?php echo " " . $f_name . " " . $l_name ?></div>
                        </td>
                        <td><?php echo $date; ?></td>
                        <td><?php echo $time; ?></td>
                        <td><?php echo $phone_no; ?></td>
                        <td><div class="row-action">
                            <button class="about_btn" onclick="location.href='members.php'">Cancel booking</button> 
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