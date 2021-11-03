<?php include "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/booking.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>

        <div class="welcomenote"><h1></h1></div>

        <div class="HdividerL"></div>
        <div class="uppart">
            <div class="vboderdivider"></div>
            <div class="middle">
                <div class="note"><h2>Booking</h2></div>
                <div class="cont">
                    <div class="left">
                        <div class="bkstatus">
                            <h1>Availability Checker</h1>
                            <div class="avail">
                                <div class="calendar-input">
                                    <input type='Date' required>
                                    <button class="check_btn" type="submit" name="date-submit">CHECK</button>
                                </div>
                                <div class="statbx"><i class='bx bxs-message-square-check'></i></div>
                                <div class="txtvi">
                                    <p>Avilable for booking</p>
                                </div>
                            </div>
                        </div>
                        <div id="calendar-t" class="calendar-top">
                            <h1>Calendar</h1>
                            <div id="calendar" class="calendar"></div>
                        </div>
                    </div>
                    <div class="midvdiv"></div>
                    <div class="right">
                        <h1>Time slots</h1>
                        <div class="tslotlist">
                            <div class="grid-container">
                                <div class="grid-item"> 06.00 a.m. - 08.00 a.m.</div>
                                <div class="grid-item"> 08.00 a.m. - 10.00 a.m.</div>
                                <div class="grid-item"> 10.00 a.m. - 12.00 a.m.</div>
                                <div class="grid-item"> 12.00 a.m. - 02.00 p.m.</div>
                                <div class="grid-item"> 02.00 p.m. - 04.00 p.m.</div>
                                <div class="grid-item"> 04.00 p.m. - 06.00 p.m.</div>
                                <div class="grid-item"> 06.00 p.m. - 08.00 p.m.</div>
                                <div class="grid-item"> 08.00 p.m. - 10.00 p.m.</div>
                            </div>
                            
                            
                            <div class="selectslot">
                                <h1>Booking for a time slot</h1> 
                                <div class="select__div">
                                    <p><i class='bx bxs-time'></i>Select Time Slot</p>
                                    <label>
                                        <select id="membership" class="form_input" required name="membership_cc">
                                            <option value="" disabled selected> Prefer time slot </option>
                                            <option value=1> 6.00 a.m. -  8.00 a.m. </option>
                                            <option value=2> 8.00 a.m. - 10.00 a.m. </option>
                                            <option value=3>10.00 a.m. - 12.00 a.m.</option>
                                            <option value=4>12.00 a.m. -  2.00 p.m.</option>
                                            <option value=1>12.00 a.m. -  2.00 p.m.</option>
                                            <option value=2> 2.00 p.m. -  4.00 p.m.</option>
                                            <option value=3> 4.00 p.m. -  6.00 p.m.</option>
                                            <option value=4> 6.00 p.m. -  8.00 p.m.</option>
                                            <option value=4> 8.00 p.m. - 10.00 p.m.</option>
                                        </select>
                                    </label>  
                                </div>
                                <div class="fixT">
                                    <button class="check_btn" id="tbook" type="submit" name="time-submit">MAKE BOOKING</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="vboderdivider"></div>
        </div>
        <div></div>

        <div class="HdividerL"></div>   
    </section>
    
    <?php include "includes/footer.php" ?>


</body>

   <script type="text/javascript" src="js/calendar.js"> </script>

</html>