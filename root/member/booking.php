

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/booking.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>

        <div class="welcomenote"><h1></h1></div>
 
        <!-- <div class="dashcover"></div> -->
        <!-- <div class="duhead"></div> -->
 
        <div class="divider"></div>
        <div class="uppart">
            <div class="vdivid"></div>
            <div class="middle">
                <div class="note"><h2>Booking</h2></div>
                <div class="bkstatus">
                        <h1>Availability Checker</h1>
                        <div class="avail">
                            <div class="statbx"><i class='bx bxs-message-square-check'></i></div>
                            <!-- <i class='bx bxs-message-square-x' ></i> -->
                            <div class="txtvi">
                                <p>Avilable for booking</p>
                            </div>
                        </div>
                        <div class="check_button"><button class="check_btn" >CHECK</button></div>
                </div>
<!-- 
                <div id="calendar-t" class="calendar-top">
                    <div id="calendar" class="calendar"></div>
                </div> -->
                <div id='calendar' class="calendar"></div>
            </div>
            <div class="vdivid"></div>
        </div>
        <div></div>

        <div class="divider"></div>   
    </section>
    
    <?php include "includes/footer.php" ?>


</body>

   <script type="text/javascript" src="js/calendar.js"> </script>

</html>