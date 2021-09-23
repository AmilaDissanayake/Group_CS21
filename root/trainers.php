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

        // $post_author = $row['post_author'];
        // $post_date = $row['post_date'];
        // $post_content = $row['post_content'];





        $date_joined = date_registered($trainer_id);



    ?>



        <div class="card">
            <div class="card-image"><img src="media/trainers/<?php echo $image ?>"></div>
            <div class="card-text">
                <span class="date">Joined <?php echo $date_joined ?></span>
                <h2><?php echo $f_name . " " . $l_name ?></h2>
                <p>Lorem ipsum dolor sit amet consectetur, Ducimus, repudiandae temporibus omnis illum maxime quod deserunt eligendi dolor</p>
            </div>
            <div class="card-stats">
                <div class="stat">
                    <div class="value">4<sup>m</sup></div>
                    <div class="type">read</div>
                </div>
                <div class="stat border">
                    <div class="value">5123</div>
                    <div class="type">views</div>
                </div>
                <div class="stat">
                    <div class="value">32</div>
                    <div class="type">comments</div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>

    <!-- </div> -->

</body>

</html>