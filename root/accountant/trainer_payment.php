<?php

//require "includes/db.php";
?>
<?php require "includes/check_login.php" ?>

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
                <!-- <div class="search-box">
                    <button class="see-more2"><a href="member_payment_form.php">+ ADD PAYMENT</a></button>
                </div> -->
            </div>
            

            <div class="member-list">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Trainer ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Phone Number</th>
                            <th>Completed Members</th>
                            <!-- <th>Payment Date</th> -->
                            <th>Payment Amount</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody id="output">

                    <?php
        $mydate=date("y-m-d");
        $month=date('m',strtotime($mydate));
        $year=date('y',strtotime($mydate));
        ?>
                        <?php


                        $sql1 = "SELECT * FROM trainer_receviables" ;
                        $result1 = mysqli_query($conn, $sql1);

                        // $sql = "SELECT * FROM trainer";
                        // $result = mysqli_query($conn, $sql);
                        $sql2 = "SELECT * FROM trainer_payables";
                        $result2 = mysqli_query($conn, $sql2);

                        // if(empty(mysqli_fetch_assoc($result1))){
                        //     $text="text";
                        // }
                        // else{
                        //     $text="";
                        // }
                       

                        

                        while ($trainer_row2 = mysqli_fetch_assoc($result1) ) {
                            if($trainer_row2['assignment_count']!=0){

                                $trainer_id = $trainer_row2['trainer_id'];

                           
                            $sql = "SELECT * FROM trainer WHERE trainer_id = '" . $trainer_id . "'";
                            $result = mysqli_query($conn, $sql);
                            $trainer_row = mysqli_fetch_assoc($result);

                            $sql3 = "SELECT * FROM users WHERE username = '" . $trainer_row["username"] . "'";
                            $result3 = mysqli_query($conn, $sql3);
                            $trainer_row3 = mysqli_fetch_assoc($result3);

                            

                            $f_name = $trainer_row['f_name'];
                            $l_name = $trainer_row['l_name'];
                            $phone_no = $trainer_row['phone_no'];
                            $username=$trainer_row['username'];

                            $email=$trainer_row3['email'];
                            $assigned_members = $trainer_row2['assignment_count'];
                            $payment_amount = $assigned_members * $trainer_row['rate']*80/100;


                        ?>
                        
                        
                            <tr>
                                <td><?php echo "$trainer_id" ?></td>
                                <td><?php echo "$f_name" ?></td>
                                <td><?php echo "$l_name" ?></td>
                                <td><?php echo "$phone_no" ?></td>
                                <td><?php echo "$assigned_members" ?></td>
                                <!-- <td><?php echo "$payment_date" ?></td> -->
                                <td><?php echo "$payment_amount" ?></td>
                                <td> <button type="button" class="hero_btn" style="width:100px ; heigth:20px; padding:0px; margin:0px ;font-size: 13px;" onclick="location.href='trainer_payment_form.php?username=<?=$username?>&&payment_amount=<?=$payment_amount?>&&email=<?=$email?>'">Pay Now</button> </td>
                                
                            </tr>
                            

                            <?php } ?>
                            
                        <?php } ?>
                        <tr>
                                
                                <!-- <td><?php echo "$text"  ?></td> -->
                            </tr>
                    </tbody>
                </table>


            </div>







            <div class="member-list">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Trainer ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Phone Number</th>
                            <th>Payment Amount</th>
                        </tr>
                    </thead>
                    <tbody id="output">
                        <?php


                        $sql1 = "SELECT * FROM trainer_receviables";
                        $result1 = mysqli_query($conn, $sql1);

                        // $sql = "SELECT * FROM trainer";
                        // $result = mysqli_query($conn, $sql);
                        $sql2 = "SELECT * FROM trainer_payables  WHERE payment_date >='$year-$month-01'";
                        $result2 = mysqli_query($conn, $sql2);

                        

                        while ($trainer_row2 = mysqli_fetch_assoc($result2)) {
                            $trainer_id = $trainer_row2['trainer_id'];

                           
                            $sql = "SELECT * FROM trainer WHERE trainer_id = '" . $trainer_id . "'";
                            $result = mysqli_query($conn, $sql);
                            $trainer_row = mysqli_fetch_assoc($result);

                            $sql3 = "SELECT * FROM users WHERE username = '" . $trainer_row["username"] . "'";
                            $result3 = mysqli_query($conn, $sql3);
                            $trainer_row3 = mysqli_fetch_assoc($result3);

                            

                            $f_name = $trainer_row['f_name'];
                            $l_name = $trainer_row['l_name'];
                            $phone_no = $trainer_row['phone_no'];
                            $username=$trainer_row['username'];

                            $email=$trainer_row3['email'];
                            $payment_amount = $trainer_row2['amount'];


                        ?>



                            <tr>
                                <td><?php echo "$trainer_id" ?></td>
                                <td><?php echo "$f_name" ?></td>
                                <td><?php echo "$l_name" ?></td>
                                <td><?php echo "$phone_no" ?></td>
                                <td><?php echo "$payment_amount" ?></td>
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