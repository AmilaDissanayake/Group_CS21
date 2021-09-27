<?php require "includes/db.php"; ?>
<?php require "includes/date-joined.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/trainers.css" />
    <link rel="stylesheet" type="text/css" href="css/header_hero.css" />
</head>

<body>

    <!-- <div class="vk"> -->

    <?php



    $query = "SELECT * FROM trainer";

    $select_query = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_query)) {
        $f_name = $row['f_name'];
        $l_name = $row['l_name'];
        $image = $row['image'];
        $trainer_id = $row['trainer_id'];
        $about = $row['about'];
        $rate = $row['rate'];
        $date_joined = date_registered($trainer_id);

        if (strlen($about) > 200) {
            $about_short = substr($about, 0, 100) . '...';
        }

        // $post_author = $row['post_author'];
        // $post_date = $row['post_date'];
        // $post_content = $row['post_content'];

        $query2 = "SELECT * FROM review WHERE trainer_id = $trainer_id";
        $review_query = mysqli_query($connection, $query2);
        $review_count = mysqli_num_rows($review_query);
        $review_value = 0;

        while ($review_row = mysqli_fetch_assoc($review_query)) {
            $review_value += $review_row['stars'];
        }


        // $select_query = mysqli_query($connection, $query);

    ?>



        <div class="card">
            <div class="card-image"><img src="media/trainers/<?php echo $image ?>"></div>
            <div class="card-text">
                <span class="date">Joined <?php echo $date_joined ?></span>
                <h2><?php echo $f_name . " " . $l_name ?></h2>
                <h2>⭐(<?php echo $review_value / $review_count ?>)</h2>

                <p><?php echo $about_short ?></p>
                <div class="button-inner">
                    <div class="about_button"><button class="about_btn" onclick="location.href='signup.html'">PROFILE
                        </button></div>
                    <div class="about_button"><button class="about_btn" onclick="location.href='signup.html'">CALL</button></div>
                </div>
            </div>
            <div class="card-stats">
                <div class="stat">
                    <div class="value">4<sup>m</sup></div>
                    <div class="type">read</div>
                </div>
                <div class="stat border">
                    <div class="value"><?php echo $rate ?>/=</div>
                    <div class="type">/month</div>
                </div>
                <div class="stat">
                    <div class="value"><?php echo  $review_count ?></div>
                    <div class="type">reviews</div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>

    <!-- </div> -->

</body>

</html>