<?php

include 'db.php';



if (isset($_POST['username'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);

    $query = "SELECT count(*) AS cntUser FROM users WHERE username ='" . $username . "'";
    $result = mysqli_query($conn, $query);

    $response = "<span style='color: #86ff71;'><b>Available</b></span>";

    if (mysqli_num_rows($result)) {

        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $response = "<span style='color: #e74c3c;'><b>Not Available</b></span>";
        }
    }

    echo $response;
    die;
}

<td>
                                        <div class='first-column'><span class='avatar'><img src='../media/members/<?php echo $row['image'] ?>"></span><?php echo " " . $row['f_name'] . " " . $row['l_name'] ?></div>
                                    </td>

                                    <td>
                    <div class="row-action">
                        <div class="about_button"><button class="about_btn" onclick="location.href='tel:<?php echo $phone_no ?>'">View/Update/Delete</button></div>
                        <!-- <div class="about_button"><button class="about_btn" onclick="location.href='tel:<?php echo $phone_no ?>'">Delete</button></div> -->
                    </div>
                </td>
