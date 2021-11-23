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

        <?php 
            date_default_timezone_set('Asia/Colombo');
            $date = date('Y-m-d');
            $maxdate = date('Y-m-d',strtotime("+2 week", strtotime($date)));
        ?>
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
                                    <form action="dashboard.php" id="dcheck_form" >
                                    <input type="date" class="date__input" value=<?php echo $date?> id="bk_date" placeholder=" " name="booking_cc" min=<?php echo $date?> max=<?php echo $maxdate?> required>
                                    <button type="submit" class="check_btn"  name="date-submit">CHECK</button>
                                    </form>
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
                                <form action="progress.php" id="form" >
                                    <h1>Booking for a time slot</h1> 
                                    <div class="select__div">
                                    
                                        <p><i class='bx bxs-time'></i>Select Time Slot</p>
                                        <label>
                                            <select id="time_slot" class="form_input" name="time_sl" required >
                                                <option value="" disabled selected> Prefer time slot </option>
                                                <option value=1> 6.00 a.m. -  8.00 a.m. </option>
                                                <option value=2> 8.00 a.m. - 10.00 a.m. </option>
                                                <option value=3>10.00 a.m. - 12.00 a.m.</option>
                                                <option value=4>12.00 a.m. -  2.00 p.m.</option>
                                                <option value=5> 2.00 p.m. -  4.00 p.m.</option>
                                                <option value=6> 4.00 p.m. -  6.00 p.m.</option>
                                                <option value=7> 6.00 p.m. -  8.00 p.m.</option>
                                                <option value=8> 8.00 p.m. - 10.00 p.m.</option>
                                            </select>
                                        </label>  
                                    </div>
                                    <div class="fixT">
                                        <button type="submit" class="check_btn" id="tbook"  name="time-submit">MAKE BOOKING</button>
                                    </div>
                                </form>
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