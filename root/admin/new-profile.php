<?php include "includes/check_login.php" ?>
<?php include "includes/db.php" ?>
<?php $username = $_SESSION['username'] ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/profile.css">
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
            <div class="cover">
                <img src="media/cover.jpg" alt="">
            </div>
            <div class="overlayy">

                <form action='profile-image-change.php?username=' $username' method='post' enctype='multipart/form-data'>

                    <label id='update_profile2'> <i class='bx bx-upload ccc'></i>
                        <input type='file' name='u_image' size='60' />
                    </label><br><br><br><br>
                    <button id='button_profile' name='update' class='upp'>Update Cover</button>
                </form>



            </div>
            <div class="profile-img">
                <?php

                $image_select = "SELECT image FROM admin WHERE username='$username'";
                $result2 = mysqli_query($conn, $image_select);
                $image_row = mysqli_fetch_assoc($result2);
                $avatar = $image_row['image'];

                ?>
                <img src="media/<?php echo $avatar ?>" alt="">
                <div class="overlay">

                    <form action='profile-image-change.php?username=' $username' method='post' enctype='multipart/form-data'>

                        <label id='update_profile'> <i class='bx bx-upload'></i>
                            <input type='file' name='u_image' size='60' />
                        </label><br><br><br><br>
                        <button id='button_profile' name='update' class='upp'>Update Image</button>
                    </form>



                </div>

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

<?php
unset($_SESSION['notification']);
?>